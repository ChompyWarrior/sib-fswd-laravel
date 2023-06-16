<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles_admin.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-white bg-white static-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">ElektroniKu</a>
        </div>
    </nav>

    <body class="bg-light border">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/login') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="inputEmail" type="email" />
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="password" id="inputPassword" type="password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> --}}
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="{{ url('/register') }}">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts_admin.js') }}"></script>
    </body>

</html>
