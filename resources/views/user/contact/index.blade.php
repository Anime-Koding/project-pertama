<x-dashboard>
    
    <x-slot name="header">
        User Contact Messages
    </x-slot>

    <x-slot name="desc">
        User Contact Messages adalah menu para pengunjung yang mengirimkan pesan.
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
