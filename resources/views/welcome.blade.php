

<!-- Inicio de la Cabecera -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>All Template Needs</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
     
	 <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
  </head>

  <body>
    <div class="header-wrapper">
      <div class="site-name">
      @foreach($title1 as $title)
	        <h1>{{ $title->nombre }}</h1>
	        <h2>{{ $title->descripcion }}</h2>
	    @endforeach
      </div>
    </div>
    <div class="menu">
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Solutions</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('login') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">
                                            Administrator
                                        </a>

                                        <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
      <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Services</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
    </div>
<!-- Fin de la Cabecera -->


<!-- Inicio del Carousel -->
  <section class="slider" id="home">
    <div class="container-fluid">
      <div class="row">
          <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="header-backup"></div>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
          @foreach ($carousel2 as $index => $carousel))
          <div class="item @if($index == 0) active @endif">
            <img src="{{ asset('imagenCursos/'. $carousel->imagen) }}" alt="" class="img-responsive">
                      <div class="carousel-caption">
                        <h1>{{ $carousel->nombre }}</h1>
                        <p>{{ $carousel->descripcion }}</p>
                      </div>
                  </div> 
          @endforeach
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    </div>
  </section><!-- end of slider section -->
<!-- Fin del Carousel -->



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


<!-- Inicio del blog -->
        <div class="container">
          <div class="featured-item">
              <div class="col-md-6">
                  <div class="block">
                    <div class="block-title">
                      <h1>Cras ornare tristi</h1>
                      <h2>Vivamus vestibulum nulla nec ante  pellentesque</h2>
                    </div>
                    <ul>
                      @foreach($thumbnail3 as $thumbnail)
                        <li class="col-md-6"> 
                          <div class="user-info">
                            <i class="fw-icon-user icon"></i>
                            <h1>{{ $thumbnail->nombre }} </h1>    
                            <p>{{ $thumbnail->descripcion }}</p>
                         </div>
                       </li>
                      @endforeach
                    </ul>
                  </div>
              </div>


              <div class="col-md-6">
                <div class="block">
                  <div class="block-title">
                      <h1>Aliquam tincidunt</h1>
                      <h2>Integer vitae libero ac risus egestas placerat</h2>
                  </div>
                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                          <div class="panel-heading accordion-caret">
                            <h4 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Donec quis dui at dolor tempor
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra ultricies in, diam. Sed arcu. Cras consequat.</div>
                          </div>
                        </div>

                          <div class="panel panel-default">
                            <div class="panel-heading accordion-caret">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                  Vivamus molestie gravida turpis
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra ultricies in, diam. Sed arcu. Cras consequat.</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading accordion-caret">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                  Fusce lobortis lorem at ipsum semper 
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra ultricies in, diam. Sed arcu. Cras consequat.</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading accordion-caret">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                  Nam convallis pellentesque nisl
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                              <div class="panel-body">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra ultricies in, diam. Sed arcu. Cras consequat.</div>
                            </div>
                          </div>

                    </div>
                </div>
              </div>

          </div>
          <div class="ruler"></div>
        </div>
<!-- Fin del blog -->


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


<!-- Inicio del footer -->
      <div class="footer-wrapper">
        <div class="site-content">
      <div class="container">
        <div class="row">
        
          <div class="block col-md-2 col-sm-6">
            <h1>Vitae lin</h1>
            <ul>
              <li><a href="#">Phasellus ultrices</a></li>
              <li><a href="#">Sed adipiscing lipsum</a></li>
              <li><a href="#">Nulla sed leoniton</a></li>
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>Luctrus</h1>
            <ul>
              <li><a href="#">Lorem ipsum</a></li>
              <li><a href="#">Donec nec justo</a></li>
              <li><a href="#">Morbi in se</a></li>
            </ul>
          </div>
          <div class="block col-md-2 col-sm-6">
            <h1>consetu</h1>
            <ul>
              <li><a href="#">Quisque a lectus</a></li>
              <li><a href="#">Donec consecte</a></li>
              <li><a href="#">Nulla sed leoniton</a></li>
            </ul>
          </div>
          <div class="block col-md-3">
            <h1>Praesent dapibus, neque id cursus faucibus</h1>
            <div class="input-group">
                <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                <span class="input-group-btn">
              <input type="submit" class="button btn btn-default" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                </span>
            </div> 
          </div>
          <div class="block col-md-3">
            <h1> Aliquam quam lectusfacilisis auctor</h1>
            <ul class="social">
              <li><a href="#"><i class="fw-icon-twitter"></i></a></li>
              <li><a href="#"><i class="fw-icon-facebook"></i></a></li>
              <li><a href="#"><i class="fw-icon-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
      <div class="copy-rights">
      <div class="container">
        <div class="row">
    
            <div class="col-md-6">
              Copyright(c) website name. Designed by: <a href="http://www.alltemplateneeds.com"> www.alltemplateneeds.com</a>
            </div>
            <div class="col-md-6">
              Images from: <a href="http://www.wallpaperswide.com">http://wallpaperswide.com</a> / <a href="http://www.wallcoo.net"> www.wallcoo.net</a>
            </div>
            
          </div>
        </div>
      </div>
      </div>
<!-- Fin del footer -->
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
  </body>
</html>
