<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kron') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://www.youtube.com/iframe_api"></script>
    <!-- Styles -->
    <link href="{{ asset('css/elegant.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

    <link rel="shortcut icon" href="{{ asset('assets/kron/icon.png') }}">


</head>
<body class="body-for-sticky">

<div id="app">




 <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <a class="navbar-brand d-none d-md-block" href="">
           <img src="{{ asset('assets/kron/icon.png') }}" width="30"> 
        </a>

      <div class="collapse navbar-collapse justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav mx-auto">
         
          @guest
    <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
        <li class="nav-item">
            @if (Route::has('register'))
                <a class="btn navbar-btn mx-2 text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </li>
    @else
    
        
                @if (Auth::guard('admin')->check())
        <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('admin.index') }}"> Home        
            </a>
        </li>
        <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('items.index') }}"> Shop       
            </a>
        </li>
        <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('users.index') }}">Users        
            </a>
        </li>
        <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('posts.index') }}"> Blog        
            </a>
        </li>
        <li class="nav-item">
            <a class="btn navbar-btn mx-2 text-white" href="{{ route('news.index') }}"> News       
            </a>
        </li>

                <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ strtoupper(Auth::user()->name) }} <span class="caret"></span>
            </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
                </li>
                @else


                <li class="nav-item">
                    <a class="btn navbar-btn mx-2 text-white" href="{{ route('home') }}"> Home        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn navbar-btn mx-2 text-white" href="{{ route('user.items.index') }}"> Shop       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn navbar-btn mx-2 text-white" href="{{ route('user.posts.index') }}"> Blog        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn navbar-btn mx-2 text-white" href="{{ route('user.news.index') }}"> News       
                    </a>
                </li>

                <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ strtoupper(Auth::user()->name) }} <span class="caret"></span>
            </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('user.logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>  
                </div>
            </li>

                @endif
            @endguest
            </ul>                          
       </div>
                    
                
                   
                

        </div>
   
</nav>
</div>
   
<main class="py-4">
    @yield('content')
</main>
    
<div>
    @include('layouts.footer')   
</div>

</body>
</html>