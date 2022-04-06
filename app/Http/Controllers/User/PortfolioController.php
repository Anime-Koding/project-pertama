<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\PortfolioDataTable;
use App\Http\Requests\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Traits\HasAssign;
use Illuminate\Support\Facades\File;
use Image; 

class PortfolioController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PortfolioDataTable $datatables)
    {
        return $datatables->render("user.portfolio.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = PortfolioCategory::where("user_id",auth()->user()->id)->where("status",1)->get();
        return view("user.portfolio.create",compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $model = new Portfolio();
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/portfolio/thumbnail'))) {
                File::makeDirectory(public_path('/storage/portfolio/thumbnail'),0777,true);
            }

            $image = $request->file('image');
            $data["image"] = $image->store('portfolio','public');

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/portfolio/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumbnail"] = 'portfolio/thumbnail/'.$input['thumb_name'];
        }
        $save = $model->create($data);
        $attch = $this->attach_modul($request->validated(),$save->id,"portfolio");
        if($attch); return redirect()->route("portfolio.index")->with("success","berhasil simpan portfolio");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $this->authorize("view",$portfolio);
        $category = PortfolioCategory::where("user_id",auth()->user()->id)->where("status",1)->get();
        return view("user.portfolio.edit",compact("portfolio","category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioRequest  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $this->authorize("update",$portfolio);
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;
        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/portfolio/thumbnail'))) {
                File::makeDirectory(public_path('/storage/portfolio/thumbnail'),0777,true);
            }

            File::delete(public_path('storage/'.$portfolio->image));
            File::delete(public_path('storage/'.$portfolio->thumbnail));
            
            $image = $request->file('image');
            $data["image"] = $image->store('portfolio','public');

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/portfolio/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumbnail"] = 'portfolio/thumbnail/'.$input['thumb_name'];
        }
        $portfolio->update($data);
        $update = $this->sync_modul($request->validated(),$portfolio->id,"portfolio");
        if($update); return redirect()->route("portfolio.index")->with("success","berhasil ubah portfolio");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->authorize("delete",$portfolio);
        File::delete(public_path('storage/'.$portfolio->image));
        File::delete(public_path('storage/'.$portfolio->thumbnail));
        $this->detach_modul($portfolio);
        $remove = $portfolio->delete();
        if($remove); return redirect()->route("portfolio.index")->with("success","berhasil hapus portfolio");
    }
}
