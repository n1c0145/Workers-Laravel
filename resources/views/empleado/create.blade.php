
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
 <!-- token seguridad laravel -->
@csrf
@include('empleado.form',['modo'=>'Crear'])
</form>