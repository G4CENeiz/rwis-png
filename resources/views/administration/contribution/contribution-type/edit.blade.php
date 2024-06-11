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
        @empty($contributionTypes)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</H5>
                The data you are looking for was not found.
            </div>
            <a href="{{ url('administration/contribution/type') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @else
        <form method="POST" action="{{ url('administration/contribution/type/' . $contributionTypes->contribution_type_id) }}" class="form-horizontal">
            @csrf
            {!! method_field('PUT') !!}
            
            <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="contribution_name">Nama Iuran</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="contribution_name" name="contribution_name" value="{{ old('contribution_name', $contributionTypes->contribution_name) }}">
                    @error('contribution_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="description">Deskripsi</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $contributionTypes->description) }}">
                    @error('description')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label"></label>
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
        </form>
        @endempty
    </div>
</div>
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection