<x-dashboard>
    
    <x-slot name="header">
        Ubah visitor
    </x-slot>

    <x-slot name="desc">
        Menu visitor adalah menu untuk menambahkan bahasa yang anda kuasai.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("visitor.index") }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("visitor.update",$visitor->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="feedback_title">Group</label>
                                <select name="name_group" id="name_group" class="form-control" required>
                                    <option value="">- Pilih group -</option>
                                    @foreach ($group as $item)
                                    <option {{ old("name_group",$feature) == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-2">Save visitor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
