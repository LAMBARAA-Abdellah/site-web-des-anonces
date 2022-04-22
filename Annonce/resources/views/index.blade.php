{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')

<div class="background">
{{-- <img src="./img/imga.png" alt="" srcset=""> --}}

<div class="bienvenu">
    <h1> Bienvenue Chez <span class="spantitle">Electronique</span> <br>
        acheter et vender votre matérial </h1>
        <div class="bt">
            <a href="/login">
            <button class="log">
                Login
            </button>
        </a>
        <a href="register">

        
            <button class="log">
                registre
            </button>
        </a>
        </div>
</div>



</div>

@endsection
