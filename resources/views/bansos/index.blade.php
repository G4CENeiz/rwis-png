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
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <select name="level_id" id="level_id" class="form-control" required>
                            <option value="">- Semua -</option>
                            {{-- @foreach ($level as $item)
                                <option value="{{ $item->level_id }}">{{ $item->level_nama }}</option>
                            @endforeach --}}
                        </select>
                        <small class="form-text text-muted">RT</small>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_dss">
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
            var dss = $('#table_dss').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('govassist/list') }}",
                    "dataType": "json",
                    "type": "GET",
                    // "data": function (d) {
                    //     d.level_id = $('#level_id').val();
                    // }
                },
                columns: [{
                    data: "0 ",
                    ClassName: "text-center",
                    orderable: true,
                    searchable: true
                }, {
                    data: "name",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "resident_id",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "family_id",
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