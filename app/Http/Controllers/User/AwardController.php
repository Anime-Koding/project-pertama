<?php

namespace App\Http\Controllers\User;

use App\DataTables\AwardDataTable;
use App\Http\Requests\Award\StoreAwardRequest;
use App\Http\Requests\Award\UpdateAwardRequest;
use App\Models\Award;
use App\Traits\HasAssign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AwardDataTable $datatables)
    {
        return $datatables->render("user.award.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.award.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAwardRequest $request)
    {
        $model = new Award();
        $save = $model->create($request->validated() + ['user_id' => auth()->user()->id]);
        $attch = $this->attach_modul($request->validated(),$save->id,"award");
        if($attch)return redirect()->route("award.index")->with("success","berhasil simpan data award");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        $this->authorize('view',$award);
        return view("user.award.edit",compact("award"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAwardRequest $request, Award $award)
    {
        $this->authorize('update',$award);
        $award->update($request->validated() + ['user_id' => auth()->user()->id]);
        $update = $this->sync_modul($request->validated(),$award->id,'award');
        if($update)return redirect()->route("award.index")->with("success","berhasil ubah data award");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        $this->authorize('delete',$award);
        $this->detach_modul($award);
        $remove = $award->delete();
        if($remove)return redirect()->route("award.index")->with("success","berhasil hapus data award");
    }
}
