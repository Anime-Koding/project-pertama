<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\BlogDataTable;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Traits\HasAssign;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogDataTable $datatables)
    {
        return $datatables->render("user.blog.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = BlogCategory::where("user_id",auth()->user()->id)->where("status",1)->get();
        return view("user.blog.create",compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $model = new Blog();
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        $data["slug"] = Str::slug($request->validated()["title"]);

        if($request->hasFile("images")){
            if (!File::exists(public_path('/storage/blog_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/blog_img/thumbnail'),0777,true);
            }

            $image = $request->file("images");
            $data["images"] = $image->store("blog_img","public");

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/blog_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumbnail"] = 'blog_img/thumbnail/'.$input['thumb_name'];
        }

        $save = $model->create($data);
        $attch = $this->attach_modul($request->validated(),$save->id,"post");
        if($attch); return redirect()->route("blog.index")->with("succes","berhasil ubah data blog");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->authorize("view",$blog);
        $category = BlogCategory::where("user_id",auth()->user()->id)->where("status",1)->get();
        return view("user.blog.edit",compact("blog","category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $this->authorize("update",$blog);
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        $data["slug"] = Str::slug($request->validated()["title"]);

        if($request->hasFile("images")){
            if (!File::exists(public_path('/storage/blog_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/blog_img/thumbnail'),0777,true);
            }
            
            File::delete(public_path('storage/'.$blog->images));
            File::delete(public_path('storage/'.$blog->thumbnail));

            $image = $request->file("images");
            $data["images"] = $image->store("blog_img");

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/blog_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumbnail"] = 'blog_img/thumbnail/'.$input['thumb_name'];
        }

        $blog->update($data);
        $update = $this->sync_modul($request->validated(),$blog->id,'post');
        if($update); return redirect()->route("blog.index")->with("succes","berhasil ubah data blog");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->authorize("delete",$blog);
        File::delete(public_path('storage/'.$blog->images));
        File::delete(public_path('storage/'.$blog->thumbnail));
        $this->detach_modul($blog);
        $remove = $blog->delete();
        if($remove); return redirect()->route("blog.index")->with("succes","berhasil hapus data blog");
    }
}
