<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('css/styles_admin.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
    
    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
           @include('layouts.inc.admin-footer')
        </div>
    </div>


    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/scripts_admin.js')}}"></script>
</body>
</html>