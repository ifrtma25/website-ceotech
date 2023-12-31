@extends('layout.adminPage.app')
@section('title', 'Demisioner')
@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('status') }}"
            });
        </script>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Demisioner</h4>
                        <div class="col-md-4">
                            <div class="form-control">
                                <form action="{{ route('cari.demisioner') }}" method="GET">
                                    <input type="text" size="37px" name="cari" placeholder="Cari berdasarkan Nama"
                                        value="{{ old('cari') }}" style="border: none">
                                    <button class="fa fa-search" style="border: none; background-color: white"></button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-danger {{ Request::is('demisioner_admin') ? 'active' : '' }}"
                                href="{{ route('demisioner.admin') }}">Semua Periode</a>
                            <a class="btn btn-danger" href="{{ route('2020-2021') }}">Periode 2020-2021</a>
                            <a class="btn btn-danger" href="{{ route('2021-2022') }}">Periode 2021-2022</a>
                            <a class="btn btn-danger" href="{{ route('2022-2023') }}">Periode 2022-2023</a>
                            <a class="btn btn-secondary" href="{{ route('create.demisioner') }}">Tambah Data</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($demisioner as $key => $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->npm }}</td>
                                        <td>{{ $item->angkatan }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->periode }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                width="100px">
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('edit.demisioner', $item->id) }}" class="btn btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('delete.demisioner', $item->id) }}" method="post"
                                                    style="display: inline">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
