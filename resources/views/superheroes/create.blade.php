<label for="Nombre">Nombre Real</label>
<input type="text" name="nombre_real" value="{{isset($superheroes->nombre_real)?$superheroes->nombre_real:' '}}" id="nombre_real">
<br>
<label for="Nombre_superheroe">Nombre Superheroe</label>
<input type="text" name="nombre_superheroe" value="{{isset($superheroes->nombre_superheroe)?$superheroes->nombre_superheroe:' '}}" id="nombre_superheroe">
<br>
<label for="informacion_adicional">Información adicional</label>
<input type="text" name="informacion_adicional" value="{{isset($superheroes->informacion_adicional)?$superheroes->informacion_adicional:' '}}" id="informacion_adicional">
<br>
<label for="Foto">Foto</label>
@if(isset($superheroes->foto))
<img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroes->Foto)}}" />
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="Guardar datos">
<br>
<a href="{{url('/superheroes/')}}"> REGRESAR </a>