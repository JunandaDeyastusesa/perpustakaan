<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}">
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
              <a class="nav-link" href="{{url('homepage')}}"><img src="{{asset('img/halo.jpg')}}" alt="" title="" /></a>
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
      <br><br><br>

      @yield('main')
      <br><br><br><br>
      <section id="footer" class="footer footer-map fixed-bottom" >
        <div class="row">

          <div class="col-md-12 text-center bg-dark text-light" style="padding: 0.1px; height: 50px">
            <p class="mt-3 text-light">&copy; Copyright 2019.</p>
          </div>
        </div>
      </section>
    </body>
  </html>