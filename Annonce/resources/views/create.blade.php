{{-- @extends('layouts.app') --}}
@extends('master.layout')  



@section('title')
welcome
@endsection

@section('content')




<div style="margin-top: 80px" class="cardc">
    <div class="card-header">Create  Product</div>
    <div class="card-body">
        
        <form action="store" method="post">
          {!! csrf_field() !!}
          <input type="text" name="id_utilisateur" value="{{Auth::id()}}" hidden>
          <select name="type" class="form-control">
            <option  value="" selected>Select Type of Post</option>
            <option value="Annonce">Annonce</option>
            <option value="Ordre">Ordre</option>
          </select>
          <label style="margin-top: 7px;">Titre</label></br>
          <input type="text" name="titre" id="name" class="form-control"></br>
          <label>Prix</label></br>
          <input type="text" name="prix" id="name" class="form-control"></br>
          <label>image</label></br>
          <input type="file" name="photo" id="name" class="form-control"></br>
          <label>Address</label></br>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="tel" name="tel" id="mobile" class="form-control"></br>
          <label>Description</label></br>
          <textarea name="Description" class="form-control" maxlength="100"  id="exampleFormControlTextarea1" rows="3"></textarea>
          <input type="submit" value="Enregister" class=""></br>
          
      </form>
     
    </div>
  </div>

@endsection
