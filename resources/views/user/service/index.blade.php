<x-dashboard>
    
    <x-slot name="header">
        Service
    </x-slot>

    <x-slot name="desc">
        Menu service adalah menu untuk menambahkan jasa yang kamu miliki.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("service.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah service</span></a></li>
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
