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
                                    <a class="nav-link" href="#about">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Wishlist</a>
                                </li>
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

<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
                    <center><h2>Keranjang Belanja</h2></center>
					<div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('front.list_cart') }}">Cart</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">

        <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
        <!-- KARENA MODULENYA AKAN DIKERJAKAN PADA SUB BAB SELANJUTNYA -->
        <!-- HANYA SAJA DEMI KEMUDAHAN PENULISAN MAKA SAYA MASUKKAN PADA BAGIAN INI -->
                <form action="{{ route('front.update_cart') }}" method="post">
                    @csrf
        <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->

				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
              <!-- LOOPING DATA DARI VARIABLE CARTS -->
                            @forelse ($carts as $row)
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
                                            <img src="{{ asset('assets/img/teh/' . $row['product_image']) }}" width="100px" height="100px" alt="{{ $row['product_name'] }}">
										</div>
										<div class="media-body">
                                            <p>{{ $row['product_name'] }}</p>
										</div>
									</div>
								</td>
								<td>
                                    <h5>Rp {{ number_format($row['product_price']) }}</h5>
								</td>
								<td>
									<div class="product_count">


                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->
                                        <input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty">
                                        <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->


										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
                                    <h5>Rp {{ number_format($row['product_price'] * $row['qty']) }}</h5>
								</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                            @endforelse
							<tr class="bottom_button">
								<td>
									<button class="gray_btn">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr>
                            </form>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
                                    <h5>Rp {{ number_format($subtotal) }}</h5>
								</td>
							</tr>
							 {{-- <tr class="shipping_area">
								<td></td>
								<td></td>
								<td>
									<h5>Shipping</h5>
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<li>
												<a href="#">Flat Rate: $5.00</a>
											</li>
											<li>
												<a href="#">Free Shipping</a>
											</li>
											<li>
												<a href="#">Flat Rate: $10.00</a>
											</li>
											<li class="active">
												<a href="#">Local Delivery: $2.00</a>
											</li>
										</ul>
										<h6>Calculate Shipping
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</h6>
										<select class="shipping_select">
											<option value="1">Bangladesh</option>
											<option value="2">India</option>
											<option value="4">Pakistan</option>
										</select>
										<select class="shipping_select">
											<option value="1">Select a State</option>
											<option value="2">Select a State</option>
											<option value="4">Select a State</option>
										</select>
										<input type="text" placeholder="Postcode/Zipcode">
										<a class="gray_btn" href="#">Update Details</a>
									</div>
								</td>
							</tr>  --}}
						<tr class="out_button_area">
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="#">Continue Shopping</a>
										<a class="main_btn" href="#">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </section>

     <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
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

