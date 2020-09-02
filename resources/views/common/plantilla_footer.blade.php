
<style>
  .band2{
    background-image:url('{{asset('imagen/oxas/curva_negra.svg')}}');
    background-position-y: bottom;
    bottom: -3px;
  }
  
  </style>
<section>
  <div class="image band2"></div>
</section>
<footer class="tab-content" id="component-4">
  <div class="tab-pane show active" id="component-4-2" role="tabpanel" aria-labelledby="component-4-2">
    <div class="component-example component-example-fit">
      <footer class="bg-dark text-white">
        
        <div class="separator-bottom py-5">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-6">
                <h4 class="">Llevamos tu empresa al próximo nivel</h4>
                <p class="text_footer" style="font-size:18px;">
                  Somos una empresa enfocada en agilizar la digitalización de los procesos
                  de otras empresas.
                </p>
              </div>
              <div class="col-md-6 text-md-right">
                <a href="" class="btn btn-with-ico btn-primary">Ver Proyectos<i class="icon-arrow-right2 fs-20"></i></a>
                <a href="" class="btn btn-secondary">Contactanos</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-1">
                <p class="text_footer" style="font-size:18px;">
                  Somos una empresa enfocada en agilizar la digitalizacion de los procesos
                  de otras empresas.
                </p>
                <ul class="socials">
                  <li><a href="" class="icon-facebook fs-20"></a></li>
                  <li><a href="" class="icon-instagram fs-20"></a></li>
                  <li><a href="" class="icon-twitter fs-20"></a></li>
                  <li><a href="" class="icon-linkedin fs-20"></a></li>
                </ul>
              </div>
            </div>
            <div class="col col-lg-2">
              <ul class="list-group list-group-minimal">
                <h6 class="list-group-item">Productos</h6>
                @foreach($productos->take(4) as $producto)
                <li class="list-group-item"><a href="{{route('product.option', $producto->id)}}">{{$producto->product}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="col col-lg-2">
              <ul class="list-group list-group-minimal">
                <h6 class="list-group-item">Servicios</h6>
                @foreach($servicios->take(4) as $servicio)
                <li class="list-group-item"><a href="{{route('service.option', $servicio)}}">{{$servicio->service}}</a></li>
                @endforeach
              </ul>
            </div>
            {{-- <div class="col col-lg-2">
              <ul class="list-group list-group-minimal">
                <h6 class="list-group-item">Mapa del sitio</h6>
                <li class="list-group-item"><a href="">Inicio</a></li>
                <li class="list-group-item"><a href="">Proyecto</a></li>
                <li class="list-group-item"><a href="">Productos</a></li>
                <li class="list-group-item"><a href="">Servicios</a></li>
                <li class="list-group-item"><a href="">Contacto</a></li>
              </ul>
            </div> --}}
            <div class="col-lg-2 text-lg-right">
              <a href="tel:58-414-344-62-25" class="phone bordered">+584143446225</a>
            </div>
          </div>
          <span class="copyright-text">&copy; <b> Eutuxia Group, C.A. J-50017524-8</b>  -  Todos los derechos reservados 2020.</span>
        </div>
      </footer>
    </div>
  </div>
</footer>

<script src="{{asset('js/plantilla_js/vendor.js')}}"></script>
<script src="{{asset('js/plantilla_js/app.js')}}"></script>