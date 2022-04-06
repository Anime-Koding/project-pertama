<x-dashboard>
    
    <x-slot name="header">
        Group
    </x-slot>

    <x-slot name="desc">
        Menu group privilage adalah menu mengrup user berdasarkan feature yang dapat dilihat.
    </x-slot>

    <x-slot name="act">
        <li class="nk-block-tools-opt"><a href="{{ route("group.create") }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah group</span></a></li>
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
