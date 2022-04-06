<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\InterestDataTable;
use App\Http\Requests\Interest\StoreInterestRequest;
use App\Http\Requests\Interest\UpdateInterestRequest;
use App\Models\Interest;
use App\Traits\HasAssign;

class InterestController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InterestDataTable $datatables)
    {
        return $datatables->render("user.interest.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.interest.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterestRequest $request)
    {
        $model = new Interest();
        $save = $model->create($request->validated() + ['user_id' => auth()->user()->id]);
        $attch = $this->attach_modul($request->validated(),$save->id,"interest");
        if($attch)return redirect()->route("interest.index")->with("success","berhasil simpan data interest");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(Interest $interest)
    {
        $this->authorize("view",$interest);
        return view("user.interest.edit",compact("interest"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterestRequest  $request
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterestRequest $request, Interest $interest)
    {
        $this->authorize("update",$interest);
        $interest->update($request->validated() + ['user_id' => auth()->user()->id]);
        $update = $this->sync_modul($request->validated(),$interest->id,'interest');
        if($update)return redirect()->route("interest.index")->with("success","berhasil ubah data interest");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interest $interest)
    {
        $this->authorize("delete",$interest);
        $this->detach_modul($interest);
        $remove = $interest->delete();
        if($remove)return redirect()->route("interest.index")->with("success","berhasil hapus data interest");
    }
}
