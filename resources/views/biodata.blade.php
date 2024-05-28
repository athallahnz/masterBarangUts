@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-8 border">
                <div class="mb-3 text-center">
                    <img src={{ Vite::asset('resources/images/Profile.jpg') }} class="rounded-circle m-1 p-1" alt="" width="150" height="150">
                    <h4 p-3>My Biodata</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Nama </label>
                        <h5>Athallah Naufal Zuhdi</h5>
                    </div>
                    <div class="col-8 mb-3 col-sm-7">
                        <div class="">
                            <label class="form-label">TTL</label>
                            <h5>Ponorogo, 20 September 2002</h5>
                        </div>
                    </div>
                        <div class="col-6 col-sm-2 mb-3">
                            <label class="form-label">Umur</label>
                            <h5>21</h5>
                        </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <h5>Laki-laki</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Agama</label>
                        <h5>Islam</h5>
                    </div>
                    <div class="col-8 mb-3 col-sm-7">
                        <label class="form-label">Status</label>
                        <h5>Mahasiswa Aktif</h5>
                    </div>
                    <div class="col-6 col-sm-4 mb-3">
                        <label class="form-label">Semester</label>
                        <h5>6</h5>
                    </div>
                    <div class="col-8 mb-3 col-sm-7">
                        <label class="form-label">Fakultas</label>
                        <h5>FRI - Fakultas Rekayasa Industri</h5>
                    </div>
                    <div class="col-6 col-sm-4 mb-3">
                        <label class="form-label">Program Studi</label>
                        <h5>S1 - Sistem Informasi</h5>
                    </div>
                    <div class="col-8 mb-3 col-sm-7">
                        <label class="form-label">No.Tlp</label>
                        <h5>0852 3116 1434</h5>
                    </div>
                    <div class="col-6 col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <h5>athallahnz57@gmail.com</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                            <label class="form-label">Keahlian</label>
                            <h5>FrontEnd Developer - UI/UX Designer - Videografer</h5>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                        <a href="{{ route('home') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
