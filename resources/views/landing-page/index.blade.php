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
</style>
@endsection

@section('content')
<!-- Kotak dengan background linear gradient -->
<div class="gradient-box col-md-12 col-xl-12">
    <div class="col-md-6 col-xl-6">
        <div>
            <div style="font-size: 0,5rem; padding-top: 3%">
                <button type="button" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Versi Website">
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
<div class="row align-items-center col-md-12 col-xl-12">
    <div class="row" style="padding-top: 1%; padding-left: 5%; padding-right: 5%; text-align: center">
        <div style="text-align:center"><h1>Our Features</h1></div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#home1" data-toggle="tab" aria-expanded="true"
                                class="nav-link active">
                                <span class="d-block d-sm-none"><i class="uil-home"></i></span>
                                <span class="d-none d-sm-block">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#adm1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-administrasi"></i></span>
                                <span class="d-none d-sm-block">Administrasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#info1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-info"></i></span>
                                <span class="d-none d-sm-block">Informasi Warga</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#bansos1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-bansos"></i></span>
                                <span class="d-none d-sm-block">Bansos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#umkm1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-umkm"></i></span>
                                <span class="d-none d-sm-block">UMKM</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#artikel1" data-toggle="tab" aria-expanded="false"
                                class="nav-link">
                                <span class="d-block d-sm-none"><i class="uil-artikel"></i></span>
                                <span class="d-none d-sm-block">Artikel</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content text-muted">
                        <div class="tab-pane show active" id="home1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/dashboard.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident veniam, perferendis temporibus soluta porro accusantium quidem facilis fuga deserunt harum omnis quo eligendi quaerat, architecto quisquam facere. Voluptate pariatur atque vitae sit facere aspernatur nesciunt, natus inventore tenetur illum dignissimos ducimus, veritatis ipsa iusto illo consequatur recusandae! Aliquam deserunt aliquid nisi sit aperiam, labore fugit quo ducimus ex cupiditate laudantium in perspiciatis quisquam neque officiis deleniti laborum fugiat ad libero rerum. Et nihil repellat soluta provident impedit error consectetur possimus voluptatibus labore dicta, tenetur dolorem autem, quaerat cupiditate quis praesentium, animi dignissimos ullam maiores a eaque iusto eos. Obcaecati, ducimus?</p>
                        </div>

                        <div class="tab-pane" id="adm1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/Administrasi-kas.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Mudahkan urusan administratif dan akses data penting di RW Anda. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor quidem vel deleniti. Culpa incidunt eveniet doloribus. Pariatur laborum dolores cum, voluptatibus voluptate sequi veritatis labore cumque in unde, repellendus eveniet.</p>
                        </div>

                        <div class="tab-pane" id="info1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/info-warga.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi veritatis, nesciunt suscipit sapiente molestiae maiores, aut, fugit laborum consequatur deserunt laboriosam laudantium tempore sunt reiciendis. Quo hic laborum quod optio cum voluptas atque eius ratione deleniti perspiciatis iusto ipsum facere doloremque facilis, debitis saepe, vitae architecto nulla aliquam iure!</p>
                        </div>

                        <div class="tab-pane" id="bansos1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/bansos.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laudantium perspiciatis fuga, voluptas suscipit est ea quae. Officiis totam nobis iusto earum, fuga vero? Ipsa ex deleniti nostrum vel eaque, cumque quia earum mollitia vitae beatae eligendi molestiae quam, repellendus voluptas accusamus itaque perferendis necessitatibus. Reprehenderit, sed laborum aliquam facilis ex numquam sint, quasi delectus reiciendis iure voluptate aperiam exercitationem quas explicabo dolor molestiae quos sequi quisquam tenetur eligendi et sit cupiditate illum! Sed molestiae ex, possimus nisi obcaecati dolor quisquam error ratione, corrupti nihil exercitationem molestias voluptas itaque omnis eaque temporibus adipisci. Ratione deserunt aspernatur ullam facilis repellat enim, nulla, blanditiis ut perspiciatis dolores provident ea unde natus sint cupiditate fugiat tenetur.</p>
                        </div>

                        <div class="tab-pane" id="umkm1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/umkm.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        </div>

                        <div class="tab-pane" id="artikel1">
                            <div>
                                <div class="row no-gutters align-items-center" style="width: 70%; display: block; margin-left: auto; margin-right: auto; filter: drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.5)); padding-top:1.5%;">
                                    <img src="{{ URL::asset('assets/images/artikel.png') }}" class="card-img" alt="pc-rwis">
                                </div>
                            </div>
                            <p style="padding-top: 1.5%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima voluptatum maxime id cupiditate velit sit ratione eligendi quia mollitia soluta est ab distinctio veniam totam molestias officiis fugiat facilis nobis, expedita eum tempore harum perspiciatis sint fuga. Ab soluta quam corporis! Quibusdam fugiat, temporibus nulla eos voluptatem illo nostrum ratione necessitatibus sit, ipsa distinctio tenetur. Necessitatibus eos facere commodi, amet ipsum doloribus adipisci eum, placeat asperiores labore harum totam exercitationem in. Sint voluptas magni dolor dolorum labore vel voluptatibus sunt dignissimos saepe veniam quod vitae aut, debitis voluptates ipsa similique ratione quam repudiandae reiciendis nisi asperiores nobis. Autem exercitationem ab vitae quidem incidunt est quibusdam quisquam nemo impedit harum distinctio nesciunt, eligendi doloribus in explicabo mollitia natus nam accusamus quae ea eius quis necessitatibus odit ut! Blanditiis consectetur similique nesciunt maxime qui voluptas quae perspiciatis culpa nisi vero mollitia quod repellat accusantium reprehenderit amet adipisci dolore porro possimus, hic debitis.</p>
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
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection