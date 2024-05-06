@extends('master.app')
@section('breadcrumb')
    <li><a href="{{ route('dashboard') }}">Dashboard <span class="mx-1">></span></a></li>
    <li><a> Peserta </a></li>
@endsection
@section('header')
    <h2 style="width: max-content">Data Peserta</h2>
@endsection
@section('konten')
    <div class="row">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head d-flex justify-content-between">
                    <div class="float-right heading1 margin_0">
                        <a href="{{ route('peserta.create') }}">
                            <button class="btn btn-primary"><i class="fa fa-plus mr-2"></i>tambah </button>
                        </a>
                    </div>
                    <form class="d-flex" action="{{ route('peserta.index') }}" method="get">
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
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Jurusan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($peserta->count() != null)
                                    @foreach ($peserta as $p)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->tempat_lahir . '-' . $p->tanggal_lahir }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->telepon }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{ $p->password }}</td>
                                            <td>{{ $p->jurusan->nama }}</td>
                                            {{--  <td>{{ Str::limit($p->peserta, 5, ' (...)') }}</td>  --}}
                                            {{--  <td>{{ strlen($p->peserta) > 5 ? substr($p->peserta, 0, 5) . '[...]' : $p->peserta }}</td>   --}}
                                            <td class="text-right d-flex justify-content-end">
                                                <a class="btn btn-warning" href="{{ route('peserta.edit', $p->id) }}"><i
                                                        class="fa fa-pencil"></i></a>
                                                <form class="inline-block w-max"
                                                    action="{{ route('peserta.destroy', $p->id) }}" method="POST">
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
                                        <td colspan="9" class="text-center">Data peserta tidak ditemukan
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="9" class="text-end">
                                        {{ $peserta->withQueryString()->links('pagination::bootstrap-5') }}
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
