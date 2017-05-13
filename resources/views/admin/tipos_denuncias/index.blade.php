 @extends('admin.template.main')
@section('title','Listar tipos de denuncia')
@section('nombre','Listar tipos de denuncia')
 

@section('content')


<a href="{{route('admin.tipos_denuncias.create')}}" class="">Registrar Tipo de Denuncia</a><hr>
<table class="">
<thead>
	<th>Id</th>
	<th>Tipo de Denuncia</th>
	<th>Accion</th>
</thead>
<tbody>
	@foreach($tipos_denuncias as $tipo_denuncia)
		<tr>
			<td>{{$tipo_denuncia->id}}</td>
			<td>{{$tipo_denuncia->descripcion}}</td>
			
			<td>

				<a href="{{route('admin.tipos_denuncias.destroy',$tipo_denuncia->id)}}" onClick="return confirm('¿seguro desea eliminar a {{$tipo_denuncia->descripcion}}')" class="">eliminar</a>
				<a href="{{route('admin.tipos_denuncias.edit',$tipo_denuncia->id)}}" class="">editar</a>
			</td>
		</tr>


	@endforeach
</tbody>


</table>
{!!$users->render()!!}

@endsection