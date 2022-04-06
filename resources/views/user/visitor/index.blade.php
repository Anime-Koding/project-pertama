<x-dashboard>
    
    <x-slot name="header">
        Visitor
    </x-slot>

    <x-slot name="desc">
        Menu visitor adalah menu untuk visitor pengguna jasa.
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
