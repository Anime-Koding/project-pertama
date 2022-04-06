<x-dashboard>
    
    <x-slot name="header">
        Ubah blog category
    </x-slot>

    <x-slot name="desc">
        Menu blog category adalah menu menambah category blog.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("bcategory.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("bcategory.update",$bcategory->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="category_name">Category name</label>
                                <input type="text" id="category_name" name="category_name" value="{{ old("category_name",$bcategory->category_name) }}" class="form-control" placeholder="write category name" required>
                                @error('category_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <div class="form-control-wrap">
                                    <select name="status" id="status" class="form-control" required>
                                        <option {{ old("status",$bcategory->status) == "1" ? "selected" : ""}} value="1">Active</option>
                                        <option {{ old("status",$bcategory->status) == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
