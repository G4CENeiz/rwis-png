@extends('layouts.landing')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .gradient-box {
        width: 100%; /* Mengatur lebar kotak */
        height: auto; /* Mengatur tinggi kotak, bisa disesuaikan */
        padding: 4%;
        background: linear-gradient(to bottom, #ffffff, #52b952);
        color: #024100;
        margin: 20px auto; /* Mengatur margin agar kotak berada di tengah */
        border-radius: 0px; /* Menambahkan sudut yang melengkung */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
    }
    .gradient-text {
        /* Set the font size (adjust as needed) */
        font-size: 24px;

        /* Apply the linear gradient */
        background-image: linear-gradient(45deg, #2e382d, #42af42);

        /* Make the gradient cover the full width and height of the text field */
        background-size: 100%;
        
        /* Clip the background to the text (important for gradient effect) */
        -webkit-background-clip: text;
        background-clip: text;

        /* Set the text color to transparent (so the gradient shows through) */
        color: transparent;
    }
</style>
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <nav aria-label="breadcrumb" class="float-right mt-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Starter</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<!-- Kotak dengan background linear gradient -->
<div class="gradient-box col-md-12 col-xl-12">
    <div class="col-md-6 col-xl-6">
        <div>
            <div style="font-size: 0,5rem; padding-top: 3%">
                <button type="button" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Login">
                    Version 1.0 is here
                </button>
            </div>
            
            <h1 style="font-size: 5rem; padding-top: 0,5%">SiSatu</h1>
            <h4>(Sistem Informasi RW 01)</h4>
            <p>SiSatu adalah sistem informasi berbasis online yang dirancang khusus untuk memudahkan pengelolaan dan komunikasi di tingkat RW. Dengan fitur-fitur seperti pengumuman, jadwal kegiatan, pelaporan masalah lingkungan, dan forum diskusi, SiSatu membantu memperkuat keterlibatan masyarakat, mempercepat respon terhadap masalah lingkungan, serta meningkatkan koordinasi antara warga dan pengurus RW.</p>
        </div>
    </div>
    <div class="col-md-6 col-xl-6">
        <div>
            {{-- <div class="row no-gutters align-items-center">
                <img src="{{ URL::asset('assets/images/RWIS.png') }}" class="card-img" alt="pc-rwis">
            </div>
            <div class="col-xl-6">
                <img src="assets/images/small/img-4.jpg" class="card-img" alt="...">
            </div> --}}
        </div>
    </div>
</div>
<div class="row page-title align-items-center">
    <div>
        <button type="button" class="btn btn-outline-secondary btn-rounded" data-toggle="tooltip" data-placement="center" title="" style="margin: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); padding-top:1%;">
            Version 1.0 is here
        </button>        
    </div>
    <div>
        <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(8px 8px 16px rgba(0, 0, 0, 0.5)); padding-top:5%;">
            <img src="{{ URL::asset('assets/images/dashboard.png') }}" class="card-img" alt="pc-rwis">
        </div>
    </div>

    <div class="row" style="padding: 5%">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title mb-4 mt-0">Our Features</h5>
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#adm1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                <span class="d-none d-sm-block">Administrasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile1" data-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                <span class="d-none d-sm-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages1" data-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                                <span class="d-none d-sm-block">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                                <span class="d-none d-sm-block">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                                <span class="d-none d-sm-block">Messages</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane" id="adm1">
                            <p>Mudahkan urusan administratif dan akses data penting di RW Anda</p>
                        </div>
                        <div class="tab-pane" id="profile1">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac, enim.</p>
                            <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                        <div class="tab-pane show active" id="messages1">
                            <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                Nulla consequat massa quis enim.</p>
                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                justo. Nullam dictum felis eu pede mollis pretium. Integer
                                tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                                vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim.</p>
                        </div>
                        <div class="tab-pane" id="profile1">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac, enim.</p>
                            <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                        <div class="tab-pane" id="profile1">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac, enim.</p>
                            <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                        <div class="tab-pane" id="profile1">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                ac, enim.</p>
                            <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<div class="gradient-box col-md-12 col-xl-12">
    <div class="col-md-6 col-xl-6">
        <div>
            <div class="gradient-text">
                <h1>Yuk, Gabung di SiSatu!</h1>
            </div>
            <p>Di sini, kita bisa berkomunikasi, berbagi informasi, dan atur kegiatan RW dengan lebih mudah. Ayo, jadi bagian dari perubahan positif untuk lingkungan dan komunitas kita!</p>
        </div>
    </div>
    <div class="col-md-6 col-xl-6">
        <div>
            {{-- <div class="row no-gutters align-items-center">
                <img src="{{ URL::asset('assets/images/RWIS.png') }}" class="card-img" alt="pc-rwis">
            </div>
            <div class="col-xl-6">
                <img src="assets/images/small/img-4.jpg" class="card-img" alt="...">
            </div> --}}
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection