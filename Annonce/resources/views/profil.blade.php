{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')
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
    
    {{-- <div class="sous-nav">

     <a href="/annonces"> 
         <button class="commande">
             Annonce
         </button>
     </a> 

         <a href="/demandes">      
         <button class="commande">
            Demande 
         </button>
     </a>   
    </div> --}}

                
 </div>
    <div style="margin-top: 50px" class="">
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
    
        @foreach ($post as $item)
            
        


                <div class="cardP">
                    <img class="image" src="./img/{{$item->photo}}" >
                    <div onclick="show({{$item->id}})" class="setting">
                       <img src="/img/setting.png"> 
                    </div>
                    
                    <h2>{{$item->titre}}</h2>
                    <h4>Type:{{$item->type}}</h4>
                    <p class="price">{{$item->prix}}$</p>
                    <p class="desc">In rerum aut necessi. In rerum aut necessi.</p>
                    <p><button>Tel:0652086766</button></p>
                    </div>

                    <div id="operation" class="operContent">
                        <h1>What are you want to do</h1>
                        <div class="choix">
                        <a id="upd" href="">Update Your Post</a>
                        <a id="dlt" href="">Delete Your Post</a>
                        </div>
                        <div id="operclose" onclick="hide()">&times;</div>
                        </div>
            
                        @endforeach
                       
    </div>
    <div class="container">
        {{$post->links('master.pagination')}}
    </div>
   
</div>




@endsection

@section('script')
<script>
    function show($id){
        document.getElementById("operation").classList.toggle("show");
        document.getElementById ("upd").href="update/"+$id;
        document.getElementById ("dlt").href="delete/"+$id;
    }
    function hide(){
        document.getElementById("operation").classList.remove("show");
    }
</script>
@endsection
