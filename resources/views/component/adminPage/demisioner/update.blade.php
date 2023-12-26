@extends('layout.adminPage.app')
@section('title', 'Edit Demisioner')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('update.demisioner', $demisioner->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-header">
                                <h2>Update Demisioner</h2>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-md-12">Nama Lengkap</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" id="nama"
                                        class="form-control form-control-line" value="{{ $demisioner->nama }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npm" class="col-md-12">NPM</label>
                                <div class="col-md-12">
                                    <input type="text" name="npm" id="npm"
                                        class="form-control form-control-line" value="{{ $demisioner->npm }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="angkatan" class="col-md-12">Angkatan</label>
                                <div class="col-md-12">
                                    <input type="text" name="angkatan" id="angkatan"
                                        class="form-control form-control-line" value="{{ $demisioner->angkatan }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jabatan" class="col-md-12">Jabatan</label>
                                <div class="col-md-12">
                                    <input type="text" name="jabatan" id="jabatan"
                                        class="form-control form-control-line" value="{{ $demisioner->jabatan }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="periode" class="col-md-12">Periode</label>
                                <div class="col-md-12">
                                    <input type="text" name="periode" id="periode"
                                        class="form-control form-control-line" value="{{ $demisioner->periode }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control form-control-line" value="{{ $demisioner->gambar }}">
                                </div>
                                @if ($demisioner->gambar)
                                    <img src="{{ asset('storage/' . $demisioner->gambar) }}" alt="" width="150px">
                                @else
                                    <p>Gambar tidak tersedia</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-danger">Update</button>
                                    <a href="{{ route('demisioner.admin') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
