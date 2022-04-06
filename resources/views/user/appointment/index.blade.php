<x-dashboard>
    
    <x-slot name="header">
        User Appointment
    </x-slot>

    <x-slot name="desc">
        User Appointment adalah menu para pengunjung yang mengirimkan appointment.
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
