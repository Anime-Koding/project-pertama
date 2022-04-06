<?php

namespace App\DataTables;

use App\Models\FeatureGroup;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FeatureGroupDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('active', function($group){
                if($group->active)return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->editColumn('description', function($group){
                if($group->description)return $group->description;
                return "-";
            })
            ->addColumn('action',function($group) {
                $a = $group->features->contains("id",5) ? "btn-success" : "btn-danger";
                $c = $group->features->contains("id",14) ? "btn-success" : "btn-danger";
                return '<div class="d-flex justify-content-center align-items-start">
                
                <form method="POST" action="'.route("group.change_status").'" class="mr-1">
                    '.csrf_field().'
                    <input type="hidden" name="type" value="C">
                    <input type="hidden" name="id" value="'.$group->id.'">
                    <button type="submit" class="btn btn-sm '.$c.'">C</button>
                </form>
                
                <form method="POST" action="'.route("group.change_status").'" class="mr-1">
                    '.csrf_field().'
                    <input type="hidden" name="type" value="A">
                    <input type="hidden" name="id" value="'.$group->id.'">
                    <button type="submit" class="btn btn-sm '.$a.'">A</button>
                </form>

                <a class="btn btn-sm btn-primary mr-1" href="'.route("group.edit",$group->id).'"><em class="icon ni ni-pen2"></em></a>

                <form method="POST" action="'.route("group.destroy",$group->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn("layout_name",function($group){
                return $group->layout->name;
            })
            ->addIndexColumn()
            ->rawColumns(['action','active','features']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\FeatureGroup $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(FeatureGroup $model)
    {
        $group = FeatureGroup::where("user_id",auth()->user()->id)->get();
        $collection = $group->first(function ($value, $key) {
            return $value->name == "public";
        });
        return $model->newQuery()->with("layout:id,name")->where("user_id",auth()->user()->id)->where("id","!=",$collection->id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('featuregroup-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(2)
                    ->responsive(true);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('No')->orderable(false)->searchable(false),
            Column::make('layout_name','layout.name')->orderable(false)->searchable(false),
            Column::make('name'),
            Column::make('description'),
            Column::make('active'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(150),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'FeatureGroup_' . date('YmdHis');
    }
}
