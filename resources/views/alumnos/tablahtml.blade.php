{{-- @dd($alumnos) --}}

<ul>
    {{-- @foreach ($alumnos as $alumno )
    <li>{{ $alumno->nombre }}</li>
    @endforeach --}}

</ul>

<a href="{{route('alumnos.create')}}" class="btn button btn-primary ">Nvo</a>
<div class="table-responsive-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido P.</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno )
            <tr class="">
                <td scope="row">{{$alumno->id}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidop}}</td>
                <td>{{$alumno->email}}</td>
                <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary ">ED</a></td>
                <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">X</a></td>
                <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary ">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$alumnos->links() }}
</div>