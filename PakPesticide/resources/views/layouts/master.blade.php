<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PakPesticide</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <!--Navbar starts-->
      <nav class="navbar navbar-default">
            <div class="container">
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="{{url('home')}}">PakPesticides</a>
                  </div>

                  <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('home')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About Us</a></li>
                            <li><a href="{{url('ourteam')}}">Our Team</a></li>
                            <li><a href="{{url('crops')}}">Crops</a></li>
                            <li><a href="{{url('selectedCrop')}}">Selected Crops</a></li>
                            <li><a href="{{url('products')}}">Products</a></li>
                            <li><a href="{{url('cart')}}">Cart</a></li>
                            <li><a href="{{url('order')}}">Order</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                                    <!-- login/logout-->
                            <li>       
                                    <div>
                                        @if (Route::has('login'))
                                            <div class="top-right links">
                                                @auth
                                                    <a href="{{ url('/home') }}">Home</a>
                                                @else
                                                    <a href="{{ route('login') }}">Login</a>
                                                    <a href="{{ route('register') }}">Register</a>
                                                @endauth
                                            </div>
                                        @endif
                                    </div>
                            </li>
                        </ul>
                  </div>
            </div>
      </nav>
    <!--/.nav-collapse -->
<!--         <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> -->
    <!-- Dynamic BODY section -->
        
            @section('body')
            @show
        

    <!-- Footer start-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/products">Products</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <p>Copyrights &copy;2018,All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer end here-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="js/bootstrap.js"></script>
    </body>
</html>
