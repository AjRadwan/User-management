<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{config("app.name", 'User Management System')}}</title>
 <!-- Styles -->
    <link rel="stylesheet" href="{{'css/app.css'}}">

{{-- JavaScript --}}
<script src="{{'js/app.js'}}" defer></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
          
        <div class="container">
        <a class="navbar-brand" 
        href="#">{{config("app.name", 'User Management System')}}
       </a>
     
<div class="collapse navbar-collapse">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
         <a class="nav-link active" href="#">User</a>
    </li>
 </ul>
<div class="d-flex">
       @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endauth
            </div>
        @endif 
    </div>
    </div>
    </div>

 </nav>
</div>

    {{-- Main templates from here --}}
        <main class="container">
            @yield('content')
        </main>
         
   
</body>
</html>
