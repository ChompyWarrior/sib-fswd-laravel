<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ElektroniKu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/card.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar container navbar-expand-lg w-100 navbar-white bg-white">

            <a class="navbar-brand" href="#">ElektroniKu</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimonials</a>
                    </li>
                </ul>
            </div>
            @guest
                <div class="float-end">
                    <a class="btn btn-light border" href="{{ url('login') }}">Login</a>
                </div>
            @endguest
            @auth
                <div class="float-end">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-light border">
                            Logout
                        </button>
                    </form>
                </div>

            @endauth

    </nav>
    {{-- <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#!">ElektroniKu</a>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
            </div>

        </div>
    </nav> --}}
    <!-- Masthead-->
    <header>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">

                @foreach ($sliders as $key => $sliderItem)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }} active">
                        @if ($sliderItem->image)
                            <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="...">
                        @endif
                        {{-- <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $sliderItem->title }}</h5>
                            <p>{{ $sliderItem->description }}</p>
                        </div> --}}
                        <div class="carousel-caption d-none d-md-block">
                            <div class="custom-carousel-content">
                                <h1 class="text-white">
                                    {{ $sliderItem->title }}
                                </h1>
                                <p class="text-white">
                                    {{ $sliderItem->description }}</p>
                                <div>
                                    <a href="#" class="btn btn-slider text-white">
                                        Get Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>


    <section id="product" class="bg-light text-center">
        <div class="py-3 py-md-5 bg-light">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <h4 class="mb-4">Our Categories</h4>
                    </div>

                    @forelse ($category as $categoryItem)
                        <div class="col-6 col-md-3">
                            <div class="category-card">
                                <a href="{{ url('collections/' . $categoryItem->slug) }}">
                                    <div class="category-card-img">
                                        <img src="{{ asset('upload/category/' . $categoryItem->image) }}" class="w-100"
                                            alt="Laptop">
                                    </div>
                                    <div class="category-card-body">
                                        <h5>{{ $categoryItem->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <h5>No Category Available</h5>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>


    <!-- Icons Grid-->
    {{-- <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                        <h3>Fully Responsive</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                        <h3>Bootstrap 5 Ready</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Image Showcases-->
    <section id="aboutus" class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('assets/img/showcase-1.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use our product, you will know the benefit of modern solution and
                        swift </p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img"
                    style="background-image: url('assets/img/showcase-2.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Simple Design And Swift</h2>
                    <p class="lead mb-0">Our Product bring back moderate of simple design and
                        lead the proficiency of compact wire solution you wont feel bother with any
                        gadget from now on!
                    </p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Easy to Use & Customize</h2>
                    <p class="lead mb-0">Our product is being prepared for newbie customers and
                        so easy to use ! as simple as blinking eyes ! dont worry if you have any problem
                        our customer service is 27/7 open !
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section id="testimoni" class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg"
                            alt="..." />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg"
                            alt="..." />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Wow !, this brand is amazing they amaze me with easy use !."
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg"
                            alt="..." />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these product available to
                            us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#aboutus">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#testimoni">Testimonials</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#product">Product</a></li>
                        
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; ElektroniKu 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
