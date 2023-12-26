@extends('layout.adminPage.app')
@section('title', 'Tambah')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('store.gallery') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-header">
                                <h2>Tambah Member</h2>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control form-control-line @error('gambar') is-invalid @enderror">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="col-md-12">Tanggal</label>
                                <div class="col-md-12">
                                    <input type="text" name="tanggal" id="tanggal"
                                        class="form-control form-control-line @error('tanggal') is-invalid @enderror"
                                        autofocus>
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ket" class="col-md-12">Keterangan</label>
                                <div class="col-md-12">
                                    <input type="text" name="ket" id="ket"
                                        class="form-control form-control-line @error('ket') is-invalid @enderror">
                                    @error('ket')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-danger">Tambah</button>
                                    <a href="{{ route('gallery.admin') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
