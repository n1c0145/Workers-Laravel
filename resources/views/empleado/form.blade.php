<div>
    <label for="Nombre">Nombre</label>   
    <input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
</div>
<div><label for="Apellido">Apellido</label>  
<input type="text" name="Apellido" value="{{$empleado->Apellido}}" id="Apellido">
</div>
<div>
<label for="Correo">Correo</label>   
<input type="text" name="Correo" value="{{$empleado->Correo}}" id="Correo">
</div>
<div>
<label for="Foto">Foto</label>   
{{$empleado->Foto}} 
<input type="file" name="Foto" value="" id="Foto"> 
</div>
<div>
<input type="submit" value="Guardar datos">
</div>