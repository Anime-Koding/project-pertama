<x-dashboard>
    
    <x-slot name="header">
        Ubah languages
    </x-slot>

    <x-slot name="desc">
        Menu language adalah menu untuk menambahkan bahasa yang anda kuasai.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("language.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("language.update",$language->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="title">Language name</label>
                                <input type="text" id="title" name="title" value="{{ old("title",$language->title) }}" class="form-control" placeholder="write language name" required>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="level">Level</label>
                                <select name="level" class="form-control" id="level">
                                    <option value="">Select language level</option>
                                    <option {{ old("level",$language->level) == 10 ? "selected" : "" }} value="10">10%</option>
                                    <option {{ old("level",$language->level) == 20 ? "selected" : "" }} value="20">20%</option>
                                    <option {{ old("level",$language->level) == 30 ? "selected" : "" }} value="30">30%</option>
                                    <option {{ old("level",$language->level) == 40 ? "selected" : "" }} value="40">40%</option>
                                    <option {{ old("level",$language->level) == 50 ? "selected" : "" }} value="50">50%</option>
                                    <option {{ old("level",$language->level) == 60 ? "selected" : "" }} value="60">60%</option>
                                    <option {{ old("level",$language->level) == 70 ? "selected" : "" }} value="70">70%</option>
                                    <option {{ old("level",$language->level) == 80 ? "selected" : "" }} value="80">80%</option>
                                    <option {{ old("level",$language->level) == 90 ? "selected" : "" }} value="90">90%</option>
                                    <option {{ old("level",$language->level) == 100 ? "selected" : "" }} value="100">100%</option>
                                </select>
                                @error('level')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <input type="number" id="order" name="order" value="{{ old("order",$language->order) }}" class="form-control" placeholder="write order" required>
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
                                        <option {{ old("status",$language->status) == "1" ? "selected" : "" }} value="1">Active</option>
                                        <option {{ old("status",$language->status) == "0" ? "selected" : "" }} value="0">DeActive</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-edit-group :modul="$language"/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save languages</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
