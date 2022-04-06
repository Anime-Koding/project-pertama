<x-dashboard>
    
    <x-slot name="header">
        Ubah layout
    </x-slot>

    <x-slot name="desc">
        Menu layout adalah menu untuk menambahkan bahasa yang anda kuasai.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("layout.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("layout.update",$layout->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="name">Layout name</label>
                                <input type="text" id="name" name="name" value="{{ old("name",$layout->name) }}" class="form-control" placeholder="write layout name" required>
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="type">Type</label>
                                <input type="text" id="type" name="type" value="{{ old("type",$layout->type) }}" class="form-control" placeholder="write layout type" required>
                            </div>
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="thumbnail">Thumbnail</label>
                                <input type="file" id="thumbnail" name="thumbnail" class="form-control">
                            </div>
                            @error('thumbnail')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end col-md-12">
                            <button type="submit" class="btn btn-primary mt-2">Save layout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
