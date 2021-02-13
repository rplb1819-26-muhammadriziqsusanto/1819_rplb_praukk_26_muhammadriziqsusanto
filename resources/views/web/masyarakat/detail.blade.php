@extends('layouts.main')

@section('title', 'Detail Data Pengaduan')

@section('navbar')
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
            <a href="/dashboard"><img src="{{asset('images/Logo.svg')}}" alt="Logo LaporAduan" class="navbar-brand"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/frontend/masyarakat">Pengaduan</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link active" href="/frontend/masyarakat/data_pengaduan">Data Pengaduan</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Maysyarakat
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                    </li>
                </ul>
        </div>
    </div>
</nav>

@section('container')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="h3 mb-2 text-white text-center mb-3">Detail Data</h1>
        <div class="shadow mb-4">
        <div class="card-body bg-gray-600 text-white">
            <h2 class="card-title h4">Foto : </h2>
            <img src="{{asset('images/Logo.svg')}}" class="mb-4">
            <h2 class="card-title h4">Deskripsi: blabaladsadasdas</h2>
        </div>
        <div class="card-body bg-gray-600 text-white mt-3">
            <h2 class="card-title h4">Nama: Masyarakat</h2>
            <h2 class="card-title h4">NIK: 181910312</h2>
            <h2 class="card-title h4">No. Telepon: 081213311</h2>
            <h2 class="card-title h4">Tanggal: 11-02-2021</h2>
            <h2 class="card-title h4">Status: Belum Diproses</h2>
        </div>
        <a class="btn btn-lg btn-success mt-3" href="/frontend/masyarakat/data_pengaduan">Detail</a>
    </div>
        </div>
    </div>       
</div>
@endsection