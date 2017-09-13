<!-- Inicio del blog2 -->
      <div class="container">
        <div class="featured-content">
			@foreach($articulo6 as $articulo)
		        <div class="col-md-6">
		            <div class="block">
		              <img src="{{ asset('imagenCursos/'. $articulo->imagen) }}" alt="" class="img-spacing articulo">
		              <h1>{{ $articulo->nombre }}</h1>
			              <p>{{ $articulo->descripcion }}</p>
		              <a href="#" class="btn">more</a>
		            </div>            
		        </div>
			@endforeach
        </div>
      </div> 
<!-- Inicio del blog2 -->