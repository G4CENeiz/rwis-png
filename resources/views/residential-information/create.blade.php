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
<div class="card card-outline card-primary card-body">
    <div class="col-lg-12">
        <div class="list-group-item d-flex justify-content-between">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Tambah Data</h4>

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
                            <label for="religion_id">Agama</label>
                            <select class="form-control" id="religion" name="religion">
                                <option value="1">Islam</option>
                                <option value="2">Protestan</option>
                                <option value="3">Katolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                                <option value="6">Khonghucu</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="citizenship">Kewarganegaraan</label>
                            <select class="form-control" id="citizenship" name="citizenship">
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="education_level_id">Tingkat Pendidikan</label>
                            <select class="form-control" id="professions" name="professions">
                                <option value="1">Tidak/Belum Sekolah</option>
                                <option value="2">Belum Tamat SD/Sederajat</option>
                                <option value="3">Tamat SD/Sederajat</option>
                                <option value="4">SLTP/Sederajat</option>
                                <option value="5">SLTA/Sederajat</option>
                                <option value="6">Diploma I/II</option>
                                <option value="7">Akademi/Diploma III/S.Muda</option>
                                <option value="8">Diploma IV/Strata I</option>
                                <option value="9">Strata II</option>
                                <option value="10">Strata III</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="blood_type">Golongan Darah</label>
                            <select class="form-control" id="blood_type" name="blood_type">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="profession_id">Profesi</label>
                            <select class="form-control" id="professions" name="professions">
                                <option value="1">Tidak Bekerja</option>
                                <option value="2">Pelajar/Mahasiswa</option>
                                <option value="3">Swasta</option>
                                <option value="4">Wiraswasta</option>
                                <option value="5">Ibu Rumah Tangga</option>
                                <option value="6">Pensiunan</option>
                                <option value="7">TNI</option>
                                <option value="8">Polri</option>
                                <option value="9">Buruh</option>
                                <option value="10">Petani</option>
                                <option value="11">Nelayan</option>
                                <option value="12">Guru</option>
                                <option value="13">Dokter</option>
                                <option value="14">Pengacara</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="goverment_employees">Pegawai Pemerintah</label>
                            <select class="form-control" id="goverment_employees" name="goverment_employees">
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="income_range_id">Rentang Penghasilan</label>
                            <select class="form-control" id="income_range_id" name="income_range">
                                <option value="1">Rp. 0 - Rp. 1.000.000</option>
                                <option value="2">Rp. 1.000.000 - Rp. 2.300.000</option>
                                <option value="3">Rp. 2.300.000 - Rp. 3.600.000</option>
                                <option value="4">Rp. 3.600.000 - Rp. 4.900.000</option>
                                <option value="5">Rp. 4.900.000 - Rp. 6.200.000</option>
                                <option value="6">Rp. 6.200.000 - Rp. 7.500.000</option>
                                <option value="7">Rp. 7.500.000 - Rp. 8.800.000</option>
                                <option value="8">Rp. 8.800.000 - Rp. 10.100.000</option>
                                <option value="9">Rp. 10.100.000 - Rp. 11.400.000</option>
                                <option value="10">Rp. 11.400.000 - Rp. 12.700.000</option>
                                <option value="11">Rp. 14.000.000</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="family_id">Keluarga</label>
                            <input type="text" class="form-control" id="family_id" name="family_id">
                        </div>
                    
                        <div class="form-group">
                            <label for="family_member_status_id">Status Anggota Keluarga</label>
                            <select class="form-control" id="family_member_status_id" name="family_member_status_id">
                                <option value="1">Kepala Keluarga</option>
                                <option value="2">Istri</option>
                                <option value="3">Anak</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="marital_status_id">Status Perkawinan</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="1">Belum Kawin</option>
                                <option value="2">Kawin</option>
                                <option value="3">Duda/Janda</option>
                                <option value="4">Cerai</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="marriage_date">Tanggal Pernikahan</label>
                            <input type="date" class="form-control" id="marriage_date" name="marriage_date">
                        </div>
                    
                        <div class="form-group">
                            <label for="is_archived">Diarsipkan</label>
                            <select class="form-control" id="is_archived" name="is_archived">
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
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