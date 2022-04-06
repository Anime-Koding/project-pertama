<?php

namespace App\DataTables;

use App\Models\Layout;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LayoutDataTable extends DataTable
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
            ->addColumn('action',function($layout){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("layout.edit",$layout->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("layout.destroy",$layout->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->editColumn("thumbnail",function($layout){
                if($layout->thumbnail)return "<img src='".url("storage/".$layout->thumbnail)."'/>";
                return "-";
            })
            ->addIndexColumn()
            ->rawColumns(['action','thumbnail']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Layout $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Layout $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('layout-table')
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
            Column::make('name'),
            Column::make('type'),
            Column::make('thumbnail'),
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
        return 'Layout_' . date('YmdHis');
    }
}
