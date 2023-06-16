<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles_admin.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <title>Register</title>
</head>

<body>
    <nav class="navbar navbar-white bg-white static-top">
        <div class="container">
            <a class="navbar-brand" href="#!">ElektroniKu</a>
        </div>
    </nav>

    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/register') }}" method="post">
                                @csrf
                                {{-- <div class="form-floating mb-3">
                                                <input class="form-control" name="idgrup" id="inputName" type="hidden" placeholder="Subadrun" value="1" />
                                            </div> --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="name" id="inputName" type="text"
                                        placeholder="Subadrun" />
                                    <label for="inputName">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" id="inputEmail" type="email"
                                        placeholder="name@example.com" />
                                    <label for="inputEmail">Email address</label>
                                </div>
                                {{-- <div class="form-floating mb-3">
                                                <input class="form-control" name="address" id="inputAdress" type="text" placeholder="Jakarta" />
                                                <label for="inputName">Adress</label>
                                            </div> --}}
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="password" id="inputPassword" type="password"
                                        placeholder="Password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    {{-- <a class="btn btn-primary" type="submit" href="{{url('/register')}}">Register</a> --}}
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
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="{{ url('/login') }}">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> --}}
        </div>
        <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts_admin.js') }}"></script>
    </body>

</html>
