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
            <div class="btn-group col-cl-3">
                <a href="/" class="col-xl-3">
                    <button type="button" class="btn btn-outline-dark width-md">
                        Dashboard
                    </button>
                </a>
            </div><!-- /btn-group -->

            {{-- ADMINISTRASI --}}
            <div class="btn-group col-cl-3">
                <button type="button" class="btn btn-outline-dark dropdown-toggle width-md"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Administrasi<i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('administration.ledger.index')}}">Buku Kas</a>
                    <a class="dropdown-item" href="{{route('administration.contribution.index')}}">Iuran</a>
                    <a class="dropdown-item" href="{{route('administration.contribution.detail.index')}}">Detail Iuran</a>
                    <a class="dropdown-item" href="{{route('administration.contribution.type.index')}}">Tipe Iuran</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('administration.payement.index')}}">Pembayaran</a>
                    <a class="dropdown-item" href="{{route('administration.payement.method.index')}}">Metode Pembayaran</a>
                    <a class="dropdown-item" href="{{route('administration.payement.status.index')}}">Status Pembayaran</a>
                    <a class="dropdown-item" href="{{route('administration.payement.prove.index')}}">Bukti Pembayaran</a>
                </div>
            </div><!-- /btn-group -->

            {{-- INFORMASI WARGA --}}
            <div class="btn-group col-cl-3">
                <a href="{{route('resident.information.index')}}" class="col-xl-3">
                    <button type="button" class="btn btn-outline-dark width-md">
                        Informasi Warga
                    </button>
                </a>
            </div><!-- /btn-group -->

            {{-- BANSOS --}}
            <div class="btn-group col-cl-3">
                <a href="{{route('bansos.index')}}" class="col-xl-3">
                    <button type="button" class="btn btn-outline-dark width-md">
                        Bansos
                    </button>
                </a>
            </div><!-- /btn-group -->
            
            {{-- UMKM --}}
            <div class="btn-group col-cl-3">
                <a href="{{route('umkm.index')}}" class="col-xl-3">
                    <button type="button" class="btn btn-outline-dark width-md">
                        UMKM
                    </button>
                </a>
            </div><!-- /btn-group -->
            
            {{-- MEDIA --}}
            <div class="btn-group col-cl-3">
                <a href="{{route('media.index')}}" class="success col-xl-3">
                    <button type="button" class="btn btn-outline-dark width-md">
                        Artikel
                    </button>
                </a>
            </div><!-- /btn-group -->

            {{-- LOGIN --}}
            <div class="btn-group col-cl-3">
                <a href="{{route('auth.login')}}" class="success col-xl-3">
                    <button type="button" class="btn btn-success width-md">
                    Masuk
                    </button>
                </a>
            </div><!-- /btn-group -->
        </div>           
    </div>
</div>
<!-- end Topbar -->