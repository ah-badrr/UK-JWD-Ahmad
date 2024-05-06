@extends('master.app')
@section('breadcrumb')
    <li><a href="{{ route('dashboard') }}">Dashboard <span class="mx-1">></span></a></li>
    <li><a> Jurusan </a></li>
@endsection
@section('header')
    <h2 style="width: max-content">Data Jurusan</h2>
@endsection
@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head d-flex justify-content-between">
                    <div class="float-right heading1 margin_0">
                        <a href="{{ route('jurusan.create') }}">
                            <button class="btn btn-primary"><i class="fa fa-plus mr-2"></i>tambah </button>
                        </a>
                    </div>
                    <form class="d-flex" action="{{ route('jurusan.index') }}" method="get">
                        @csrf
                        <input class="form-control" type="search" name="cari">
                        <button class="btn btn-success" type="submit">cari</button>
                    </form>
                </div>
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">

                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($jurusan->count() != null)
                                    @foreach ($jurusan as $j)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $j->nama }}</td>
                                            <td>{{ $j->deskripsi }}</td>
                                            {{--  <td>{{ Str::limit($j->jurusan, 5, ' (...)') }}</td>  --}}
                                            {{--  <td>{{ strlen($j->jurusan) > 5 ? substr($j->jurusan, 0, 5) . '[...]' : $j->jurusan }}</td>   --}}
                                            <td class="text-right d-flex justify-content-end">
                                                <a class="btn btn-warning" href="{{ route('jurusan.edit', $j->id) }}"><i
                                                        class="fa fa-pencil"></i></a>
                                                <form class="inline-block w-max"
                                                    action="{{ route('jurusan.destroy', $j->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        onclick="return confirm('Anda Yakin Ingin Hapus Data??')"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">Data jurusan tidak ditemukan
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-end">
                                        {{ $jurusan->withQueryString()->links('pagination::bootstrap-5') }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
