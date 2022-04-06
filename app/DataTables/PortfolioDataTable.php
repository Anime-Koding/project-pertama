<?php

namespace App\DataTables;

use App\Models\Portfolio;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PortfolioDataTable extends DataTable
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
            ->editColumn('status', function($portfolio){
                if($portfolio->status === 1)return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->editColumn('thumbnail', function($portfolio){
                if($portfolio->thumbnail !== NULL)return '<img src="'.url("storage/".$portfolio->thumbnail).'"/>';
                return "-";
            })
            ->editColumn('details', function($portfolio){
                if($portfolio->details !== NULL)return $portfolio->details;
                return "-";
            })
            ->addColumn('action',function($portfolio){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("portfolio.edit",$portfolio->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("portfolio.destroy",$portfolio->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn('From/To',function($portfolio){
                $start = Carbon::parse($portfolio->from_date)->format("F d, Y");
                $end = $portfolio->to_date !== NULL ? Carbon::parse($portfolio->to_date)->format("F d, Y") : "Present";
                return $start . " - " . $end;
            })
            ->addColumn('group',function($experience){
                return $experience->group_feature->pluck('name')->implode(', ');
            })
            ->addIndexColumn()
            ->rawColumns(['action','thumbnail','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Portfolio $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Portfolio $model)
    {
        return $model->newQuery()->where("portfolios.user_id",auth()->user()->id)->with("portfolio_category")->with("group_feature:name");
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('portfolio-table')
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
            Column::make('thumbnail'),
            Column::make('project_name'),
            Column::make('project_url'),
            Column::make('portfolio_category.category_name')->title("Category"),
            Column::make('details'),
            Column::make('From/To'),
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
        return 'Portfolio_' . date('YmdHis');
    }
}
