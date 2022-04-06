<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\LayoutDataTable;
use App\Http\Requests\Layout\StoreLayoutRequest as LayoutStoreLayoutRequest;
use App\Http\Requests\UpdateLayoutRequest;
use App\Models\FeatureGroup;
use App\Models\Layout;
use App\Models\User;
use App\Traits\HasAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayoutController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LayoutDataTable $datatables)
    {
        return $datatables->render("admin.layout.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.layout.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Layout\StoreLayoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LayoutStoreLayoutRequest $request)
    {
        $model = new Layout();
        $data = $request->validated();
        if($request->hasFile("thumbnail")){
            $data["thumbnail"] = $request->file("thumbnail")->store("layout_img","public");    
        }
        $save = $model->create($data);
        if($save) return redirect()->route("layout.index")->with("success","berhasil simpan data layout");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        return view("admin.layout.edit",compact("layout"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Layout\UpdateLayoutRequest  $request
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLayoutRequest $request, Layout $layout)
    {
        $data = $request->validated();
        if($request->hasFile("thumbnail")){
            File::delete(public_path('storage/'.$layout->thumbnail));
            $data["thumbnail"] = $request->file("thumbnail")->store("layout_img","public");
        }
        $update = $layout->update($data);
        if($update) return redirect()->route("layout.index")->with("success","berhasil ubah data layout");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        File::delete(public_path('storage/'.$layout->thumbnail));
        $delete = $layout->delete();
        if($delete) return redirect()->route("layout.index")->with("success","berhasil hapus data layout");
    }


    public function setLayout()
    {
        $layout = Layout::all();
        $public =FeatureGroup::findOrFail($this->getFirstPublicByIdUser(auth()->user()->id));
        return view("user.layout.index",compact("layout","public"));
    }

    public function storelayout(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $public =FeatureGroup::findOrFail($this->getFirstPublicByIdUser($user->id));
        $update = $public->update(['layout_id' => $request->post("layout_id")]);
        if($update) return redirect()->route("setlayout")->with("success","berhasil ubah layout resume");
    }
}
