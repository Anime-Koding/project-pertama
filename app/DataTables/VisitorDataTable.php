<?php

namespace App\DataTables;

use App\Models\Visitor;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VisitorDataTable extends DataTable
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
            ->addIndexColumn()
            ->addColumn('action',function($visitor){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("visitor.edit",$visitor->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("visitor.destroy",$visitor->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn('group',function($visitor){
                return $visitor->group->pluck('name')->implode(', ');
            })
            ->addColumn("berkunjung",function($visitor){
                return $visitor->created_at->diffForHumans();
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Visitor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Visitor $model)
    {
        return $model->newQuery()->where("user_id",auth()->user()->id)->with("group:name");
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('visitor-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
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
            Column::make('group','group.name')->orderable(false),
            Column::make('nama'),
            Column::make('whatapp'),
            // Column::make('berkunjung'),
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
        return 'Visitor_' . date('YmdHis');
    }
}
