@extends('layouts.vertical')

@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Bansos</a></li>
                {{-- <li class="breadcrumb-item"><a href="">Article</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Bantuan Sosial</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Daftar Penerima Bansos RW-01</h4>
                    <p class="sub-header">
                            <div class="card-tools">
                                <a class="btn btn-sm btn-primary mt-1" href="{{ url('/media/create') }}">Tambah</a>
                            </div>
                        {{-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                        function:
                        <code>$().DataTable();</code>. --}}
                    </p>
{{-- Basic data table --}}
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Prioritas</th>
                                <th>Calon</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach ($calonList as $index => $calon)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>Calon {{ $calon['Calon'] }}</td>
                                    <td>{{ $calon['Nilai'] }}</td>
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