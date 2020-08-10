@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Banner de Producto</h1>
    <div class="btn-group mr-2">
      <a href="#" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif

    <div class="banner_card_main">
        <div class="row">
          <div class="col-5">
            <form action="{{route('banner.product.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <h5>Titulo</h5>
                <input class="form-control" type="text" name="title" value="{{$banner->title}}">
              </div>
              <div class="form-group">
                <h5>Contenido</h5>
                <textarea class="form-control" name="subtitle">{{$banner->subtitle}}</textarea>
              </div>
              <div class="form-group">
                <h5>Productos</h5>
                <select class="form-control" name="product_id">
                  @foreach($productos as $producto)
                    <option value="{{$producto->id}}" <?php if($banner->product_id == $producto->id) echo 'selected' ?> >{{$producto->product}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <h5>Imagen</h5>
                <input type="file" class="b_file" name="banner_imagen">
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Crear Banner">
              </div>
            </form>
          </div>
          <div class="col-7">
            <img src="{{asset('/storage/'. $banner->imagen)}}" style="max-width: 610px; height: 400px; object-fit: cover;" id="imagen_banner">
          </div>
        </div>
    </div>
</section>
<script type="text/javascript">
  let banner_inputs = document.querySelectorAll('.b_file');
  console.log(banner_inputs)

  banner_inputs.forEach(input => {
    input.onchange = function (e){
      let imgContainer = imagen_banner;


      let reader = new FileReader();
      reader.readAsDataURL(e.target.files[0]);

      reader.onload = function (){
        imgContainer.src = reader.result;
      }

    }
  });
</script>


@endsection
