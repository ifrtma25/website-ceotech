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
                        <a class="btn btn-secondary" href="{{ route('create_pengurus') }}">Tambah Data</a>
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
                                    <th scope="col">Golongan</th>
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
                                            <a href="{{ route('edit_pengurus', $item->id) }}" class="btn btn-danger">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('delete_pengurus', $item->id) }}" method="POST"
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
