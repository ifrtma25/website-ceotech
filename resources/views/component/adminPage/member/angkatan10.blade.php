@extends('layout.adminPage.app')
@section('title', 'Member Angkatan X')
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
                        <h4 class="card-title">Member Angkatan X</h4>
                        <div class="card-body">
                            <a class="btn btn-danger" href="{{ route('member.admin') }}">Semua Angkatan</a>
                            <a class="btn btn-danger" href="{{ route('angkatan6') }}">Angkatan VI</a>
                            <a class="btn btn-danger" href="{{ route('angkatan7') }}">Angkatan VII</a>
                            <a class="btn btn-danger" href="{{ route('angkatan8') }}">Angkatan VIII</a>
                            <a class="btn btn-danger" href="{{ route('angkatan9') }}">Angkatan IX</a>
                            <a class="btn btn-danger {{ Request::is('member_angkatan10') ? 'active' : '' }}"
                                href="{{ route('angkatan10') }}">Angkatan X</a>
                            <a class="btn btn-secondary" href="{{ route('create.member') }}">Tambah Data</a>
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
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($member as $key => $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->npm }}</td>
                                        <td>{{ $item->angkatan }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                width="100px">
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('edit.member', $item->id) }}" class="btn btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('delete.member', $item->id) }}" method="POST"
                                                    style="display: inline" onsubmit="return confirm('Yakin?')">
                                                    @csrf
                                                    @method('DELETE')
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
