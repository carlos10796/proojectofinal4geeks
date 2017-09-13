<!-- Inicio del thumbnail -->
    <div class="container">
	    <div class="featured-block">
	        <!-- Example row of columns -->
	        <div class="row">
		        @foreach($thumbnail3 as $thumbnail)
		         	<div class="col-md-3">
			            <div class="block">
			            	<div class="thumbnail">
			              <img src="{{ asset('imagenCursos/'. $thumbnail->imagen) }}" alt="" class="img-responsive">
				              <div class="caption">
					                <h1>{{ $thumbnail->nombre }}</h1>
					                <p>{{ $thumbnail->descripcion }}</p>
					                <a class="btn" href="#">more</a>
				              </div>
			              	</div>
			            </div>
		            </div>
		        @endforeach
	        </div> 
	        <div class="ruler"></div>  
	    </div>
    </div>
<!-- Fin del thumbnail -->
