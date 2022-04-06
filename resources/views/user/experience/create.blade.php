<x-dashboard>
    
    <x-slot name="header">
        Tambah experience
    </x-slot>

    <x-slot name="desc">
        Menu experience adalah menu untuk menambahkan pengalaman, baik pengalaman kerja,magang, organisasi dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("experience.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card card-preview">
            <div class="card-inner">
                <form action="{{ route("experience.store") }}" method="POST" class="form-validate is-alter">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="job_title">Job title</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-title"><em class="icon ni ni-user"></em></span>
                                        </div>
                                        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Write job title" value="{{ old("job_title") }}" required>
                                        @error('job_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="company_name">Company</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-company_name"><em class="icon ni ni-home"></em></span>
                                        </div>
                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Write job company name" value="{{ old("company_name") }}" required>
                                        @error('company_name')
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
                                    <label class="custom-control-label" for="is_present">Currently present</label>
                                    @error('is_present')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="detail">Details</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="detail" name="detail" placeholder="Write your message" required>{{ old("detail") }}</textarea>
                                    @error('detail')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
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
                                <button type="submit" class="btn btn-primary">Save experience</button>
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
