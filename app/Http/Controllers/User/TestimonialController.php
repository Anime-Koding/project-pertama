<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\TestimonialDataTable;
use App\Http\Requests\Testimonial\StoreTestimonialRequest;
use App\Http\Requests\Testimonial\UpdateTestimonialRequest;
use App\Models\Testimonial;
use App\Traits\HasAssign;
use Illuminate\Support\Facades\File;
use Image;

class TestimonialController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TestimonialDataTable $datatables)
    {
        return $datatables->render("user.testimonial.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.testimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {
        $model = new Testimonial();
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/testimonial_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/testimonial_img/thumbnail'),0777,true);
            }
            $image = $request->file("image");
            $data["image"] = $image->store("testimonial_img","public");

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/testimonial_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'testimonial_img/thumbnail/'.$input['thumb_name'];
        }
        $save = $model->create($data);
        $attch = $this->attach_modul($request->validated(),$save->id,"testimonial");
        if($attch); return redirect()->route("testimonial.index")->with("success","berhasil simpan data testimonial");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize("view",$testimonial);
        return view("user.testimonial.edit",compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $this->authorize("update",$testimonial);
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/testimonial_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/testimonial_img/thumbnail'),0777,true);
            }

            File::delete(public_path('storage/'.$testimonial->image));
            File::delete(public_path('storage/'.$testimonial->thumb));
            
            $image = $request->file("image");
            $data["image"] = $image->store("testimonial_img","public");
            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/testimonial_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'testimonial_img/thumbnail/'.$input['thumb_name'];
        }
        $testimonial->update($data);
        $update = $this->sync_modul($request->validated(),$testimonial->id,'testimonial');
        if($update); return redirect()->route("testimonial.index")->with("success","berhasil ubah data testimonial");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize("delete",$testimonial);
        File::delete(public_path('storage/'.$testimonial->image));
        File::delete(public_path('storage/'.$testimonial->thumb));
        $this->detach_modul($testimonial);
        $remove = $testimonial->delete();
        if($remove); return redirect()->route("testimonial.index")->with("success","berhasil hapus data testimonial");
    }
}
