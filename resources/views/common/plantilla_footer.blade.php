<footer class="tab-content" id="component-4">
  <div class="tab-pane show active" id="component-4-2" role="tabpanel" aria-labelledby="component-4-2">

    <div class="component-example component-example-fit">
      <footer class="bg-dark text-white">
        <div class="separator-bottom py-5">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-6">
                <p class="lead">Llevamos tu empresa al próximo nivel</p>
              </div>
              <div class="col-md-6 text-md-right">
                <ul class="socials">
                  <li><a href="" class="icon-facebook fs-20"></a></li>
                  <li><a href="" class="icon-instagram fs-20"></a></li>
                  <li><a href="" class="icon-twitter fs-20"></a></li>
                  <li><a href="" class="icon-linkedin fs-20"></a></li>
                </ul>
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
              </div>
              <span class="copyright-text">&copy; 2020 Eutuxia Group, C.A. J- Todos los derechos reservados.</span>
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
            <div class="col-lg-4 text-lg-right">
              <a href="tel:372-567-89-89" class="phone bordered">+372 567 89 89</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</footer>