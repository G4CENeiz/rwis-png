@extends('layouts.vertical')


@section('css')
    {{-- Datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/select.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="card card-outline card-primary card-body">
    <div class="list-group-item d-flex justify-content-between">
        <h3 class="card-title">{{ $card->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('administration.contribution.create') }}">Tambah</a>
        </div>
    </div>
    <div class="list-group-item">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_contribution">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tertagih</th>
                    <th>Buku Kas</th>
                    <th>Jenis Golongan Tertagih</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('script')
    <!-- DataTables & Plugins -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script> --}}
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/libs/datatables/buttons.colVis.min.js') }}"></script> --}}

    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
@endsection

@section('script-bottom')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_contribution').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('administration/contribution/list') }}",
                    "dataType": "json",
                    "type": "GET",
                    // "data": function (d) {
                    //     d.level_id = $('#level_id').val();
                    // }
                },
                columns: [{
                    data: "DT_RowIndex",
                    ClassName: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "recipient_id",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "general_ledger_id",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "recipient_type",
                    ClassName: "",
                    orderable: false,
                    searchable: false
                }, {
                    data: "action",
                    ClassName: "",
                    orderable: false,
                    searchable: false
                }]
            });

            // $('#level_id').on('change', function () {
            //     dataUser.ajax.reload();
            // });
        });
    </script>
@endsection