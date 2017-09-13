<div class="form-group">
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Intoduzca el título del texto" value="{{ $acordion->nombre or old('nombre') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del texto" value="{{ $acordion->descripcion or old('descripcion') }}">
</div>
