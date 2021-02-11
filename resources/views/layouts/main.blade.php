<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
</head>
<body class="bg-gray">
    @yield('navbar')

    @yield('container')

        <footer class="footer bg-dark">
            <div class="container">
                <img src="{{asset('images/Logo.svg')}}" alt="Logo LaporAduan">
                <span class="text-white mx-auto ml-3">&copy; 2021 | Muhammad Riziq Susanto</span>
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