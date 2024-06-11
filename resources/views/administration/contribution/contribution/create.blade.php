@extends('layouts.vertical')


@section('css')
<!-- Plugins css -->
<link href="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/multiselect/multiselect.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="card card-outline card-primary card-body">
    <div class="list-group-item d-flex justify-content-between">
        <h3 class="card-title">{{ $card->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('administration.contribution.index') }}">Kembali</a>
        </div>
    </div>
    <div class="list-group-item">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ url('administration/contribution') }}" class="form-horizontal">
            @csrf

            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Tertagih</label>
                <div class="col-11">
                    <select data-plugin="customselect" class="form-control" data-placeholder="Select an option">
                        <option></option>
                        @foreach ($residents as $item)
                            <option value="{{ $item->resident_id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Buku Kas</label>
                <div class="col-11">
                    <select class="form-control" id="issuer_type" name="issuer_type" required>
                        <option value="">- Pilih Level -</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Rumah">Rumah</option>
                        <option value="Dasawisma">Dasawisma</option>
                        <option value="RT">RT</option>
                    </select>
                    @error('issuer_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Jenis Iuran Tertagih</label>
                <div class="col-11">
                    <select class="form-control" id="issuer_type" name="issuer_type" required>
                        <option value="">- Pilih Level -</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Rumah">Rumah</option>
                        <option value="Dasawisma">Dasawisma</option>
                        <option value="RT">RT</option>
                    </select>
                    @error('issuer_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-1 control-label col-form-label"></label>
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

@section('script')
<!-- Plugins Js -->
<script src="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/multiselect/multiselect.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
@endsection

@section('script-bottom')
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
@endsection