@extends('layout.adminPage.app')
@section('title', 'Edit Pengurus')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('update.pengurus', $pengurus->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-header">
                                <h2>Update Pengurus</h2>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-md-12">Nama Lengkap</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" id="nama"
                                        class="form-control form-control-line @error('nama') is-invalid @enderror"
                                        value="{{ $pengurus->nama }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npm" class="col-md-12">NPM</label>
                                <div class="col-md-12">
                                    <input type="text" name="npm" id="npm"
                                        class="form-control form-control-line @error('npm') is-invalid @enderror"
                                        value="{{ $pengurus->npm }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="macaddress" class="col-md-12">Mac Address</label>
                                <div class="col-md-12">
                                    <input type="text" name="macaddress" id="macaddress"
                                        class="form-control form-control-line @error('macaddress') is-invalid @enderror"
                                        value="{{ $pengurus->macaddress }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jabatan" class="col-md-12">Jabatan</label>
                                <div class="col-md-12">
                                    <input type="text" name="jabatan" id="jabatan"
                                        class="form-control form-control-line @error('jabatan') is-invalid @enderror"
                                        value="{{ $pengurus->jabatan }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jurusan" class="col-md-12">Jurusan</label>
                                <div class="col-md-12">
                                    <input type="text" name="jurusan" id="jurusan"
                                        class="form-control form-control-line @error('jurusan') is-invalid @enderror"
                                        value="{{ $pengurus->jurusan }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gol" class="col-md-12">Golongan</label>
                                <div class="col-md-12">
                                    <select name="gol"
                                        class="form-control form-control-line @error('gol') is-invalid @enderror">
                                        <option value="{{ $pengurus->gol }}">{{ $pengurus->gol }}</option>
                                        <option value="INTI">INTI</option>
                                        <option value="Information Officer">Information Officer</option>
                                        <option value="Technical Officer">Technical Officer</option>
                                        <option value="Financial Officer">Financial Officer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-md-12">Gambar</label>
                                <div class="col-md-12">
                                    <input type="file" name="gambar" id="gambar"
                                        class="form-control form-control-line" value="{{ $pengurus->gambar }}">
                                </div>
                                @if ($pengurus->gambar)
                                    <img src="{{ asset('storage/' . $pengurus->gambar) }}" alt="" width="150px">
                                @else
                                    <p>Gambar tidak tersedia</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-danger">Update</button>
                                    <a href="{{ route('pengurus.admin') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
