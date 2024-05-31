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
                <li class="breadcrumb-item"><a href="">Article</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
        {{-- <h4 class="mb-1 mt-0">Publication</h4> --}}
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <h6 class="mt-0 header-title">About Project</h6>

                <div class="text-muted mt-3">
                    <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                    <ul class="pl-4 mb-4">
                        <li>Quis autem vel eum iure</li>
                        <li>Ut enim ad minima veniam</li>
                        <li>Et harum quidem rerum</li>
                        <li>Nam libero cum soluta</li>
                    </ul>

                    <div class="tags">
                        <h6 class="font-weight-bold">Tags</h6>
                        <div class="text-uppercase">
                            <a href="#" class="badge badge-soft-primary mr-2">Html</a>
                            <a href="#" class="badge badge-soft-primary mr-2">Css</a>
                            <a href="#" class="badge badge-soft-primary mr-2">Bootstrap</a>
                            <a href="#" class="badge badge-soft-primary mr-2">JQuery</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div  class="mt-4">
                                <p class="mb-2"><i class="uil-calender text-danger"></i> Start Date</p>
                                <h5 class="font-size-16">15 July, 2019</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mt-4">
                                <p class="mb-2"><i class="uil-calendar-slash text-danger"></i> Due Date</p>
                                <h5 class="font-size-16">15 July, 2019</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="mt-4">
                                <p class="mb-2"><i class="uil-dollar-alt text-danger"></i> Budget</p>
                                <h5 class="font-size-16">$1325</h5>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="mt-4">
                                <p class="mb-2"><i class="uil-user text-danger"></i> Owner</p>
                                <h5 class="font-size-16">Rick Perry</h5>
                            </div>
                        </div>
                    </div>

                    <div class="assign team mt-4">
                        <h6 class="font-weight-bold">Assign To</h6>
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                        </a> 
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                        </a>
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                        </a> 
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                        </a>
                    </div>

                    <div class="mt-4">
                        <h6 class="font-weight-bold">Attached Files</h6>

                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="p-2 border rounded mb-2">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Landing 1.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="p-2 border rounded mb-2">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Landing 2.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end card -->
        <div class="card">
            <div class="card-body">
                <div class="">
                    <ul class="nav nav-pills navtab-bg">
                        <li class="nav-item">
                            <a href="#comments" data-toggle="tab" aria-expanded="true"
                                class="nav-link active">
                                Discussions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#attac-file" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                Files/Resources
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane show active" id="comments">
                            <h5 class="mb-4 pb-1 header-title">Comments (6)</h5>
                            <div class="media mb-4 font-size-14">
                                <div class="mr-3">
                                    <a href="#"> <img
                                            class="media-object rounded-circle avatar-sm" alt=""
                                            src="assets/images/users/avatar-2.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 font-size-15">John Cooks</h5>
                                    <p class="text-muted mb-1">
                                        <a href="" class="text-danger">@Rick Perry</a>
                                        Their separate existence is a myth.
                                    </p>
                                    <a href="" class="text-primary">Reply</a>
                                </div>
                            </div>
                            <div class="media mb-4 font-size-14">
                                <div class="mr-3">
                                    <a href="#"> <img
                                            class="media-object rounded-circle avatar-sm" alt=""
                                            src="assets/images/users/avatar-3.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 font-size-15">Jayden Dowie</h5>
                                    <p class="text-muted mb-1">
                                        <a href="" class="text-danger">@Rick Perry</a>
                                        It will be as simple as occidental in fact be Occidental
                                        will seem like simplified.
                                    </p>
                                    <a href="" class="text-primary">Reply</a>

                                    <div class="media mt-3 font-size-14">
                                        <div class="d-flex mr-3">
                                            <a href="#">
                                                <div
                                                    class="avatar-sm font-weight-bold d-inline-block m-1">
                                                    <span
                                                        class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        R
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-size-15">Ray Roberts</h5>
                                            <p class="text-muted mb-0">
                                                <a href="" class="text-danger">@Rick Perry</a>
                                                Cras sit amet nibh libero.
                                            </p>
                                            <a href="" class="text-primary">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4 font-size-14">
                                <div class="mr-3">
                                    <a href="#"> <img
                                            class="media-object rounded-circle avatar-sm" alt=""
                                            src="assets/images/users/avatar-2.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 font-size-15">John Cooks</h5>
                                    <p class="text-muted">
                                        <a href="" class="text-danger">@Rick Perry</a>
                                        Itaque earum rerum hic
                                    </p>
                                    <div class="p-2 border rounded mb-2">
                                        <div class="media">
                                            <div class="avatar-sm font-weight-bold mr-3">
                                                <span
                                                    class="avatar-title rounded bg-soft-primary text-primary">
                                                    <i
                                                        class="uil-file-plus-alt font-size-18"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="d-inline-block mt-2">Landing
                                                    1.psd</a>
                                            </div>
                                            <div class="float-right mt-1">
                                                <a href="#" class="p-2"><i
                                                        class="uil-download-alt font-size-18"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="text-primary">Reply</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex mr-3">
                                    <a href="#"> <img
                                            class="media-object rounded-circle avatar-sm" alt=""
                                            src="assets/images/users/avatar-1.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <input type="text" class="form-control input-sm"
                                        placeholder="Some text value...">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="attac-file">
                            <h5 class="mb-3">Attached Files:</h5>
                            <div>
                                <div class="p-2 border rounded mb-3">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span
                                                class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Landing
                                                1.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i
                                                    class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 border rounded mb-3">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span
                                                class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Landing
                                                2.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i
                                                    class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 border rounded mb-3">
                                    <div>
                                        <a href="#" class="d-inline-block m-1"><img
                                                src="assets/images/small/img-2.jpg" alt=""
                                                class="avatar-lg rounded"></a>
                                        <a href="#" class="d-inline-block m-1"><img
                                                src="assets/images/small/img-3.jpg" alt=""
                                                class="avatar-lg rounded"></a>
                                        <a href="#" class="d-inline-block m-1"><img
                                                src="assets/images/small/img-4.jpg" alt=""
                                                class="avatar-lg rounded"></a>
                                    </div>
                                </div>

                                <div class="p-2 border rounded mb-3">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span
                                                class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="d-inline-block mt-2">Logo.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i
                                                    class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 border rounded mb-3">
                                    <div>
                                        <a href="#" class="d-inline-block m-1"><img
                                                src="assets/images/small/img-7.jpg" alt=""
                                                class="avatar-lg rounded"></a>
                                        <a href="#" class="d-inline-block m-1"><img
                                                src="assets/images/small/img-6.jpg" alt=""
                                                class="avatar-lg rounded"></a>
                                    </div>
                                </div>

                                <div class="p-2 border rounded mb-3">
                                    <div class="media">
                                        <div class="avatar-sm font-weight-bold mr-3">
                                            <span
                                                class="avatar-title rounded bg-soft-primary text-primary">
                                                <i class="uil-file-plus-alt font-size-18"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#"
                                                class="d-inline-block mt-2">Clients.psd</a>
                                        </div>
                                        <div class="float-right mt-1">
                                            <a href="#" class="p-2"><i
                                                    class="uil-download-alt font-size-18"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h6 class="mt-0 header-title">Project Activities</h6>

                <ul class="list-unstyled activity-widget">
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">09</span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Bryan</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Neque
                                    porro quisquam est</p>
                            </div>
                        </div>

                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-success text-success">
                                        08
                                    </span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Everett</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Ut enim ad
                                    minima veniam quis velit</p>
                            </div>
                        </div>
                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-warning text-warning">
                                        08
                                    </span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Richard</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Quis autem
                                    vel eum iure</p>
                            </div>
                        </div>
                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-info text-info">
                                        08
                                    </span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Jery</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Quis autem
                                    vel eum iure</p>
                            </div>
                        </div>
                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-primary text-primary">07</span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Bryan</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Neque
                                    porro quisquam est</p>
                            </div>
                        </div>
                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-success text-success">
                                        06
                                    </span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Everett</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Ut enim ad
                                    minima veniam quis velit</p>
                            </div>
                        </div>
                    </li>
                    <li class="activity-list">
                        <div class="media">
                            <div class="text-center mr-3">
                                <div class="avatar-sm">
                                    <span
                                        class="avatar-title rounded-circle bg-soft-warning text-warning">
                                        05
                                    </span>
                                </div>
                                <p class="text-muted font-size-13 mb-0">Jan</p>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="font-size-15 mt-2 mb-1"><a href="#"
                                        class="text-dark">Richard</a></h5>
                                <p class="text-muted font-size-13 text-truncate mb-0">Quis autem
                                    vel eum iure</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <a href="javascript:void(0);" class="btn btn-sm border btn-white">
                        <i data-feather="loader" class="icon-dual icon-xs mr-2"></i>
                        Load more
                    </a>
                </div>
            </div>
        </div>
    </div>
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