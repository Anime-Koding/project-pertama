<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\DataTables\ClientDataTable;
use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Models\Client;
use App\Traits\HasAssign;
use Illuminate\Support\Facades\File;
use Image;

class ClientController extends Controller
{
    use HasAssign;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ClientDataTable $datatables)
    {
        return $datatables->render("user.client.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $model = new Client();
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;

        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/client_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/client_img/thumbnail'),0777,true);
            }

            $image = $request->file("image");
            $data["image"] = $image->store("client_img","public");

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/client_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'client_img/thumbnail/'.$input['thumb_name'];
        }
        $save = $model->create($data);
        $attch = $this->attach_modul($request->validated(),$save->id,"client");
        if($attch); return redirect()->route("client.index")->with("succes","berhasil simpan data client");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $this->authorize("view",$client);
        return view("user.client.edit",compact("client"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $this->authorize("update",$client);
        $data = $request->validated();
        $data["user_id"] = auth()->user()->id;

        if($request->hasFile("image")){
            if (!File::exists(public_path('/storage/client_img/thumbnail'))) {
                File::makeDirectory(public_path('/storage/client_img/thumbnail'),0777,true);
            }
            
            File::delete(public_path('storage/'.$client->image));
            File::delete(public_path('storage/'.$client->thumb));

            $image = $request->file("image");
            $data["image"] = $image->store("client_img","public");

            $input['thumb_name'] = time().'.'.$image->extension();   
            $destinationPath = public_path('/storage/client_img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['thumb_name']);
            $data["thumb"] = 'client_img/thumbnail/'.$input['thumb_name'];
        }
        $client->update($data);
        $update = $this->sync_modul($request->validated(),$client->id,'client');
        if($update); return redirect()->route("client.index")->with("succes","berhasil ubah data client");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $this->authorize("delete",$client);
        File::delete(public_path('storage/'.$client->image));
        File::delete(public_path('storage/'.$client->thumb));
        $this->detach_modul($client);
        $remove = $client->delete();
        if($remove); return redirect()->route("client.index")->with("success","berhasil hapus data client");
    }
}
