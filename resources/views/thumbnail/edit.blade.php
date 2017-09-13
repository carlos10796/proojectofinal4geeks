@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Curso</div>
                <div class="panel-body">
                    <form action="{{ url('/thumbnail/'.$thumbnail->id) }}" class="form-vertical" method="post" enctype="multipart/form-data">
                        {{ method_field('PUT')}}
                        {{ csrf_field() }}
                        @include('thumbnail.partials.form')
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