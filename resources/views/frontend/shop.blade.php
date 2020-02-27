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

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/">TEA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                        </div>
                        <nav id="nav-menu-container"></nav>
                         <li class="nav-item">
                                    <a class="navbar-brand" href="keranjang"><h6 style="color:white;">Cart</h6></a>
                                </li>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li class="nav-item">
                                    <a class="navbar-brand" href="favorit"><h6 style="color:white;">Wishlist</h6></a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(assets/img/4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <input type="hidden" name="_method" value="PATCH">
                                                        {{csrf_field()}}

                                                            <label for=""><h3 style="color:white;"> </h3></label>
                                                            <img src="{{asset('assets/img/teh/'.$teh->gambar)}}" alt="" height="250px" width="250px">


                                                        </div>
                                                         <div class="card-body">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="">Nama Pembeli</label>
                                            <input class="form-control" type="text" name="nama" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Teh</label>
                                            <input class="form-control" type="text" name="nama_teh" id="" value="{{$teh->nama_teh}}"disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Teh</label>
                                            <input class="form-control" type="text" name="harga_teh" id="" value="{{$teh->harga_teh}}"disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Teh</label>
                                            <input class="form-control" type="text" name="jumlah_barang" id="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-info">
                                                    Check Out
                                            </button>
                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
    </section>

    <!-- ****** Welcome Area End ****** -->
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


 {{-- @extends('master')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="jumbotron text-center clearfix">
            <h2>Laravel Shopping Cart Example</h2>
            <p>An example Laravel App that demos the basic functionality of a typical e-commerce shopping cart.</p>
            <p>
                <a href="http://andremadarang.com/implementing-a-shopping-cart-in-laravel/" class="btn btn-primary btn-lg" target="_blank">Blog Post</a>
                <a href="https://github.com/drehimself/laravel-shopping-cart-example" class="btn btn-success btn-lg" target="_blank">GitHub Repo</a>
            </p>
        </div> <!-- end jumbotron -->

        @foreach ($data->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                <p>{{ $product->price }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection --}}
