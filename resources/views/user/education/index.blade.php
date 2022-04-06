<x-dashboard>
    
    <x-slot name="header">
        Education
    </x-slot>

    <x-slot name="desc">
        Menu education adalah menu untuk menambahkan pendidian, baik pendidikan SD,SMP,SMA dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("education.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah education</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card">
            <div class="card-body">
                {{$dataTable->table(['class' => 'table table-bordered table-striped','style' => 'width:100%'])}}
            </div>
        </div>
    </div>

    @push('scripts')
        {{$dataTable->scripts()}}
    @endpush
</x-dashboard>
