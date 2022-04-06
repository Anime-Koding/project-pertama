<x-dashboard>
    
    <x-slot name="header">
        Tambah reference
    </x-slot>

    <x-slot name="desc">
        Menu reference adalah menu untuk menambahkan bahasa yang anda kuasai.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("reference.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("reference.store") }}" method="POST">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="name">Reference name</label>
                                <input type="text" id="name" name="name" value="{{ old("name") }}" class="form-control" placeholder="write reference name" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Reference phone</label>
                                <input type="text" id="phone" name="phone" value="{{ old("phone") }}" class="form-control" placeholder="write reference phone" required>
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Reference email</label>
                                <input type="text" id="email" name="email" value="{{ old("email") }}" class="form-control" placeholder="write reference email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <input type="number" id="order" name="order" value="{{ old("order") }}" class="form-control" placeholder="write order" required>
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
                            <div class="form-group">
                                <label class="form-label" for="email">Details</label>
                                <textarea name="details" id="details" cols="30" class="form-control" rows="10">{{ old("details") }}</textarea>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <x-create-group/>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save reference</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
