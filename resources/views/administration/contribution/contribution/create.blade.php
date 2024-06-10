@extends('layouts.vertical')


@section('css')
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
                <label class="col-1 control-label col-form-label">Kepemilikan Buku Kas</label>
                <div class="col-11">
                    <select class="form-control" id="issuer_id" name="issuer_id" required>
                        <option value="">- Pilih Level -</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->user_id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('issuer_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Tipe Buku Kas</label>
                <div class="col-11">
                    <select class="form-control" id="issuer_type" name="issuer_type" required>
                        <option value="">- Pilih Level -</option>
                        <option value="RT">RT</option>
                        <option value="RW">RW</option>
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
@endsection

@section('script-bottom')
@endsection