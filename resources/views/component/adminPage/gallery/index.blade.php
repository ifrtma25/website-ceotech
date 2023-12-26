@extends('layout.adminPage.app')
@section('title', 'Gallery')
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
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}"
            });
        </script>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Member</h4>
                        <div class="col-md-4">
                            <a href="{{ route('create.gallery') }}" class="btn btn-dark">Tambah Gambar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($gallery as $key => $item)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                width="100px">
                                        </td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->ket }}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('edit.gallery', $item->id) }}" class="btn btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('delete.gallery', $item->id) }}" method="POST"
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
