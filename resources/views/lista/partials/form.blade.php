<div class="form-group">
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Intoduzca el título del lista" value="{{ $lista->nombre or old('nombre') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del lista" value="{{ $lista->descripcion or old('descripcion') }}">
</div>
