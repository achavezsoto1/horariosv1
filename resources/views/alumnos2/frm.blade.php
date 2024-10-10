@extends("plantillas/plantilla2")

@section("contenido1")
@include("alumnos2/tablahtml")
@endsection

@section("contenido2")

<ul>
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
</ul>
@if($accion== 'C')
<h1>Insertando</h1>
<form action="{{route('alumnos.store')}}" method="POST">
@elseif ($accion== 'E')
<h1>Editando</h1>
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
@elseif($accion == "D")
<h1>Para eliminar</h1>
<form action="{{route('alumnos.destroy',$alumno->id)}}" method="post">    
@endif

    @csrf
    <div class="row mb-3">
        <label for="nombre" class="col-sm-3 col-form-label">Nombre :</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}" {{$des}}>
            @error("nombre")
            <p class="text-danger">Error en: {{$message}}</p>    
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno :</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="apellidop" name="apellidop"  value="{{old('apellidop',$alumno->apellidop)}}" {{$des}}>
            @error("apellidop")
            <p class="text-danger">Error en: {{$message}}</p>    
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">E-mail :</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email"  value="{{old('email',$alumno->email)}}" {{$des}}>
            @error("email")
            <p class="text-danger">Error en: {{$message}}</p>    
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
        </div>
    </div>
</form>
@endsection