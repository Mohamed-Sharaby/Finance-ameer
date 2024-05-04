
@push('scripts')

<!-- Datatable init js -->
<script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
<script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>

{{$dataTable->scripts()}}

@endpush
