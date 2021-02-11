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
                        <a class="nav-link active" href="#">Pengaduan</a>
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
        <div class="col-12">
            <h1 class="h3 mb-2 text-white text-center mb-3">Data</h1>
        <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark border">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body bg-dark text-white">
            <div class="table-responsive bg-dark">
                <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Masyarakat</th>
                            <th>Tanggal Laporan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Masyarakat</th>
                            <th>Tanggal Laporan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Udin</td>
                            <td>01-02-2021</td>
                            <td>
                                <a class="btn btn-info">Detail</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>       
</div>
@endsection