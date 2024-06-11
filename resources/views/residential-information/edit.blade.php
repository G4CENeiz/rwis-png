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
                <li class="breadcrumb-item"><a href="/media">Informasi Warga</a></li>
                <li class="breadcrumb-item"><a href="/create">Tambah</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Advanced</li> --}}
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Data Warga</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Artikel</h4>

                <h1>Tambah Data Warga</h1>

                    <form action="{{ url('resident/information/store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="resident_id">Resident ID</label>
                            <input type="text" class="form-control" id="resident_id" name="resident_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                    
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    
                        <div class="form-group">
                            <label for="birth_place">Tempat Lahir</label>
                            <input type="text" class="form-control" id="birth_place" name="birth_place">
                        </div>
                    
                        <div class="form-group">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date">
                        </div>
                    
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="religion_id">ID Agama</label>
                            <input type="text" class="form-control" id="religion_id" name="religion_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="citizenship">Kewarganegaraan</label>
                            <input type="text" class="form-control" id="citizenship" name="citizenship">
                        </div>
                    
                        <div class="form-group">
                            <label for="education_level_id">ID Tingkat Pendidikan</label>
                            <input type="text" class="form-control" id="education_level_id" name="education_level_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="blood_type">Golongan Darah</label>
                            <input type="text" class="form-control" id="blood_type" name="blood_type">
                        </div>
                    
                        <div class="form-group">
                            <label for="profession_id">ID Profesi</label>
                            <input type="text" class="form-control" id="profession_id" name="profession_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="goverment_employees">Pegawai Pemerintah</label>
                            <input type="text" class="form-control" id="goverment_employees" name="goverment_employees">
                        </div>
                    
                        <div class="form-group">
                            <label for="income_range_id">ID Rentang Penghasilan</label>
                            <input type="text" class="form-control" id="income_range_id" name="income_range_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="family_id">ID Keluarga</label>
                            <input type="text" class="form-control" id="family_id" name="family_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="family_member_status_id">ID Status Anggota Keluarga</label>
                            <input type="text" class="form-control" id="family_member_status_id" name="family_member_status_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="marital_status_id">ID Status Pernikahan</label>
                            <input type="text" class="form-control" id="marital_status_id" name="marital_status_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="marriage_date">Tanggal Pernikahan</label>
                            <input type="date" class="form-control" id="marriage_date" name="marriage_date">
                        </div>
                    
                        <div class="form-group">
                            <label for="is_archived">Diarsipkan</label>
                            <input type="checkbox" class="form-control" id="is_archived" name="is_archived">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Batalkan</button>
                    </form>
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