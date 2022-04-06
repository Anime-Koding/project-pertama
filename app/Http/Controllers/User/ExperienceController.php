<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experience\StoreExperienceRequest;
use App\Http\Requests\Experience\UpdateExperienceRequest;
use App\Models\Experience;
use App\DataTables\ExperienceDataTable;
use App\Traits\HasAssign;

class ExperienceController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExperienceDataTable $dataTable)
    {
        return $dataTable->render('user.experience.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.experience.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Experience\StoreExperienceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperienceRequest $request)
    {
        $experience = new Experience();
        $save = $experience->create($request->validated() + ['user_id' => auth()->user()->id,'to_date' => isset($request->validated()["is_present"]) && $request->validated()["is_present"] == "1" ? NULL : $request->validated()["to_date"]]);
        $attch = $this->attach_modul($request->validated(),$save->id,"experience");
        if($attch) return redirect()->route("experience.index")->with("success", "berhasil simpan data experience");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        $this->authorize('view',$experience);
        return view("user.experience.edit",compact("experience"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExperienceRequest  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        $this->authorize('update',$experience);
        $experience->update($request->validated() + ['user_id' => auth()->user()->id,'to_date' => isset($request->validated()["is_present"]) && $request->validated()["is_present"] == "1" ? NULL : $request->validated()["to_date"]]);
        $update = $this->sync_modul($request->validated(),$experience->id,"experience");
        if($update)return redirect()->route("experience.index")->with("success","berhasil melakukan update experience");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $this->authorize('delete',$experience);
        $this->detach_modul($experience);
        $remove = $experience->delete();
        if($remove)return redirect()->route("experience.index")->with("success","berhasil hapus data experience");
    }
}
