@extends('layout.adminPage.app')
@section('title', 'Tambah')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('store.demisioner') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-header">
                                <h2>Tambah Demisioner</h2>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-md-12">Nama Lengkap</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" id="nama"
                                        class="form-control form-control-line @error('nama') is-invalid @enderror"
                                        autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npm" class="col-md-12">NPM</label>
                                <div class="col-md-12">
                                    <input type="text" name="npm" id="npm"
                                        class="form-control form-control-line @error('npm') is-invalid @enderror" autofocus>
                                    @error('npm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="angkatan" class="col-md-12">Angkatan</label>
                                <div class="col-md-12">
                                    <input type="text" name="angkatan" id="angkatan"
                                        class="form-control form-control-line @error('angkatan') is-invalid @enderror">
                                    @error('angkatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jabatan" class="col-md-12">Jabatan</label>
                                <div class="col-md-12">
                                    <input type="text" name="jabatan" id="jabatan"
                                        class="form-control form-control-line @error('jabatan') is-invalid @enderror">
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="periode" class="col-md-12">Periode</label>
                                <div class="col-md-12">
                                    <input type="text" name="periode" id="periode"
                                        class="form-control form-control-line @error('periode') is-invalid @enderror">
                                    @error('periode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-danger">Tambah</button>
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
