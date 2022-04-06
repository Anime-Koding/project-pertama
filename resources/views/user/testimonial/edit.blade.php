<x-dashboard>
    
    <x-slot name="header">
        Ubah testimonial
    </x-slot>

    <x-slot name="desc">
        Menu testimonial adalah menu untuk menambahkan bahasa yang anda kuasai.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("testimonial.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("testimonial.update",$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="feedback_title">Feedback title</label>
                                <input type="text" id="feedback_title" name="feedback_title" value="{{ old("feedback_title",$testimonial->feedback_title) }}" class="form-control" placeholder="write feedback title" required>
                                @error('feedback_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="client_name">Client name</label>
                                <input type="text" id="client_name" name="client_name" value="{{ old("client_name",$testimonial->client_name) }}" class="form-control" placeholder="write client_name" required>
                                @error('client_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="image">Client Image [gif / jpg / png / jpeg]</label>
                                <input type="file" id="image" name="image" value="{{ old("image") }}" class="form-control">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        @if($testimonial->thumb)
                        <div class="col-md-6">
                            <img src="{{ url("storage/".$testimonial->thumb) }}" alt="{{ $testimonial->client_name }}">
                        </div>
                        @endif
                        <div class="@if($testimonial->thumb) col-md-12 @else col-md-6 @endif">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <div class="form-control-wrap">
                                    <select name="status" id="status" class="form-control" required>
                                        <option {{ old("status",$testimonial->status) == "1" ? "selected" : "" }} value="1">Active</option>
                                        <option {{ old("status",$testimonial->status) == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="feedback">Feedback</label>
                                <textarea name="feedback" id="feedback" class="form-control" cols="30" rows="10">{{ old("feedback",$testimonial->feedback) }}</textarea>
                                @error('feedback')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <x-edit-group :modul="$testimonial"/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
