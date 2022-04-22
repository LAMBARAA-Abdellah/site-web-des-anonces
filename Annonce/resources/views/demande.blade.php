{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')
{{-- <nav id="ps1" class="  navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a id="logo" class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            {{-- Electronique
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

                </div> --}}
               
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
            {{-- </ul>
        </div>
    </div>
</nav>  --}}

<div class="all">

    <div class="container">
       <div class="creation  ">
        <h2>cree et partager vos demmande et cominiquer avec les client </h2>
        <a href="/create">
            <button class="ajouter">Ajouter 
            </button>    
        </a>   
       </div>
       <div class="sous-nav">
        <a  href="annonces"> 
            <button class="commande">
               Annonce
            </button> 
        </a>     
        <a href="demandes">
            <button style="font-weight: bold" class="commande">
                 Demande
            </button>  
            </a>  
       </div>
   
                   
    </div>
    <div class="search">
        <div class="row m-2">
            <form class="search" action="" method="get">
            <div class="form-group">
               
                        <input type="search" name="search" class="form-control" placeholder="Rechercher une annonce">
                       
            </div>      
            <div>
                <button  type="submit" class=" btn btn-warning">                                
                    Search
                </button>
            </div>   
                       
                </form>
        </div>
</div>
    <div class="cards">
       
        @foreach ($post as $pos)
       
<div class="cardP">
<img class="image" src="./img/{{ $pos->photo}}" >
<h2>{{ $pos->titre}}</h2>
<h5>par:{{ $pos->name}}</h5>

<p class="price">{{ $pos->prix}} $</p>
<p class="desc">{{ $pos->Description}}.</p>
<p><button>Tel: {{ $pos->tel}}</button></p>
</div>

@endforeach




    </div>
    <div class="container">
        {{$post->links('master.pagination')}}
      
    </div>

<div>




@endsection
