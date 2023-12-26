@extends('layout.adminPage.app')
@section('title', 'Pengurus')
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
                        <h4 class="card-title">Pengurus</h4>
                        <div class="col-md-4">
                            <div class="form-control">
                                <form action="{{-- route('pengurus.cari') --}}" method="GET" style="display: inline">
                                    <input type="text" size="37px" name="cari" placeholder="Cari Berdasarkan Nama"
                                        style="border: none">
                                    <button class="fa fa-search" style="border: none; background-color: white"></button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-secondary" href="{{ route('create.pengurus') }}">Tambah Data</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Mac Address</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Bidang</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($pengurus as $key => $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->npm }}</td>
                                        <td>{{ $item->macaddress }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->gol }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                width="100px">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.pengurus', $item->id) }}" class="btn btn-danger">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('delete.pengurus', $item->id) }}" method="POST"
                                                style="display: inline" onsubmit="return confirm('Yakin?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
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
