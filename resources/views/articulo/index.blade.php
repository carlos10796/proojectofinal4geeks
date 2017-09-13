@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
            <div class="panel panel-default">
                <div class="panel-heading"><h2 align="center"><b>Módulo para crear artículos</b></h2></div>
                <div class="panel-body">
					<a href="{{ url('/articulo/create') }}" class="btn btn-primary">Crear Artículo</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th width="15%">IMAGEN</th>
                    		<th>NOMBRE</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="10%">ACCIONES</th>
                    	</tr>
						@foreach($articulo as $articulo)
							<tr>
								<td>{{ $articulo->id}}</td>
								<td><img src="{{ asset('imagenCursos/'.$articulo->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<td>{{ $articulo->nombre }}</td>
								<td>{{ $articulo->descripcion }}</td>
								<td>
									<a href="{{ url('/articulo/' . $articulo->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit">Editar</i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-articulo-form').submit();">
										<i class="fa fa-trash">Eliminar</i>
									</a>
									<form id="delete-articulo-form" action="{{ url('/articulo/'.$articulo->id) }}" method="post">
										{{ method_field('DELETE')}}
										{{ csrf_field() }}						
									</form>
								</td>
							</tr>
						@endforeach
						<tr>
							<td colspan="8"></td>
						</tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection