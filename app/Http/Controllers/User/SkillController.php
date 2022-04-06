<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\SubSkillDataTable;
use App\DataTables\SkillDataTable;
use App\Http\Requests\Skill\StoreSkillRequest;
use App\Http\Requests\Skill\StoreSubSkill;
use App\Http\Requests\Skill\UpdateSkillRequest;
use App\Http\Requests\skill\UpdateSubSkill;
use App\Models\Skill;
use App\Traits\HasAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SkillController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubSkillDataTable $datatables)
    {

        $skill = Skill::where("user_id",auth()->user()->id)->where("skill_level",NULL)->where("status",1)->get();
        return $datatables->render("user.skill.index",compact("skill"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SkillDataTable $datatables)
    {
        return $datatables->render("user.skill.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request)
    {
        $skill = new Skill();
        $save = $skill->create($request->validated() + ["user_id" => auth()->user()->id,"slug" => Str::slug($request->validated()["skill_name"])]);
        if($save) return redirect()->route("skill.create")->with("success","berhasil tambah data skill");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storesubSkill(StoreSubSkill $request)
    {
        $skill = new Skill();
        $save = $skill->create($request->validated() + ["user_id" => auth()->user()->id,"slug" => Str::slug($request->validated()["skill_name"])]);
        $attch = $this->attach_modul($request->validated(),$save->id,"skill");
        if($attch) return redirect()->route("skill.index")->with("success","berhasil tambah data sub skill");
    }
    
      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function editsubSkill(Skill $skill)
    {
        $this->authorize("view",$skill);
        $list_skill = Skill::where("user_id",auth()->user()->id)->where("skill_level",NULL)->where("status",1)->get();
        return view("user.skill.editSub",compact("skill","list_skill"));
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroysubSkill(Skill $skill)
    {
        $this->authorize("delete",$skill);
        $delete = $skill->delete();
        if($delete) return redirect()->route("skill.index")->with("success","berhasil hapus data sub skill");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $this->authorize("view",$skill);
        return view("user.skill.edit",compact("skill"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $this->authorize("update",$skill);
        $update = $skill->update($request->validated());
        if($update) return redirect()->route("skill.create")->with("success","berhasil update data skill");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function updateSubskill(UpdateSubSkill $request, Skill $skill)
    {
        $this->authorize("update",$skill);
        $skill->update($request->validated());
        $update = $this->sync_modul($request->validated(),$skill->id,"skill");
        if($update) return redirect()->route("skill.index")->with("success","berhasil update data sub skill");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $this->authorize("delete",$skill);
        $this->detach_modul($skill);
        $delete = $skill->delete();
        if($delete) return redirect()->route("skill.create")->with("success","berhasil hapus data sub skill");
    }
}
