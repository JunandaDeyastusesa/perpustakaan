	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pinjam In</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">        
      <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">              
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">       
      <link rel="stylesheet" href="{{asset('css/main.css')}}">
		</head>

		<body>	
		  <header id="header">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a><img src="{{asset('img/halo.jpg')}}" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                @guest
                			<li><a class="nav-link" href="{{url('homepage')}}">Home</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
                <li><a class="nav-link" href="{{url('homepage')}}">Home</a></li>
                <li><a class="nav-link" href="{{url('anggota')}}">Anggota</a></li>
                <li><a class="nav-link " href="{{url('buku')}}">Pinjam Buku</a></li>
                <li><a class="nav-link" href="{{url('buku/daftar')}}">Daftar Buku</a></li>
                <li><a class="nav-link" href="{{url('pinjam')}}">Peminjam</a></li>
                 <li class="nav-item">

                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
              </li>
            @endguest
              </ul>
            </nav>  

          </div>
        </div>
      </header> 
			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left" style="margin-top: -7%;">
							<h6>Ayo Mulai Membaca Sekarang </h6>
							<h1>Pinjam.In</h1>
							<p>
								Pinjam.In adalah platform perpustakaan online 
							</p>
							<a href="{{url('buku')}}" class="primary-btn text-uppercase">Pinjam now</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end" style="padding-bottom: 300px; margin-top: -7%">
							<img class="img-fluid" src="{{asset('img/Foto ABout.png')}}" alt="">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center" style="margin-top: -20%;">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        
		                        <h1>Rekomendasi Buku.</h1>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters-content" style="margin-top: -1%;">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/keok.png')}}" alt="">
	                            	</div>
									<a href="img/p1.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
									<div class="cat">Sejarah</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/kkn.png')}}" alt="">
	                            	</div>
									<a href="img/p2.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
									<div class="cat">Horor</div>
								</div>					                               
                            </div>                            
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/nama.png')}}" alt="">
	                            	</div>
									<a href="img/p3.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <div class="cat">Sastra</div>
                                </div>
                            </div>
                            <!-- <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/p4.jpg')}}" alt="">
	                            	</div>
									<a href="img/p4.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                                <div class="p-inner">
                                    <h4>Embosed Logo Design</h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div> -->
                            <!-- <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/p5.jpg')}}" alt="">
	                            	</div>
									<a href="img/p5.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>3D Helmet Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div> -->
<!--                             <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('img/p6.jpg')}}" alt="">
	                            	</div>
									<a href="img/p6.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('img/preview.png')}}" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <p></p>
                </div>
            </section>
            <!-- End portfolio-area Area -->			



			<!-- Start price Area -->
			<section class="price-area ">
				<div class="container" style="margin-top: -4%;">
					<div class="row d-flex justify-content-center" >
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">My Team</h1>
								<p>Project (Pinjam.In)</p>
							</div>
						</div>
					</div>					
					<div class="row" style="margin-top: -5%;">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
							<img class="image img-fluid" src="{{asset('img/junan.jpg')}}" style="border-radius:30%" alt="">
								<h4>Junanda Deyastusesa</h4>
								<p class="mt-10">Identitas</p>
							</div>
							<div class="package-list">
								<ul>
									<li>XI RPL 5</li>
									<li>Number 16</li>
									<li>Back End Programmer</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
							<img class="image img-fluid" src="{{asset('img/salman.jpg')}}" style="border-radius:30%" alt="">
							<h4>Salman Naufal Haq</h4>
								<p class="mt-10">Identitas</p>
							</div>
							<div class="package-list">
								<ul>
									<li>XI RPL 5</li>
									<li>Number 32</li>
									<li>Front End Programmer</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
							<img class="image img-fluid" src="{{asset('img/nanda.jpg')}}" style="border-radius:30%" alt="">
								<h4>Nanda Syarla Hariyanti</h4>
								<p class="mt-10\">Identitas</p>
							</div>
							<div class="package-list">
								<ul>
									<li>XI RPL 5</li>
									<li>Number 25</li>
									<li>Front End Programmer</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
							<img class="image img-fluid" src="{{asset('img/zalfa.jpg')}}" style="border-radius:30%" alt="">
							<h4>Zalfa Alya Zahra</h4>
								<p class="mt-10">Identitas</p>
							</div>
							<div class="package-list">
								<ul>
									<li>XI RPL 5</li>
									<li>Number 40</li>
									<li>Front End Programmer</li>
								</ul>
							</div>
						</div>																		
					</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End price Area -->			
	
											
												
					</div>
				</div>	
			</section>
			<!-- end recent-blog Area -->
						<!-- Start home-about Area -->
			<section class="home-about-area pt-100" style="margin-top: -0%; margin-bottom: 8%;">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-7 col-md-7 home-about-left" style="margin-top: -5%;">
							<img class="img-fluid" src="{{asset('img/Foto ABout.png')}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h1 class="text-uppercase">Personal Details</h1>
							<p>
								Visi : - Melestarikan budaya membaca untuk semua kalangan umur
								       - Memudahkan semua orang bisa membaca buku dengan mudah
								<br>
								<br>
								Misi : - Mendukung pendidikan yang ada di Indonesia
								       - Mengembangkan minat baca bagi semua kalangan 
									   - Menyediakan akses untuk membaca
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->		
            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    Membaca lah, karena dengan membaca akan memperluas wawasan dan pengetahuan seseorang. 
                                </p>
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Pinjam.In</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Luasnya wawasan seseorang juga mempengaruhi masa <br> 
                                depan bangsa.</p>
								<div class="" id="mc_embed_signup">
									 <!-- <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get"> -->
									  <!-- <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div> -->
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="http://juna.epizy.com"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		
      <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>           
      <script src="{{asset('js/easing.min.js')}}"></script>      
      <script src="{{asset('js/hoverIntent.js')}}"></script>
      <script src="{{asset('js/superfish.min.js')}}"></script> 
      <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script> 
      <script src="{{asset('js/jquery.tabs.min.js')}}"></script>           
      <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>  
      <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>      
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('js/simple-skillbar.js')}}"></script>             
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>              
      <script src="{{asset('js/mail-script.js')}}"></script> 
      <script src="{{asset('js/main.js')}}"></script>  
		</body>
	</html>