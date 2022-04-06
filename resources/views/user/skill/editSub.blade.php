<x-dashboard>
    
    <x-slot name="header">
        Ubah Sub skill
    </x-slot>

    <x-slot name="desc">
        Menu Subskill adalah menu untuk menambahkan keahlian yang kamu miliki.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("skill.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>List sub skill</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("skill.updateSubskill",$skill->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label class="form-label" for="skill_id">Skill</label>
                        <select name="skill_id" id="skill_id" class="form-control" required>
                            <option value="">- Pilih skill -</option>
                            @foreach ($list_skill as $item)
                                <option {{ old("skill_id",$skill->skill_id) == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->skill_name }}</option>    
                            @endforeach
                        </select>
                        @error('skill_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="skill_name">Sub skill name</label>
                                <input type="text" id="skill_name" name="skill_name" value="{{ old("skill_name") ?? $skill->skill_name}}" class="form-control" placeholder="write sub skill name" required>
                                @error('skill_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="skill_level">Level</label>
                                <select name="skill_level" class="form-control" id="skill_level">
                                    <option value="">Select Sub Skill Level</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "10" ? "selected" : "" }} value="10">10%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "20" ? "selected" : "" }} value="20">20%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "30" ? "selected" : "" }} value="30">30%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "40" ? "selected" : "" }} value="40">40%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "50" ? "selected" : "" }} value="50">50%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "60" ? "selected" : "" }} value="60">60%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "70" ? "selected" : "" }} value="70">70%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "80" ? "selected" : "" }} value="80">80%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "90" ? "selected" : "" }} value="90">90%</option>
                                    <option {{ old("skill_level",$skill->skill_level) == "100" ? "selected" : "" }} value="100">100%</option>
                                </select>
                                @error('skill_level')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <input type="number" id="order" name="order" value="{{ old("order") ?? $skill->order}}" class="form-control" placeholder="write order" required>
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
                                        <option value="">- Pilih -</option>
                                        <option {{ old("status",$skill->status) == "1" ? "selected" : "" }} value="1">Active</option>
                                        <option {{ old("status",$skill->status) == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-edit-group :modul="$skill"/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
