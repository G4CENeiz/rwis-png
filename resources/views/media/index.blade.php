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
                <li class="breadcrumb-item"><a href="/">Publikasi</a></li>
                {{-- <li class="breadcrumb-item"><a href="">Article</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Publikasi</h4>
    </div>
</div>
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-md-3 col-xl-6">
                <h4 class="mb-1 mt-0">Artikel</h4>
            </div>
            <div class="col-md-9 col-xl-6 text-md-right">
                <div class="mt-4 mt-md-0">
                    <a class="btn btn-soft-primary mr-4 mb-3  mb-sm-0" href="{{ url('/media/create') }}"><i class="uil-plus mr-1"></i>Tambah</a>
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
                    <a class="btn btn-info mr-4 mb-3  mb-sm-0" href="{{ url('media.post.category.index') }}"><i class="uil-list-ul mr-1"></i>Kategori</a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row flex-wrap">
            @foreach($media as $medias)
                <div class="m-3 col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 mb-xl-0">
                        <img class="card-img-top img-fluid" src="{{ asset('assets/images/dog.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-size-20 text-truncate">{{ $medias->title }}</h5>
                            <p class="card-text text-muted text-truncate">{{ $medias->content }}</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary font-size-14 mr-2" href="{{ url('media/show', $medias->id) }}">Detail</a>
                                <a class="btn btn-warning font-size-14 mr-2" href="{{ url('media/edit', $medias->id) }}">Edit</a>
                                <form action="{{ url('media/delete', $medias->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger font-size-14 mr-2">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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