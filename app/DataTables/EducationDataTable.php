<?php

namespace App\DataTables;

use App\Models\Education;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EducationDataTable extends DataTable
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
            ->editColumn('status', function($education){
                if($education->status == '1')return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->addColumn('action',function($education){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("education.edit",$education->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("education.destroy",$education->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn('From/To',function($education){
                $start = Carbon::parse($education->from_date)->format("F d, Y");
                $end = $education->to_date !== NULL ? Carbon::parse($education->to_date)->format("F d, Y") : "Present";
                return $start . " - " . $end;
            })
            ->addColumn('group',function($education){
                return $education->group_feature->pluck('name')->implode(', ');
            })
            ->addIndexColumn()
            ->rawColumns(['action','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \Education $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Education $model)
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
                    ->setTableId('experience-table')
                    ->columns($this->getColumns())
                    ->responsive(true)
                    ->minifiedAjax();
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('No','No')->searchable(false)->orderable(false)->width(50),
            Column::make('group','group_feature.name')->orderable(false),
            Column::make('degree_name'),
            Column::make('institution_name'),
            Column::make('From/To'),
            Column::make('detail'),
            Column::make('status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Education_' . date('YmdHis');
    }
}
