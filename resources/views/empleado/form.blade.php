<h1>{{$modo}} Datos</h1>
<div>
    <label for="Nombre">Nombre</label>   
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
</div>
<div><label for="Apellido">Apellido</label>  
<input type="text" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:''}}" id="Apellido">
</div>
<div>
<label for="Correo">Correo</label>   
<input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
</div>
<div>
<label for="Foto">Foto</label>   
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt=""> 
@endif
<input type="file" name="Foto" value="" id="Foto"> 
</div>
<div>
<input type="submit" value="{{$modo}} datos">

<a href="{{url('empleado')}}">Regresar</a>

</div>