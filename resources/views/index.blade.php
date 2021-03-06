<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>information of Tea</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="{{asset('assets/frontend/caviar/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('assets/frontend/caviar/css/responsive/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="{{asset('assets/frontend/caviar/img/core-img/preload-1.png')}}" alt="">
            <img class="preload-2" src="{{asset('assets/frontend/caviar/img/core-img/preload-2.png')}}" alt="">
            <img class="preload-3" src="{{asset('assets/frontend/caviar/img/core-img/preload-3.png')}}" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/">TEA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#awards">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#reservation">Reservation</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li> --}}
                            </ul>
                            <!-- Search Btn -->
                            <div class="caviar-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(assets/img/b.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>
                                <a href="#" class="btn caviar-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(assets/img/c.jpg);"></div>
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(assets/img/c.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>
                                <a href="#" class="btn caviar-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(assets/img/b.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('assets/img/a.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Sejarah Teh</h2>
                    </div>
                    <div class="about-us-content">
                        <span>restaurant style</span>
                        <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod. Etiam scelerisque eu enim et vestibulum. Mauris finibus, eros a faucibus varius, dui risus mattis massa, sed lobortis ante ante eget justo. Nam eu dolor lorem. Praesent blandit leo sit amet velit accumsan ultrices. Vestibulum nec libero vel sapien dictum euismod eu ac justo.</p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            {{-- <div class="about-us-second-part"> --}}
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="about-us-content">
                            <span>our chef</span>
                            <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod. Etiam scelerisque eu enim et vestibulum. Mauris finibus, eros a faucibus varius, dui risus mattis massa, sed lobortis ante ante eget justo.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{asset('assets/img/d.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                    <!-- btn -->
                    <a href="menu.html" class="btn caviar-btn"><span></span> View The Menu</a>
                </div>
            </div>
            <div class="row">
                @foreach ($teh as $data)
                 <div class="col-12 col-sm-6 col-md-4">

                        <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('assets/img/teh/'.$data->gambar.'')}}" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">{{$data->nama_teh}}</h6>
                            <p class="dish-price"><a href=" {{url('shop/' .$data->id)}} ">{{$data->harga_teh}}</a></p>
                        </div>
                        <form action="{{ route('front.cart') }}" method="POST">
  @csrf
  <div class="product_count">
    <input type="hidden" name="qty" id="sst" maxlength="12" value="1">

    <!-- BUAT INPUTAN HIDDEN YANG BERISI ID PRODUK -->
    <input type="hidden" name="product_id" value="{{ $data->id }}" class="form-control">

  </div>
  <div class="card_area">
    <a href="{{ url('frontend/ecommerce/cart.blade.php')}}"></a>
    <!-- UBAH JADI BUTTON -->
    <button class="main_btn">Add to Cart</button>
    <!-- UBAH JADI BUTTON -->

  </div>
</form>
                    </div>
                </div>
                 @endforeach
            </div>

        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Awards Area Start ****** -->
    <section class="caviar-awards-area" id="awards">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-2">
                    <div class="section-heading">
                        <h2>Awards</h2>
                    </div>
                </div>
                <div class="col-12 col-md-9 ml-md-auto">
                    <div class="caviar-awards d-sm-flex justify-content-between">
                        <img src="{{asset('assets/frontend/caviar/img/awards-img/a-1.png')}}" alt="">
                        <img src="{{asset('assets/frontend/caviar/img/awards-img/a-2.png')}}" alt="">
                        <img src="{{asset('assets/frontend/caviar/img/awards-img/a-3.png')}}" alt="">
                        <img src="{{asset('assets/frontend/caviar/img/awards-img/a-4.png')}}" alt="">
                        <img src="{{asset('assets/frontend/caviar/img/awards-img/a-5.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Awards Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->
    <section class="caviar-testimonials-area" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-content">
                        <div class="section-heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="caviar-testimonials-slides owl-carousel">
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{asset('assets/frontend/caviar/img/testimonial-img/3.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Robert Jonson</h5>
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                                <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod.</p>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{asset('assets/frontend/caviar/img/testimonial-img/2.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Clara Hudson</h5>
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                                <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod.</p>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{asset('assets/frontend/caviar/img/testimonial-img/1.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Jane Black</h5>
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                                <p>Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Testimonials Area End ****** -->

    <!-- ****** Reservation Area Start ****** -->
    <section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Reservation</h2>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="time" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Select Persons">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-12">
                            <textarea name="reservation-message" class="form-control" id="reservationMessage" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn caviar-btn"><span></span> Reserve Your Desk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="{{asset('assets/frontend/caviar/img/bg-img/hero-3.jpg')}}" alt="">
        </div>
    </section>
    <!-- ****** Reservation Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">caviar</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="{{asset('assets/frontend/caviar/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/frontend/caviar/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('assets/frontend/caviar/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets/frontend/caviar/js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('assets/frontend/caviar/js/active.js')}}"></script>
</body>
