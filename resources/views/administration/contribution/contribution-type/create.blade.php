@extends('layouts.vertical')


@section('css')
@endsection

@section('content')
<div class="card card-outline card-primary card-body">
    <div class="list-group-item d-flex justify-content-between">
        <h3 class="card-title">{{ $card->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ route('administration.contribution.type.index') }}">Kembali</a>
        </div>
    </div>
    <div class="list-group-item">
        {{-- @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif --}}
        <form method="POST" action="{{ url('administration/contribution/type') }}" class="form-horizontal">
            @csrf
            
            <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="contribution_name">Nama Iuran</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="contribution_name" name="contribution_name" value="{{ old('contribution_name') }}" required>
                    @error('contribution_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="description">Deskripsi</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>
                    @error('description')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label"></label>
                <div class="col-lg-10">
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