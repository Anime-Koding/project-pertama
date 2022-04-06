<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\CategoryPortfolioDataTable;
use App\Http\Requests\Portfolio\Category\StorePortfolioCategoryRequest;
use App\Http\Requests\Portfolio\Category\UpdatePortfolioCategoryRequest;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryPortfolioDataTable $datatables)
    {
        return $datatables->render("user.portfolio.category.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.portfolio.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioCategoryRequest $request)
    {
        $model = new PortfolioCategory();
        $save = $model->create($request->validated() + ["user_id" => auth()->user()->id]);
        if($save); return redirect()->route("pcategory.index")->with("success","berhasil tambah category portfolio");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioCategory $pcategory)
    {
        $this->authorize("view",$pcategory);
        return view("user.portfolio.category.edit",compact("pcategory"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioCategoryRequest  $request
     * @param  \App\Models\Portfolio  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioCategoryRequest $request, PortfolioCategory $pcategory)
    {
        $this->authorize("update",$pcategory);
        $update = $pcategory->update($request->validated()+["user_id" => auth()->user()->id]);
        if($update);return redirect()->route("pcategory.index")->with("success","berhasil ubah category portfolio");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioCategory $pcategory)
    {
        $this->authorize("delete",$pcategory);
        $remove = $pcategory->delete();
        if($remove);return redirect()->route("pcategory.index")->with("success","berhasil hapus category portfolio");
    }
}
