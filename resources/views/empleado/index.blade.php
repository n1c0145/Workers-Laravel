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
<td>{{ $empleado->Foto }}</td>
<td>{{ $empleado->Nombre }}</td>
<td>{{ $empleado->Apellido }}</td>
<td>{{ $empleado->Correo }}</td>
<td>Editar y Borrar</td>
    </tr>
    @endforeach
</tbody> 

</table>