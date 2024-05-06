@extends('master.app')
@section('breadcrumb')
    <li><a href="{{ route('dashboard') }}">Dashboard <span class="mx-1">></span></a></li>
    <li><a href="{{ route('peserta.index') }}">Peserta <span class="mx-1">></span></a></li>
    <li><a> Create </a></li>
@endsection
@section('header')
    <h2 style="width: max-content">Tambah Data Peserta</h2>
@endsection
@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="float-right heading1 margin_0">
                        <a href="{{ route('peserta.index') }}">
                            <button class="btn btn-warning text-light"><i
                                    class="fa fa-circle-arrow-left mr-2"></i>kembali</button>
                        </a>
                    </div>
                </div>
                <form class="padding_infor_info row" action="{{ route('peserta.store') }}" method="POST">
                    @csrf
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama <span class="text-danger small">*</span></label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" name="nama">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="tempat" class="form-label">Tempat Lahir <span
                                    class="text-danger small">*</span></label>
                            <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror"
                                value="{{ old('tempat') }}" name="tempat">
                            @error('tempat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="tanggal" class="form-label">Tanggal Lahir <span
                                    class="text-danger small">*</span></label>
                            <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                value="{{ old('tanggal') }}" name="tanggal">
                            @error('tanggal')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat <span class="text-danger small">*</span></label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                value="{{ old('alamat') }}" name="alamat">
                            @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="telepon" class="form-label">Telepon <span
                                    class="text-danger small">*</span></label>
                            <input id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror"
                                value="{{ old('telepon') }}" name="telepon">
                            @error('telepon')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email <span class="text-danger small">*</span></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" name="email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="password" class="form-label">password <span class="text-danger small">*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                value="{{ old('password') }}" name="password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="jurusan" class="form-label">Jurusan <span
                                    class="text-danger small">*</span></label>
                            <select name="jurusan" id="jurusan"
                                class="custom-select mb-2 @error('jurusan') is-invalid @enderror">
                                <option value="" selected hidden disabled>Pilih jurusan</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">
                                        {{ $j->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jurusan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                                Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
