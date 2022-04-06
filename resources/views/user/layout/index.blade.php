<x-dashboard>
    
    <x-slot name="header">
        Layout
    </x-slot>

    <x-slot name="desc">
        Menu layout adalah menu mengganti tema resume.
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("storelayout") }}" method="POST">
                    @csrf
                    <div class="row g-gs">
                        @foreach ($layout as $index => $item)
                            <div class="col-lg-6">
                                <div class="custom-control custom-checkbox image-control">
                                    <input value="{{ $item->id }}" type="radio" class="custom-control-input" {{ $public->layout_id == $item->id ? "checked" : "" }} name="layout_id" id="imageRadio{{ $index }}">
                                    <label class="custom-control-label text-center py-2" for="imageRadio{{ $index }}"><img src="{{ url("storage/".$item->thumbnail) }}" alt="">{{ $item->name }}</label>
                                </div>
                            </div>
                        @endforeach
                        @error('layout_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>
