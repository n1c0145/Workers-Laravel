<h1>{{$modo}} Datos</h1>
@if(count($errors)>0)

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>

@endforeach
    </ul>

</div>

@endif
<div class="form-group">
    <label for="Nombre" class="form-label">Nombre</label>   
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
</div>
<div><label for="Apellido" class="form-label">Apellido</label>  
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido')}}" id="Apellido">
</div>
<div>
<label for="Correo" class="form-label">Correo</label>   
<input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
</div>
<div>
<label for="Foto" class="form-label">Foto</label>   
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" class="img-thumbnail img-fluid" alt=""> 
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto"> 
</div>
<div>
<input type="submit" class="btn btn-success mt-4" value="{{$modo}} datos">

<a href="{{url('empleado')}}" class="btn btn-primary mt-4">Regresar</a>

</div>