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
                <div class="panel-heading"><h2 align="center"><b>Módulo para crear fichas miniaturas</b></h2></div>
                <div class="panel-body">
					<a href="{{ url('/thumbnail/create') }}" class="btn btn-primary">Crear Thumbnail</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th width="15%">IMAGEN</th>
                    		<th>NOMBRE</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="10%">ACCIONES</th>
                    	</tr>
						@foreach($thumbnail as $thumbnail)
							<tr>
								<td>{{ $thumbnail->id}}</td>
								<td><img src="{{ asset('imagenCursos/'.$thumbnail->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<td>{{ $thumbnail->nombre }}</td>
								<td>{{ $thumbnail->descripcion }}</td>
								<td>
									<a href="{{ url('/thumbnail/' . $thumbnail->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit">Editar</i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-thumbnail-form').submit();">
										<i class="fa fa-trash">Eliminar</i>
									</a>
									<form id="delete-thumbnail-form" action="{{ url('/thumbnail/'.$thumbnail->id) }}" method="post">
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