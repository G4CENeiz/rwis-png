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
                <li class="breadcrumb-item"><a href="/edit">Edit</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Publication</h4>
    </div>
</div>
@endsection

@section('content')
    <!-- Start Content-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Edit Artikel</h4>
                    <form action="/edit" method="post" class="parsley-examples">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="title" required value="{{ $media->title }}"/>
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <div>
                                <input type="text" class="form-control" name="author" required value="{{ $media->author }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Date"></label>
                            <label class="col-lg-2 col-form-label" for="example-date">Tanggal</label>
                            <div class="col-lg-12">
                                <input class="form-control" id="example-date" type="date" name="date" value="{{ $media->date }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div>
                                <textarea required class="form-control" name="description">{{ $media->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload foto</label>
                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                                <div class="fallback">
                                    <input name="file" type="file" value="{{ $media->file }}" multiple />
                                </div>
                            </form>
                        </div>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-success mr-1">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>
@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection