<?php

namespace App\DataTables;

use App\Models\Interest;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InterestDataTable extends DataTable
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
            ->editColumn('status', function($interest){
                if($interest->status == '1')return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->addColumn('action',function($interest){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("interest.edit",$interest->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("interest.destroy",$interest->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn('group',function($interest){
                return $interest->group_feature->pluck('name')->implode(', ');
            })
            ->addIndexColumn()
            ->rawColumns(['action','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Interest $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Interest $model)
    {
        return $model->newQuery()->where("user_id",auth()->user()->id)->with("group_feature:name");
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('interest-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
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
            Column::make('group','group_feature.name')->orderable(false),
            Column::make('title'),
            Column::make('details'),
            Column::make('order'),
            Column::make('status'),
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
        return 'interest_' . date('YmdHis');
    }
}
