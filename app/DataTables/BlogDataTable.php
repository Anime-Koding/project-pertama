<?php

namespace App\DataTables;

use App\Models\Blog;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
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
            ->editColumn('status', function($blog){
                if($blog->status ==  '1')return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->addColumn('action',function($blog){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("blog.edit",$blog->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("blog.destroy",$blog->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->addColumn('thumbnail',function($blog){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("blog.edit",$blog->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("blog.destroy",$blog->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->editColumn('thumbnail', function($blog){
                if($blog->thumbnail !== NULL)return '<img src="'.url("storage/".$blog->thumbnail).'"/>';
                return "-";
            })
            ->addColumn('group',function($interest){
                return $interest->group_feature->pluck('name')->implode(', ');
            })
            ->addIndexColumn()
            ->rawColumns(['action','status','thumbnail']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Blog $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Blog $model)
    {
        return $model->newQuery()->with(["blog_categories","group_feature:name"])->where("blogs.user_id",auth()->user()->id);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('blog-table')
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
            Column::make('title'),
            Column::make('description')->title("Details"),
            Column::make('blog_categories.category_name')->title("Category"),
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
        return 'Blog_' . date('YmdHis');
    }
}
