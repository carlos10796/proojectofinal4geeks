<div class="form-group">
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el titulo" value="{{ $title->nombre or old('nombre') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion de la pagina" value="{{ $title->descripcion or old('descripcion') }}">
</div>