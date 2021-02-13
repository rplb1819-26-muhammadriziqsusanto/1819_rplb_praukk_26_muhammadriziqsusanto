@extends('layouts.main')

@section('title', 'Dashboard')

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
                        <a class="nav-link" href="#">Pengaduan</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#">Masyarakat</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="#">Petugas</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrator
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
        <div class="col-xl-6 col-md-6 mt-5 mb-5">
            <div class="card border-left-primary shadow h-100 py-4 bg-gray-600">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Pengaduan</div>
                    <div class="h5 mb-0 font-weight-bold text-white">10</div>
                  </div>
                  <div class="col-auto">
                    <a href="" class="btn btn-md bg-green text-white">Lihat Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-6 col-md-6 mt-5 mb-5">
            <div class="card border-left-primary shadow h-100 py-4 bg-gray-600">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Petugas</div>
                    <div class="h5 mb-0 font-weight-bold text-white">5</div>
                  </div>
                  <div class="col-auto">
                    <a href="" class="btn btn-md bg-green text-white">Lihat Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-4 bg-gray-600">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Masyarakat</div>
                    <div class="h5 mb-0 font-weight-bold text-white">5</div>
                  </div>
                  <div class="col-auto">
                    <a href="" class="btn btn-md bg-green text-white">Lihat Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-4 bg-gray-600">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanggapan</div>
                    <div class="h5 mb-0 font-weight-bold text-white">10</div>
                  </div>
                  <div class="col-auto">
                    <a href="" class="btn btn-md bg-green text-white">Lihat Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection