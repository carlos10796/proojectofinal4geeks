@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Curso</div>
                <div class="panel-body">
					<form action="{{ url('/title') }}" class="form-vertical" method="post" enctype="multipart/form-data">
						{{ method_field('POST') }}
						{{ csrf_field() }}
						@include('title.partials.form')
						<div class="form-group">
							<button type="submit" class="btn btn-primary form-control">
								Guardar
							</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection