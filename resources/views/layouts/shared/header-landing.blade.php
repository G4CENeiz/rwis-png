<!-- Topbar Start -->
<div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
    <div class="container-fluid">
        <!-- LOGO -->
        <div>
            <a href="/">
                <span class="logo-lg">
                    <img src="{{ URL::asset('assets/images/RWIS-PNG.png') }}" alt="" height="40" />
                </span>
            </a>
        </div>
        <div>
            {{-- DASHBOARD --}}
            <a href="/" class="col-xl-3">
                <span data-toggle="tooltip" data-original-title="Halaman Utama">Dashboard</span>
            </a>
            {{-- ADMINISTRASI --}}
            <a href="" class="col-xl-3">
                <span data-toggle="tooltip" data-original-title="Bantuan Sosial">Administrasi</span>
            </a>
            {{-- INFORMASI WARGA --}}
            <a href="{{route('resident.information.index')}}" class="col-xl-3">
                <span data-toggle="tooltip" data-original-title="Bantuan Sosial">Informasi Warga</span>
            </a>
            {{-- BANSOS --}}
            <a href="{{route('bansos.index')}}" class="col-xl-3">
                <span data-toggle="tooltip" data-original-title="Bantuan Sosial">Bansos</span>
            </a>
            {{-- UMKM --}}
            <a href="{{route('umkm.index')}}" class="col-xl-3">
                <span data-toggle="tooltip" data-original-title="Usaha Masyarakat Kecil Menengah">UMKM</span>
            </a>
            {{-- MEDIA --}}
            <a href="{{route('media.index')}}" class="success col-xl-3">
                <span data-toggle="tooltip" data-original-title="Media">Media</span>
            </a>
            <button type="button" class="btn btn-success" data-toggle="tooltip"
                data-placement="bottom" title="" data-original-title="Login">
                Masuk
            </button>
        </div>           
    </div>
</div>
<!-- end Topbar -->