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
                <div class="panel-heading"><h2 align="center"><b>Módulo para título de la página</b></h2></div>
                <div class="panel-body">
					<a href="{{ url('/title/create') }}" class="btn btn-primary">Crear Artículo</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th>NOMBRE</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="10%">ACCIONES</th>
                    	</tr>
						@foreach($title as $title)
							<tr>
								<td>{{ $title->id}}</td>
								<td>{{ $title->nombre }}</td>
								<td>{{ $title->descripcion }}</td>
								<td>
									<a href="{{ url('/title/' . $title->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit">Editar</i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-title-form').submit();">
										<i class="fa fa-trash">Eliminar</i>
									</a>
									<form id="delete-title-form" action="{{ url('/title/'.$title->id) }}" method="post">
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