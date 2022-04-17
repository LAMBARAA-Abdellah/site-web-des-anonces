{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')

<nav id="ps1" class="  navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a id="logo" class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            Electronique
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <div class="navadd">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')  }}">{{ __('index') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')  }}">{{ __('Contact us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')  }}">{{ __('Apropos') }}</a>
                    </li>

                </div>
               
                {{-- @guest
                <div class="navauth">
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                </div>
                   
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest --}}
            </ul>
        </div>
    </div>
</nav>




<div style="margin-top: 80px" class="cardc">
    <div class="card-header">Update  Product</div>
    <div class="card-body">
        
        <form action="{{ url('contact') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>image</label></br>
          <input type="file" name="name" id="name" class="form-control"></br>
          <label>Address</label></br>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="tel" name="mobile" id="mobile" class="form-control"></br>
          <label>Description</label></br>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <input type="submit" value="Update" class=""></br>
          
      </form>
     
    </div>
  </div>

@endsection
