

<a href="{{url('/superheroes/create')}}"> Agregar nuevo empleado</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($superheroes as $superheroes) 
            <tr>
             <td>{{$superheroes->id}}</td>
             <td>
                <img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroes->foto)}}"/>
             {{$superheroes->foto}}
            
            
            </td>
             <td>{{$superheroes->nombre_real}}</td>
             <td>{{$superheroes->nombre_superheroe}}</td>
             <td>{{$superheroes->foto}}</td>
             <td>{{$superheroes->informacion_adicional}}</td>
             <td>

             <a href="{{url('/superheroes/'.$superheroes->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/superheroes/'.$superheroes->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>