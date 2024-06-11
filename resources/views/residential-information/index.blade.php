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
    <h3 class="card-title">Data Warga RW-01</h3>
        <div class="list-group-item d-flex justify-content-between">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Daftar Warga RW-01</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="sub-header mb-0">
                            {{-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                            function:
                            <code>$().DataTable();</code>. --}}
                        </p>
                        <a class="btn btn-sm btn-primary mb-2" href="{{ url('/resident/information/create') }}">Tambah</a>
                    </div>
{{-- Basic data table --}}
                    <table id="basic-datatable" class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Golongan Darah</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach ($residents as $index => $resident)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $resident->nik }}</td>
                                <td>{{ $resident->name }}</td>
                                <td>{{ $resident->birth_place }}</td>
                                <td>{{ $resident->birth_date }}</td>
                                <td>{{ $resident->gender }}</td>
                                <td>{{ $resident->blood_type }}</td>
                                <td>{{ $resident->religion->religion_name }}</td>
                                <td>{{ $resident->maritalStatus->marital_status }}</td>
                                <td>{{ $resident->profession->profession_name }}</td>
                                <td>{{ $resident->citizenship }}</td>
                                <td>
                                    <a href="{{ url('/resident/information/edit') }}" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection