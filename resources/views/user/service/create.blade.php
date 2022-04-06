<x-dashboard>
    @push('css')
    <link rel="stylesheet" href="{{ asset("assets/iconpicker/css") }}/iconpicker-1.5.0.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <x-slot name="header">
        Tambah service
    </x-slot>

    <x-slot name="desc">
        Menu service adalah menu untuk menambahkan jasa yang kamu miliki.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("service.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card card-preview">
            <div class="card-inner">
                <form action="{{ route("service.store") }}" method="POST" class="form-validate is-alter" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="service_name">Service name</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Write service name" value="{{ old("service_name") }}" required>
                                        @error('service_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="icon">Select icon</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <button type="button" id="GetIconPicker" class="btn btn-sm btn-primary" data-iconpicker-input="input#icon" data-iconpicker-preview="i#IconPreview">Select Icon</button>
                                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Select icon fontawsome" value="{{ old("icon") }}" readonly>
                                        @error('icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="image">Select image [gif/jpg/png/jpeg] (max, 150x150)</label>
                                <div class="form-control-wrap">
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="details">Service Details</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="details" name="details" placeholder="Write detail service">{{ old("details") }}</textarea>
                                    @error('details')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-create-group/>
                        <div class="col-md-12">
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save experience</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset("assets/iconpicker/js") }}/iconpicker-1.5.0.js"></script>
        <script>
            $(document).ready(function(){
                IconPicker.Init({
                    jsonUrl: '{{ asset("assets/iconpicker/js") }}/iconpicker-1.5.0.json',
                    searchPlaceholder: 'Search Icon',
                    showAllButton: 'Show All',
                    cancelButton: 'Cancel',
                    noResultsFound: 'No results found.',
                    borderRadius: '20px',
                });
                IconPicker.Run('#GetIconPicker'); 
            });
        </script>
    @endpush
</x-dashboard>
