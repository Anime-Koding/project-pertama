<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\ServiceDataTable;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;
use App\Traits\HasAssign;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

class ServiceController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceDataTable $datatables)
    {
        return $datatables->render("user.service.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.service.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $model = new Service();
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        if ($request->hasFile('image')) {
            if (!File::exists(public_path('/storage/services_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/services_img/thumbnail'),0777,true);
            }

            $image = $request->file('image');
            $data["image"] = $image->store('services_img','public');

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/services_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'services_img/thumbnail/'.$input['thumb_name'];
        }
        $save = $model->create($data);
        $attch = $this->attach_modul($request->validated(),$save->id,"service");
        if($attch);return redirect()->route("service.index")->with("success","berhasil tambah data service");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize("view",$service);
        return view("user.service.edit",compact("service"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $this->authorize("update",$service);
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        if ($request->hasFile('image')) {
            if (!File::exists(public_path('/storage/services_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/services_img/thumbnail'),0777,true);
            }
            
            File::delete(public_path('storage/'.$service->image));
            File::delete(public_path('storage/'.$service->thumb));

            $image = $request->file('image');
            $data["image"] = $image->store('services_img','public');
            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/services_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'services_img/thumbnail/'.$input['thumb_name'];
        }
        $service->update($data);
        $update = $this->sync_modul($request->validated(),$service->id,"service");
        if($update);return redirect()->route("service.index")->with("success","berhasil ubah data service");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize("delete",$service);
        if ($service->image) {
            File::delete(public_path('storage/'.$service->image));
        }
        if ($service->thumb) {
            File::delete(public_path('storage/'.$service->thumb));
        }
        $this->detach_modul($service);
        $remove = $service->delete();
        if($remove);return redirect()->route("service.index")->with("success","berhasil hapus data service");
    }
}
