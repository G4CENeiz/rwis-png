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
                <li class="breadcrumb-item"><a href="/">Publication</a></li>
                {{-- <li class="breadcrumb-item"><a href="">Article</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Publication</h4>
    </div>
</div>
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-md-3 col-xl-6">
                <h4 class="mb-1 mt-0">Projects List</h4>
            </div>
            <div class="col-md-9 col-xl-6 text-md-right">
                <div class="mt-4 mt-md-0">
                    <a class="btn btn-danger mr-4 mb-3  mb-sm-0" href="{{ url('/media/create') }}"><i class="uil-plus mr-1"></i>Tambah</a>
                    <div class="btn-group mb-3 mb-sm-0">
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                    <div class="btn-group ml-1">
                        <button type="button" class="btn btn-white">Ongoing</button>
                        <button type="button" class="btn btn-white">Finished</button>
                    </div>
                    <div class="btn-group ml-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-primary btn-sm"><i
                                class="uil uil-apps"></i></button>
                    </div>
                    <div class="btn-group d-none d-sm-inline-block">
                        <button type="button" class="btn btn-white btn-sm"><i
                                class="uil uil-align-left-justify"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5><a href="#" class="text-dark">Kerja Bakti Warga</a></h5>
                        <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, neque molestiae corporis hic eius laborum eum! Esse architecto totam quam praesentium quos consectetur est. Asperiores esse iure illo doloribus cum.</p>
                        <div>
                            <a href="javascript: void(0);">
                                <img src="assets/images/bersih warga.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                            </a> 
                            <a href="javascript: void(0);">
                                <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                            </a>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row align-items-center">
                            <div class="col-sm-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item pr-2">
                                        <a href="#" class="text-muted d-inline-block"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Due date">
                                            <i class="uil uil-calender mr-1"></i> 11 Oct
                                        </a>
                                    </li>
                                    <li class="list-inline-item pr-2">
                                        <a class="btn btn-sm btn-primary" href="{{ url('/media/edit') }}">Edit</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-primary" href="{{ url('/media/show') }}">Detail</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-sm btn-primary" href="{{ url('/media/delete') }}">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-3 mt-2">
            <div class="col-12">
                <div class="text-center">
                    <a href="javascript:void(0);" class="btn btn-white">
                        <i data-feather="loader" class="icon-dual icon-xs mr-2"></i>
                        Load more
                    </a>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->

</div> <!-- content -->

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