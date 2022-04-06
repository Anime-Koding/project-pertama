<x-dashboard>
    
    <x-slot name="header">
        Edit Portfolio category
    </x-slot>

    <x-slot name="desc">
        Menu portfolio category adalah menu data portfolio category.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("pcategory.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>List category portfolio</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card cardq-preview">
            <div class="card-inner">
                <form action="{{ route("pcategory.update",$pcategory->id) }}" method="POST" class="form-validate is-alter">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="category_name">Category name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Write category name" value="{{ old("category_name",$pcategory->category_name) }}" required>
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
                                        <option {{ old("status",$pcategory->status) == "1" ? "selected" : ""}} value="1">Active</option>
                                        <option {{ old("status",$pcategory->status) == "0" ? "selected" : ""}} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Ubah category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
