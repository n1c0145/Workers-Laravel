<h1>Mostrar lista empleados</h1>

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
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">   
</td>
<td>{{ $empleado->Nombre }}</td>
<td>{{ $empleado->Apellido }}</td>
<td>{{ $empleado->Correo }}</td>
<td>
    
<a href="{{ url('/empleado/'.$empleado->id.'/edit' )}}">Editar</a>
    <form action="{{ url('/empleado/'.$empleado->id ) }}" method="post">
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" onclick="return confirm('Quires borrar')" value="Borrar">
    </form>
</td>
    </tr>
    @endforeach
</tbody> 

</table>