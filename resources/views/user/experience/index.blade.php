<x-dashboard>
    
    <x-slot name="header">
        Experience
    </x-slot>

    <x-slot name="desc">
        Menu experience adalah menu untuk menambahkan pengalaman, baik pengalaman kerja,magang, organisasi dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("experience.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah experience</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                {{-- <form action="{{ route("assign_data_store") }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="group">Group privillage</label>
                    <select name="group[]" class="form-select" multiple="multiple" data-placeholder="Select Privilage Group">
                        @foreach ($group as $item)
                            <option value="{{ $item->id }}" data-select2-id="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="type" value="experience">
                    <div class="flex justify-content-end">
                        <button class="btn btn-primary mt-2" type="submit">Save</button>
                    </div>
                </div> --}}
                {{$dataTable->table(['class' => 'table table-bordered table-striped','style' => 'width:100%'])}}
                {{-- </form> --}}
            </div>
        </div>
    </div>

    @push('scripts')
        {{$dataTable->scripts()}}
        <script>
            function checkAll(ele) {
                var checkboxes = document.querySelectorAll($(ele).data("modul"));
                if (ele.checked) {
                    for (var i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i].type == 'checkbox' ) {
                            checkboxes[i].checked = true;
                        }
                    }
                } else {
                    for (var i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i].type == 'checkbox') {
                            checkboxes[i].checked = false;
                        }
                    }
                }
            }
        </script>
    @endpush
</x-dashboard>
