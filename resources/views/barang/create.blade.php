@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-4 text-center">Tambah Barang</h4>
        </div>
    <div class="container-sm">
    <form method="POST" action="{{ route('barangs.store') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="kode_barang">Kode Barang:</label>
                        <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}" placeholder="Kode Barang">
                            @error('firstName')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="nama_barang">Nama Barang:</label>
                        <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Nama Barang">
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="harga_barang">Harga Barang:</label>
                        <input class="form-control @error('harga_barang') is-invalid @enderror" type="number" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}" placeholder="0">
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="deskripsi_barang">Deskripsi Barang:</label>
                            <textarea class="form-control" @error('firstName') is-invalid @enderror type="" id="deskripsi_barang" name="deskripsi_barang" required></textarea>
                            @error('deskripsi_barang')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="satuan_barang">Satuan Barang:</label>
                        <select class="form-control" id="satuan_barang" name="satuan_barang" required>
                            <option selected>Pilih satuan gramasi</option>
                                <option value="">gr</option>
                                <option value="">kg</option>
                        </select>
                    </div>
                    <hr>
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark mt-3"><i class="bi-arrow-left-circle "></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark md-8 mt-3 flex" style=background-color:#680081;><i class="bi-check-circle"></i> Tambahkan Barang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
