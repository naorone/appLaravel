@extends('welcome')

@section('content')
    <div class="registro">
     <p class="titulo">REGISTRO NUEVO USUARIO</p>

        {{-- Validacion --}}

        @if(! $errors -> isEmpty())
            <div class="alert">
                <p>ERROR al insertar los datos</p>
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    <form method="POST" action="./home" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre" name="nombre">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            <input type="text" class="form-control" placeholder="Apellido" name="apellido">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="usuario">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">

        </div>

        <button type="submit" class="btn btn-default">Registrarse</button>
</form>
</div>

@stop


