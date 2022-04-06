<x-dashboard>
    
    <x-slot name="header">
        Tambah skill
    </x-slot>

    <x-slot name="desc">
        Menu skill adalah menu untuk menambahkan pengalaman, baik pengalaman kerja,magang, organisasi dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("skill.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>List sub skill</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card cardq-preview">
            <div class="card-inner">
                <form action="{{ route("skill.store") }}" method="POST" class="form-validate is-alter">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="skill_name">Skill name</label>
                                <input type="text" class="form-control" id="skill_name" name="skill_name" placeholder="Write skill name" value="{{ old("skill_name") }}" required>
                                @error('skill_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <input type="number" class="form-control" id="order" name="order" placeholder="Write order" value="{{ old("order") }}" required>
                                @error('order')
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
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save skill</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                {{$dataTable->table(['class' => 'table table-bordered table-striped','style' => 'width:100%'])}}
            </div>
        </div>
    </div>

    @push('scripts')
        {{$dataTable->scripts()}}
    @endpush
</x-dashboard>
