@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-9 offset-2">
    <div class="card">
        <div class="card-header bg-danger text-center">
            <b style="font-size: 20px;">Mi Perfil</b>
        </div>
        <div class="card-body">
        <form action="{{route('UpdatePerfil',$id)}}" enctype="multipart/form-data" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
          <label for="nombre">Usuario: </label>
          <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre de usuario" value="{{ Auth::user()->name }}">
          </div>
          <div class="form-group">
            <label for="nombre">Correo: </label>
            <input type="text" class="form-control" name="correo" placeholder="Ingrese su correo" value="{{ Auth::user()->email }}">
          </div>
          <div class="form-group">
          <label for="nombre">Foto de perfil: </label>
          <img class="ml-3 mb-2" src="img/avatars/{{Auth::user()->avatar}}" height="150px" width="150px" alt="Foto de perfil">
          <input type="file" class="form-control" accept="image/jpeg, .png, .jpg, image/gif" name="foto" id="foto">
          </div>
          <div class="form-group">
           <button type="submit" class="btn btn-md col-md-3 offset-5 btn-success">Guardar Cambios</button>
          </div>
        </form>
         </div>
    </div>




    </div>
</div>

@endsection
