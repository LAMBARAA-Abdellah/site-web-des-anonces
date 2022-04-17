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

<div class="all">

        <div class="container">
           <div class="creation  ">
            <h2>cree et partager vos annonce pour cominiquer avec les client </h2>
                <button>
                    Ajouter 
                </button>    
           </div>
           <div class="sous-nav">
                <button>
                    <a href="{{ url('/annonce')  }}"> Annonce</a> 
                </button>     
                <button>
                    <a href="#"> Demande</a> 
                </button>   
           </div>
       
                       
        </div>
        <div class="cards">
            
<div class="card">
    <img src="./img/casque4.png"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>


  <div class="card">
    <img src="./img/tel1.png"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>

  <div class="card">
    <img src="./img/casque2.png"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>


  <div class="card">
    <img src="./img/pc5.jpg"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>


   <div class="card">
    <img src="./img/pc2.jpg"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>



   <div class="card">
    <img src="./img/casque1.png"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>
  
  <div class="card">
    <img src="./img/pc3.jpg"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div> 
  
  <div class="card">
    <img src="./img/tel2.png"    style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>Add to Cart</button></p>
  </div>




        </div>


<div>
  



@endsection
