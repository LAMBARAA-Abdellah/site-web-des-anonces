{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')


<div class="all">

        <div class="container">
           <div class="creation  ">
         
            <h2>cree et partager vos annonces et cominiquer avec les client </h2>
            <div>
              
                <button class="ajouter">
                    <a href="/create">
                    Ajouter 
                </a>
                </button>    
           </div>   
            </div>
           
           <div class="sous-nav">

            <a  href="/annonces"> 
                <button style="font-weight: bold" class="commande">
                    Annonce
                </button>
            </a> 

                <a href="/demandes">      
                <button class="commande">
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
            
                
           <?php
        
           ?>
           {{-- {{Auth::id()}}
           
           {{Auth::user()->name}} --}}
           
           
           <div class="cardP">
            <img class="image" alt="photo" src="./img/{{ $pos->photo}}" >
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
