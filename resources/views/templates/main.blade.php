<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{config("app.name", 'User Management System')}}</title>
 <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    

{{-- JavaScript --}}
<script src="{{asset('js/app.js')}}" defer></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
          
        <div class="container">
        <a class="navbar-brand" 
        href="#">{{config("app.name", 'User Management System')}}
       </a>
     
 
<div class="d-flex p-3">
@if (Route::has('login'))
    <div class="">
        @auth
            <a href="{{ url('/home') }}" >Home</a>
            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>

            <form  id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                @csrf            
            </form>
        @else
            <a href="{{ route('login') }}" >Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" >Register</a>
            @endif
        @endauth
    </div>
@endif 
</div>
  </div>
 </nav>

 <nav class="navbar navbar-expand-lg p-3">
 <div class="collapse navbar-collapse">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('admin.users.index')}}">User</a>
        </li>
     </ul>
</div>
</div>

</nav>

</div>

    {{-- Main templates from here --}}

        <main class="container">
            @include('partials.alert')
            @yield('content')
        </main>
         
</body>
</html>
