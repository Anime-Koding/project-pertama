<?php

namespace App\DataTables;

use App\Models\Skill;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubSkillDataTable extends DataTable
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
            ->editColumn('status', function($skill){
                if($skill->status == '1')return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                return "<a class='btn btn-sm btn-danger text-white'>DeActive</a>";
            })
            ->addColumn('action',function($skill){
                return '<div class="d-flex justify-content-center align-items-start"><a class="btn btn-sm btn-primary mr-1" href="'.route("skill.editsubSkill",$skill->id).'"><em class="icon ni ni-pen2"></em></a>
                <form method="POST" action="'.route("skill.destroysubSkill",$skill->id).'">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-sm btn-danger"><em class="icon ni ni-trash"></em></button>
                </form></div>';
            })
            ->editColumn('skill_level',function($skill){
                return $skill->skill_level . "%";
            })
            ->addColumn('group',function($experience){
                return $experience->group_feature->pluck('name')->implode(', ');
            })
            ->addIndexColumn()
            ->rawColumns(['action','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \Skill $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Skill $model)
    {
        return $model->newQuery()->with("group_feature:name")->leftJoin('skills AS coreskill', 'skills.skill_id', '=', 'coreskill.id')->select(['skills.*','coreskill.skill_name as skill_name_dua'])->where("skills.user_id",auth()->user()->id)->where("skills.skill_level","!=",NULL);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('skill-table')
                    ->columns($this->getColumns())
                    ->responsive(true)
                    ->minifiedAjax()
                    ->orderBy(2);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('No')->searchable(false)->orderable(false)->width(50),
            Column::make('group','group_feature.name')->orderable(false),
            Column::make('skill_name')->title("Sub skill"),
            Column::make('skill_name_dua','coreskill.skill_name')->title("Skill"),
            Column::make('skill_level'),
            Column::make('order'),
            Column::make('status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Skill_' . date('YmdHis');
    }
}
