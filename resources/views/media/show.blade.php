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
        <h4 class="mb-1 mt-0">Publication</h4>
    </div>
</div>
@endsection

@section('content')
<style>
    .header-title {
        font-size: 2.5em; /* Ukuran font besar */
        font-weight: bold; /* Membuat teks tebal */
        margin-top: 0;
        margin-bottom: 20px;
        text-align: center;
    }
</style>
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h1 class="mt-0 header-title">Kerja Bakti Warga</h1>

                <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{URL::asset('assets/images/kerjabakti.jpeg')}}" class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{URL::asset('assets/images/Kerjabakti2.jpeg')}}" class="d-block w-100" alt="Gambar 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="text-muted mt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, repellat saepe suscipit iusto fugiat perferendis. Possimus quo earum aspernatur nulla veniam, dolor cum molestias qui voluptatum omnis sunt laborum repudiandae.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aut rerum iure, illo nihil natus error veniam, itaque cumque nam aperiam. Reiciendis inventore dolore officia quaerat eos odit nesciunt dolorem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem reiciendis ea eligendi molestiae veritatis rerum id, facere libero itaque praesentium, sunt impedit architecto necessitatibus? Distinctio dignissimos ea porro suscipit numquam!</p>
                    <ul class="pl-4 mb-4">
                        <li>Quis autem vel eum iure</li>
                        <li>Ut enim ad minima veniam</li>
                        <li>Et harum quidem rerum</li>
                        <li>Nam libero cum soluta</li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Tag</h5>
                            <div class="card-body">
                                <a class="badge badge-info badge-pill mr-2" href="">Kerja Bakti</a>
                                <a class="badge badge-info badge-pill mr-2" href="">Bersih</a>
                                <a class="badge badge-info badge-pill mr-2" href="">Desa</a>
                                <a class="badge badge-info badge-pill mr-2" href="">Warga</a>
                                <a class="badge badge-info badge-pill mr-2" href="">RT01</a>
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