<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\ReferenceDataTable;
use App\Http\Requests\Reference\StoreReferenceRequest;
use App\Http\Requests\Reference\UpdateReferenceRequest;
use App\Models\Reference;
use App\Traits\HasAssign;

class ReferenceController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ReferenceDataTable $datatables)
    {
        return $datatables->render("user.reference.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.reference.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReferenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferenceRequest $request)
    {
        $model = new Reference();
        $save = $model->create($request->validated() + ["user_id" => auth()->user()->id]);
        $attch = $this->attach_modul($request->validated(),$save->id,"reference");
        if($attch); return redirect()->route("reference.index")->with("success","berhasil simpan data reference");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        $this->authorize("view",$reference);
        return view("user.reference.edit",compact("reference"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferenceRequest  $request
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        $this->authorize("update",$reference);
        $reference->update($request->validated() + ["user_id",auth()->user()->id]);
        $update = $this->sync_modul($request->validated(),$reference->id,'reference');
        if($update); return redirect()->route("reference.index")->with("success","berhasil ubah data reference");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        $this->authorize("delete",$reference);
        $this->detach_modul($reference);
        $remove = $reference->delete();
        if($remove); return redirect()->route("reference.index")->with("success","berhasil hapus data reference");
    }
}
