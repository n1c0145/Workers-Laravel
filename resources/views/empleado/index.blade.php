@extends('layouts.app')

@section('content')
<div class="container">



<a href="{{url('empleado/create')}}" class="btn btn-success mb-3">Registrar nuevo empleado</a>

@if(Session::has('mensaje'))
<div class="alert alert-success">


</div>

{{Session::get('mensaje')}}
@endif

<table class="table table-light">

<thead class="thread-light">
    <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Acciones</th>
    </tr>
</thead>

 <tbody>
    @foreach( $empleados as $empleado )
    <tr>
<td>{{ $empleado->id }}</td>
<td>
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" class="img-thumbnail img-fluid" alt="">   
</td>
<td>{{ $empleado->Nombre }}</td>
<td>{{ $empleado->Apellido }}</td>
<td>{{ $empleado->Correo }}</td>
<td>
    
<a href="{{ url('/empleado/'.$empleado->id.'/edit' )}}" class="btn btn-warning">Editar</a>

    <form action="{{ url('/empleado/'.$empleado->id ) }}" method="post" class="d-inline">
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('Quires borrar')" value="Borrar" class="btn btn-danger">
    </form>
</td>
    </tr>
    @endforeach
</tbody> 

</table>
{!! $empleados->links() !!}

</div>
@endsection