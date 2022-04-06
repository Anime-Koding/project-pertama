<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\FeatureGroupDataTable;
use App\Http\Requests\Privilage\Group\StoreGroupRequest;
use Illuminate\Http\Request;
use App\Models\FeatureGroup;
use App\Models\Feature;
use App\Models\Layout;

class FeatureGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FeatureGroupDataTable $datatables)
    {
        return $datatables->render("user.privilage.group.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layout = Layout::all();
        return view("user.privilage.group.create",compact("layout"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
        $save = FeatureGroup::create($request->validated() + ["user_id" => auth()->user()->id]);
        $save->features()->attach([5,14]);
        if($save) return redirect()->route("group.index")->with("success","berhasil simpan data group");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureGroup $group)
    {
        $layout = Layout::all();
        $this->authorize("view",$group);
        return view("user.privilage.edit",compact("group","layout"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGroupRequest $request, FeatureGroup $group)
    {
        $this->authorize("update",$group);
        $update = $group->update($request->validated() + ["user_id" => auth()->user()->id]);
        if($update) return redirect()->route("group.index")->with("success","berhasil ubah data group");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureGroup $group)
    {
        $this->authorize("delete",$group);
        try {
            $remove = $group->delete();
            if($remove) return redirect()->route("group.index")->with("success","berhasil hapus data group");
        } catch (\Throwable $th) {
            return redirect()->route("group.index")->with("info","terdapat data yang masih menggunakan group ini");
        }
    }

    public function changestatus(Request $request)
    {
        $validated = $request->validate([
            'type' => "required|in:C,A",
            'id' => "required"
        ]);
        $group = FeatureGroup::findOrFail($validated["id"]);
        $type = $validated["type"] == "C" ? 14: 5;
        $c = $group->features()->toggle($type);
        // dd($c);
        return redirect()->route("group.index")->with("info",count($c["attached"]) > 0 ? 'berhasil aktifkan feature' : 'berhasil nonaktif feature');
    }
}
