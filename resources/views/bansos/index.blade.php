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
                        <select name="rt_id" id="rt_id" class="form-control" required>
                            <option value="">- Semua -</option>
                            @foreach ($rt as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">RT</small>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_dss">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Score</th>
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
                    "url": "{{ url('govassist/dss/list') }}",
                    "dataType": "json",
                    "type": "GET",
                    // "data": function (d) {
                    //     d.rt_id = $('#rt_id').val();
                    // }
                },
                columns: [{
                    data: "DT_RowIndex",
                    ClassName: "text-center",
                    orderable: true,
                    searchable: true
                }, {
                    data: "name",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "score",
                    ClassName: "",
                    orderable: true,
                    searchable: true
                }]
            });

            // $('#rt_id').on('change', function () {
            //     dataUser.ajax.reload();
            // });
            $('#rt_id').on('change', function () {
                var rtId = $('#rt_id').val();
                if (rtId === null || rtId === "") {
                    // If rt_id is null, set the default URL
                    dss.ajax.url("{{ url('govassist/dss/list') }}");
                } else {
                    // If rt_id is not null, append it to the URL
                    dss.ajax.url("{{ url('govassist/dss/list') }}" + '/' + rtId);
                }
                dss.ajax.reload(); // Reload the table data
            });
        });
    </script>
@endsection