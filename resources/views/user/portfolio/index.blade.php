<x-dashboard>
    
    <x-slot name="header">
        Tambah portfolio
    </x-slot>

    <x-slot name="desc">
        Menu portfolio adalah menu untuk menambahkan pengalaman, baik pengalaman kerja,magang, organisasi dll.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("pcategory.index") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah category portfolio</span></a></li>
        <li class="nk-block-tools-opt"><a href="{{ route("portfolio.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah portfolio</span></a></li>
    </x-slot>

    <div class="nk-content-body">
        <div class="card cardq-preview">
            <div class="card-inner">
                {{$dataTable->table(['class' => 'table table-bordered table-striped','style' => 'width:100%'])}}
            </div>
        </div>
    </div>

    @push('scripts')
        {{$dataTable->scripts()}}
    @endpush
</x-dashboard>
