<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\LanguageDataTable;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Traits\HasAssign;

class LanguageController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LanguageDataTable $datatables)
    {
        return $datatables->render("user.language.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.language.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguageRequest $request)
    {
        $model = new Language();
        $save = $model->create($request->validated() + ["user_id" => auth()->user()->id]);
        $attch = $this->attach_modul($request->validated(),$save->id,"language");
        if($attch); return redirect()->route("language.index")->with("success","berhasil simpan data language");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        $this->authorize("view",$language);
        return view("user.language.edit",compact("language"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguageRequest  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $this->authorize("update",$language);
        $language->update($request->validated() + ["user_id" => auth()->user()->id]);
        $update = $this->sync_modul($request->validated(),$language->id,'language');
        if($update); return redirect()->route("language.index")->with("success","berhasil ubah data language");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $this->authorize("delete",$language);
        $this->detach_modul($language);
        $remove = $language->delete();
        if($remove); return redirect()->route("language.index")->with("success","berhasil hapus data language");
    }
}
