<x-dashboard>
    
    <x-slot name="header">
        Tambah portfolio
    </x-slot>

    <x-slot name="desc">
        Menu portfolio adalah menu untuk menambahkan pengalaman, baik pengalaman kerja,magang, organisasi dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("portfolio.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card card-preview">
            <div class="card-inner">
                <form action="{{ route("portfolio.store") }}" method="POST" class="form-validate is-alter" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="image">Image</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-title"><em class="icon ni ni-file"></em></span>
                                        </div>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="portfolio_category_id">Category</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-title"><em class="icon ni ni-user"></em></span>
                                        </div>
                                        <select name="portfolio_category_id" id="portfolio_category_id" class="form-control">
                                            <option value="">Pilih category</option>
                                            @foreach ($category as $item)
                                                <option {{ old("portfolio_category_id") == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('portfolio_category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="project_name">Project name</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-title"><em class="icon ni ni-user"></em></span>
                                        </div>
                                        <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Write project name" value="{{ old("project_name") }}" required>
                                        @error('project_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="project_url">Project url</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-project_url"><em class="icon ni ni-home"></em></span>
                                        </div>
                                        <input type="url" class="form-control" id="project_url" name="project_url" placeholder="Write institution name" value="{{ old("project_url") }}" required>
                                        @error('project_url')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="from_date">From date</label>
                                <div class="form-control-wrap">
                                    <input type="date" class="form-control" id="from_date" name="from_date" value="{{ old("from_date") }}" required>
                                    @error('from_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="to_date">To date</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <input type="date" id="to_date" name="to_date" class="form-control" value="{{ old("to_date") }}" required>
                                        @error('to_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="custom-control custom-control-sm custom-checkbox">
                                    <input name="is_present" type="checkbox" value="1" class="custom-control-input" id="is_present">
                                    <label class="custom-control-label" for="is_present">On going</label>
                                    @error('is_present')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="details">Details</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="details" name="details" placeholder="Write detail project">{{ old("details") }}</textarea>
                                    @error('details')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-order"><em class="icon ni ni-filter"></em></span>
                                        </div>
                                        <input type="number" class="form-control" id="order" name="order" placeholder="Write order" value="{{ old("order") }}" required>
                                        @error('order')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <div class="form-control-wrap">
                                    <select name="status" id="status" class="form-control" required>
                                        <option {{ old("status") == "1" ? "selected" : "" }} value="1">Active</option>
                                        <option {{ old("status") == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-create-group/>
                        <div class="col-md-12">
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save portfolio</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#is_present').click(function(){
                if($(this).prop("checked") == true){
                    $("#to_date").prop("disabled", true);
                } else if($(this).prop("checked") == false){
                    $("#to_date").prop("disabled", false);
                }
            });
        </script>
    @endpush
</x-dashboard>
