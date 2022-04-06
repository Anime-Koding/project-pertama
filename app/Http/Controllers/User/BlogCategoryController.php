<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\BlogCategoryDataTable;
use App\Http\Requests\Blog\Category\StoreBlogCategoryRequest;
use App\Http\Requests\Blog\Category\UpdateBlogCategoryRequest;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogCategoryDataTable $datatables)
    {
        return $datatables->render("user.blog.category.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.blog.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogCategoryRequest $request)
    {
        $model = new BlogCategory();
        $save = $model->create($request->validated() + ["user_id" => auth()->user()->id]);
        if($save); return redirect()->route("bcategory.index")->with("success","berhasil simpan data category blog");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $bcategory)
    {
        $this->authorize("view",$bcategory);
        return view("user.blog.category.edit",compact("bcategory"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogCategoryRequest  $request
     * @param  \App\Models\BlogCategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogCategoryRequest $request, BlogCategory $bcategory)
    {
        $this->authorize("update",$bcategory);
        $update = $bcategory->update($request->validated() + ["user_id" => auth()->user()->id]);
        if($update); return redirect()->route("bcategory.index")->with("success","berhasil ubah data category blog");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $bcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $bcategory)
    {
        $this->authorize("delete",$bcategory);
        $remove = $bcategory->delete();
        if($remove); return redirect()->route("bcategory.index")->with("success","berhasil hapus data category blog");
    }
}
