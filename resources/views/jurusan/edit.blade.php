@extends('master.app')
@section('breadcrumb')
    <li><a href="{{ route('dashboard') }}">Dashboard <span class="mx-1">></span></a></li>
    <li><a href="{{ route('jurusan.index') }}">Jurusan <span class="mx-1">></span></a></li>
    <li><a> Update </a></li>
@endsection
@section('header')
    <h2 style="width: max-content">Edit Data Jurusan</h2>
@endsection
@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="float-right heading1 margin_0">
                        <a href="{{ route('jurusan.index') }}">
                            <button class="btn btn-warning text-light"><i
                                    class="fa fa-circle-arrow-left mr-2"></i>kembali</button>
                        </a>
                    </div>
                </div>
                <form class="padding_infor_info row" action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                     <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama <span class="text-danger small">*</span></label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ $jurusan->nama }}" name="nama">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="deskripsi" class="form-label">Deskripsi <span
                                    class="text-danger small">*</span></label>
                            <textarea name="deskripsi" cols="30" rows="10" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ $jurusan->deskripsi }}</textarea>
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                     <div class="col-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
