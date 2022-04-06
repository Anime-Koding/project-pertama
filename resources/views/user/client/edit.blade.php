<x-dashboard>
    
    <x-slot name="header">
        Ubah client
    </x-slot>

    <x-slot name="desc">
        Menu client adalah menu menambah category client.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("client.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("client.update",$client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="image">Blog Image [gif / jpg / png / jpeg]</label>
                                <input type="file" id="image" name="image" value="{{ old("image") }}" class="form-control">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        @if($client->thumb)
                        <div class="col-md-6">
                            <img src="{{ url("storage/".$client->thumb) }}" alt="{{ $client->client_name }}">
                        </div>
                        @endif
                        <div class="@if($client->thumb) col-md-12 @else col-md-6 @endif">
                            <div class="form-group">
                                <label class="form-label" for="client_name">Client name</label>
                                <input type="text" id="client_name" name="client_name" value="{{ old("client_name",$client->client_name) }}" class="form-control" placeholder="write client name" required>
                                @error('client_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="url">Url</label>
                                <input type="url" id="url" name="url" value="{{ old("url",$client->url) }}" class="form-control" placeholder="write url" required>
                                @error('url')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <div class="form-control-wrap">
                                    <select name="status" id="status" class="form-control" required>
                                        <option {{ old("status",$client->status) == "1" ? "selected" : "" }} value="1">Active</option>
                                        <option {{ old("status",$client->status) == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-edit-group :modul="$client"/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save client</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
