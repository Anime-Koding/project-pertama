<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\StoreEducationRequest;
use App\Http\Requests\Education\UpdateEducationRequest;
use App\Models\Education;
use App\DataTables\EducationDataTable;
use App\Traits\HasAssign;

class EducationController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EducationDataTable $datatables)
    {
        return $datatables->render("user.education.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.education.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEducationRequest $request)
    {
        $education = new Education();
        $save = $education->create($request->validated() + ['user_id' => auth()->user()->id,'to_date' => isset($request->validated()["is_present"]) && $request->validated()["is_present"] == "1" ? NULL : $request->validated()["to_date"]]);
        $attch =  $this->attach_modul($request->validated(),$save->id,"education");
        if($attch)return redirect()->route("education.index")->with("success","tambah data education");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        $this->authorize("view",$education);
        return view("user.education.edit",compact("education"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducationRequest  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducationRequest $request, Education $education)
    {
        $this->authorize("update",$education);
        $education->update($request->validated() + ['user_id' => auth()->user()->id,'to_date' => isset($request->validated()["is_present"]) && $request->validated()["is_present"] == "1" ? NULL : $request->validated()["to_date"]]);
        $update = $this->sync_modul($request->validated(),$education->id,"education");
        if($update)return redirect()->route("education.index")->with("success","berhasil update data education");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $this->authorize("delete",$education);
        $this->detach_modul($education);
        $remove = $education->delete();
        if($remove)return redirect()->route("education.index")->with("success","berhasil hapus data education");
    }
}
