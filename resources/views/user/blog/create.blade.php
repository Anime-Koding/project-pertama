<x-dashboard>
    
    <x-slot name="header">
        Tambah blog
    </x-slot>

    <x-slot name="desc">
        Menu blog adalah menu menambah category blog.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("blog.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("blog.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="images">Blog Image [gif / jpg / png / jpeg]</label>
                                <input type="file" id="images" name="images" value="{{ old("images") }}" class="form-control">
                                @error('images')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="images">Category</label>
                                <select name="blog_category_id" id="blog_category_id" class="form-control">
                                    <option value="">- Select category -</option>
                                    @foreach($category as $item)
                                    <option {{ old("blog_category_id") == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('blog_category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" id="title" name="title" value="{{ old("title") }}" class="form-control" placeholder="write title blog" required>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="url">Url</label>
                                <input type="url" id="url" name="url" value="{{ old("url") }}" class="form-control" placeholder="write url" required>
                                @error('url')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="tags">Tags</label>
                                <input type="tags" id="tags" name="tags" value="{{ old("tags") }}" class="form-control" placeholder="write tags" required>
                                @error('tags')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="description">Details</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="description" name="description" placeholder="Write your message" required>{{ old("description") }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-create-group/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
