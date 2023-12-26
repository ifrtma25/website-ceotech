@extends('layout.adminPage.app')
@section('title', 'Edit Gallery')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('update.gallery', $gallery->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-header">
                                <h2>Update Member</h2>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control form-control-line" value="{{ $gallery->gambar }}">
                                </div>
                                @if ($gallery->gambar)
                                    <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="" width="150px">
                                @else
                                    <p>Gambar tidak tersedia</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="col-md-12">Tanggal</label>
                                <div class="col-md-12">
                                    <input type="text" name="tanggal" id="tanggal"
                                        class="form-control form-control-line" value="{{ $gallery->tanggal }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ket" class="col-md-12">Keterangan</label>
                                <div class="col-md-12">
                                    <input type="text" name="ket" id="ket"
                                        class="form-control form-control-line" value="{{ $gallery->ket }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-danger">Update</button>
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
