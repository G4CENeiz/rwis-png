@extends('layouts.vertical')

@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('./assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ URL::asset('./assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>  
<script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/media">Publication</a></li>
                <li class="breadcrumb-item"><a href="/create">Tambah</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Publication</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Artikel</h4>

                <form action="#" class="parsley-examples">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" required
                                placeholder="Tulis judul disini"/>
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <div>
                            <input type="text" class="form-control" required
                                    placeholder="Nama"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Date"></label>
                        <label class="col-lg-2 col-form-label"
                            for="example-date">Tanggal</label>
                        <div class="col-lg-12">
                            <input class="form-control" id="example-date" type="date"
                                name="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <div>
                            <textarea required class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Upload foto</label>
                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </form>


                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-success mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col-->
</div>
<!-- end row -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i data-feather="x-circle"></i>
        </a>
        <h5 class="m-0">Customization</h5>
    </div>

    <div class="slimscroll-menu">

        <h5 class="font-size-16 pl-3 mt-4">Choose Variation</h5>
        <div class="p-3">
            <h6>Default</h6>
            <a href="index.html"><img src="assets/images/layouts/vertical.jpg" alt="vertical" class="img-thumbnail demo-img" /></a>
        </div>
        <div class="px-3 py-1">
            <h6>Top Nav</h6>
            <a href="layouts-horizontal.html"><img src="assets/images/layouts/horizontal.jpg" alt="horizontal" class="img-thumbnail demo-img" /></a>
        </div>
        <div class="px-3 py-1">
            <h6>Dark Side Nav</h6>
            <a href="layouts-dark-sidebar.html"><img src="assets/images/layouts/vertical-dark-sidebar.jpg" alt="dark sidenav" class="img-thumbnail demo-img" /></a>
        </div>
        <div class="px-3 py-1">
            <h6>Condensed Side Nav</h6>
            <a href="layouts-dark-sidebar.html"><img src="assets/images/layouts/vertical-condensed.jpg" alt="condensed" class="img-thumbnail demo-img" /></a>
        </div>
        <div class="px-3 py-1">
            <h6>Fixed Width (Boxed)</h6>
            <a href="layouts-boxed.html"><img src="assets/images/layouts/boxed.jpg" alt="boxed"
                    class="img-thumbnail demo-img" /></a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->       

@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection