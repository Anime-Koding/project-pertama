<x-dashboard>
    
    <x-slot name="header">
        Group
    </x-slot>

    <x-slot name="desc">
        Menu group privilage adalah menu mengrup user berdasarkan feature yang dapat dilihat.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("group.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card card-preview">
            <div class="card-inner">
                <form action="{{ route("group.store") }}" method="POST" class="form-validate is-alter">
                    @csrf
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="name">Group name</label>
                                    <div class="form-control-wrap">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="fv-title"><em class="icon ni ni-user"></em></span>
                                            </div>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Write group name" value="{{ old("name") }}" required>
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="layout_id">Layout</label>
                                    <div class="form-control-wrap">
                                        <select name="layout_id" id="layout_id" class="form-control" required>
                                            @foreach ($layout as $item)
                                                <option {{ old("layout_id") == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }} - {{ $item->type }}</option>
                                            @endforeach
                                        </select>
                                        @error('layout_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="active">Status</label>
                                    <div class="form-control-wrap">
                                        <select name="active" id="active" class="form-control" required>
                                            <option {{ old("active") == "1" ? "selected" : "" }} value="1">Active</option>
                                            <option {{ old("active") == "0" ? "selected" : "" }} value="0">DeActive</option>
                                        </select>
                                        @error('active')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="description">Details</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm" id="description" name="description" placeholder="Write descriotion">{{ old("description") }}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save group</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
