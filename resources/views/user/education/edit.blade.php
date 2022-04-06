<x-dashboard>
    
    <x-slot name="header">
        Ubah education
    </x-slot>

    <x-slot name="desc">
        Menu education adalah menu untuk menambahkan pendidian, baik pendidikan SD,SMP,SMA dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("education.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card card-preview">
            <div class="card-inner">
                <form action="{{ route("education.update",$education->id) }}" method="POST" class="form-validate is-alter">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="degree_name">Degree name</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-title"><em class="icon ni ni-user"></em></span>
                                        </div>
                                        <input type="text" class="form-control" id="degree_name" name="degree_name" placeholder="Write degree name" value="{{ old("degree_name",$education->degree_name) }}" required>
                                        @error('degree_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="institution_name">Institution</label>
                                <div class="form-control-wrap">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-institution_name"><em class="icon ni ni-home"></em></span>
                                        </div>
                                        <input type="text" class="form-control" id="institution_name" name="institution_name" placeholder="Write institution name" value="{{ old("institution_name",$education->institution_name) }}" required>
                                        @error('institution_name')
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
                                    <input type="date" class="form-control" id="from_date" name="from_date" value="{{ old("from_date",$education->from_date) }}" required>
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
                                        <input type="date" id="to_date" {{ $education->to_date !== NULL ?: "disabled" }} name="to_date" class="form-control" value="{{ old("to_date",$education->to_date) }}" required>
                                    </div>
                                    @error('to_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="custom-control custom-control-sm custom-checkbox">
                                    <input name="is_present" {{ $education->to_date == NULL ? "checked" : "" }} type="checkbox" value="1" class="custom-control-input" id="is_present">
                                    <label class="custom-control-label" for="is_present">Currently present</label>
                                    @error('is_present')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="detail">Details</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" id="detail" name="detail" placeholder="Write your message" required>{{ old("detail",$education->detail) }}</textarea>
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
                                        <option {{ old("status",$education->status) == 1 ? "selected" : ""}} value="1">Active</option>
                                        <option {{ old("status",$education->status) == 0 ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-edit-group :modul="$education"/>
                        <div class="col-md-12">
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save education</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
             $(document).ready(function(){
                if($("#is_present").prop("checked") == true){
                    $("#to_date").prop("disabled", true);
                }
            });
            
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
