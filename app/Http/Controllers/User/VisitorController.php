<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\VisitorDataTable;
use App\Http\Requests\StoreVisitorRequest;
use App\Http\Requests\UpdateVisitorRequest;
use App\Models\FeatureGroup;
use App\Models\Visitor;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VisitorDataTable $datatables)
    {
        return $datatables->render("user.visitor.index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        $group = FeatureGroup::where("user_id",auth()->user()->id)->where("active",1)->get();
        $feature = $visitor->group[0]->id;
        return view("user.visitor.edit",compact("visitor","group","feature"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitorRequest  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitorRequest $request, Visitor $visitor)
    {   
        try {
            $group = $visitor->group()->sync($request->post("name_group"));
            return redirect()->route("visitor.index")->with("success","berhasil edit data visitor");
        } catch (\Throwable $th) {
            return redirect()->route("visitor.index")->with("info","sudah dalam group");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        $delete = $visitor->delete();
        if($delete) return redirect()->route("visitor.index")->with("success","berhasil hapus data visitor");
    }
}
