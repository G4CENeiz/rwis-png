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
                <li class="breadcrumb-item"><a href="/">UMKM</a></li>
                {{-- <li class="breadcrumb-item"><a href="">Article</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">UMKM</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Daftar UMKM RW 1</h4>
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
                                <th>No</th>
                                <th>Nama UMKM</th>
                                <th>Jenis</th>
                                <th>User_id</th>
                                <th>Create date</th>
                                <th>Update date</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
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