<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
</head>
<body class="bg-dark-900">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container justify-content-center">
                <a href=""><img src="{{asset('images/Logo.svg')}}" alt="Logo LaporAduan" class="navbar-brand"></a>
            </div>
        </nav>
    
    <div class="container">
        <div class="row justify-content-center my-auto">
            <div class="col-lg-10 col-md-9 col-xl-10 my-5">
                <div class="card bg-gray-200 shadow my-5">
                    <div class="card-body">
                        <div class="card bg-green w-50 mx-auto">
                            <h1 class="text-center text-white h5 my-auto py-2">Aplikasi Pengaduan Masyarakat</h1>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="username" class="text-white">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-white">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" aria-describedby="helpId">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary form-control">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark">
        <div class="container">
            <img src="{{asset('images/Logo.svg')}}" alt="Logo LaporAduan">
            <span class="text-white mx-auto ml-3"> 2021 | Muhammad Riziq Susanto</span>
        </div>
    </footer>
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        $('#dataTable').DataTable();
    </script>
</body>
</html>