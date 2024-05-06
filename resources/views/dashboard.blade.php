@extends('master.app')
@section('breadcrumb')
    <li><a> Dashboard </a></li>
@endsection
@section('header')
    <h2 style="width: max-content">Halaman Dashboard</h2>
@endsection
@section('konten')
    <div class="row column1">
        <div class="col-md-6 col-lg-6">
            <a href="{{ route('jurusan.index') }}">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa-solid fa-book green_color "></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">{{ $jurusan->count() }}</p>
                            <p class="head_couter">jurusan</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-6">
            <a href="{{ route('peserta.index') }}">
                <div class="full counter_section margin_bottom_30">
                    <div class="couter_icon">
                        <div>
                            <i class="fa fa-person blue1_color "></i>
                        </div>
                    </div>
                    <div class="counter_no">
                        <div>
                            <p class="total_no">{{ $peserta->count() }}</p>

                            <p class="head_couter">peserta</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
