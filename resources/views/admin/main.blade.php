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
          <div class="col-md-6">
            <div class="block">
              <img src="img/img5.jpg" alt="" class="img-spacing thumbnail">
              <h1>Quisque a lectus. Donec consectetuer ligua </h1>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. lentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin  laoreet viverra.
              </p>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.
              </p>
              <a href="#" class="btn">more</a>
            </div>            
          </div>
          <div class="col-md-6">
            <div class="block">
              <img src="img/img6.jpg" alt="" class="img-spacing thumbnail">
              <h1>Sed adipiscing ornare risus Morbi est est</h1>
              <p>Cupsim  ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. lentesque aliquet nibh nec urna.In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula     sollicitudi.</p>
              <p>Vivamus ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.</p>
              <a href="#" class="btn">more</a>
            </div>            
          </div>
        </div>
      </div> 
<!-- Inicio del blog2 -->