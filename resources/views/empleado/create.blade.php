Creacion form
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
 <!-- token seguridad laravel -->
@csrf
<div>
    <label for="Nombre">Nombre</label>   
    <input type="text" name="Nombre" id="Nombre">
</div>
<div><label for="Apellido">Apellido</label>  
<input type="text" name="Apellido" id="Apellido">
</div>
<div>
<label for="Correo">Correo</label>   
<input type="text" name="Correo" id="Correo">
</div>
<div>
<label for="Foto">Foto</label>    
<input type="file" name="Foto" id="Foto"> 
</div>
<div>
<input type="submit" value="Guardar datos">
</div>

</form>