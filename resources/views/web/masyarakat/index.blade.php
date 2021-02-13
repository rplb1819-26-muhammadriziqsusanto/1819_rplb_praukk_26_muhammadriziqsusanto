@extends('layouts.main')

@section('title', 'Laporkan Masalahmu')

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
                        <a class="nav-link active" href="/frontend/masyarakat">Pengaduan</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="/frontend/masyarakat/data_pengaduan">Data Pengaduan</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Masyarakat
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
    <div class="row justify-content-center my-auto">
        <div class="col-lg-10 col-md-9 col-xl-10 my-5">
            <h1 class="text-white text-center text-bold">Silahkan Laporkan Permasalahan Anda!</h1>
            <div class="card bg-gray-600 shadow my-5">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="isi_laporan" class="text-white">Deskripsikan Laporan</label>
                            <textarea class="form-control bg-gray-800" id="isi_laporan" name="isi_laporan" rows="8" placeholder="Isi Laporanmu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="text-white">Bukti Foto</label>
                            <input type="file" class="form-control-file bg-gray-800" id="foto" name="foto">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control bg-green">Submit Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection