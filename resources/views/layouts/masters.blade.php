<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>SHOPLIB.COM Mockup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="{{asset('js/fontawesome-all.js')}}"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="/">SHOPLIB.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="login" class="btn btn-warning mr-3">Login <span><i class="fas fa-sign-in-alt"></i></span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="register" class="btn btn-success">Signup <span><i class="fas fa-user-plus"></i></span></a>
                    </li>
                             -->
                        <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-warning mr-3" href="{{ route('login') }}">{{ __('Login') }} <span><i class="fas fa-sign-in-alt"></i></span></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }} <span><i class="fas fa-user-plus"></i></span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown"> 
                                <a href="{{ route('home') }}" class="btn btn-warning mr-3">Dashbord 
                                    <span><i class="fas fa-dashbord"></i>
                                    </span> 
                                </a>
                    
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </div>
      </nav>
      <!-- NAVABAR END -->

      @yield('main')

<!-- FOOTER -->
    <footer  class="bg-primary py-1">
       <p class="text-center py-2 text-white">LIBER-TECH &copy; 2020</p>
    </footer>

</body>
<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });
</script>


<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html>