<x-dashboard>
    
    <x-slot name="header">
        Blog
    </x-slot>

    <x-slot name="desc">
        Menu blog adalah menu menambah blog.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("blog.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah blog</span></a></li>
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
