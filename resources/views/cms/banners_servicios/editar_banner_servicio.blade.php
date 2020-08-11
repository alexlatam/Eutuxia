@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Banner de Servicio</h1>
    <div class="btn-group mr-2">
      <a href="{{route('banners.service', $servicio)}}" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif

        <div class="banner_card_main">
                <form action="{{route('banner.service.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="service_id" value="{{$servicio}}">
                  <div class="row">
                    <div class="form-group col-6">
                      <h5>Titulo</h5>
                      <input id="title_banner" class="form-control" type="text" value="{{$banner->title}}" name="title">
                    </div>
                    <div class="form-group col-6">
                      <h5>Imagen</h5>
                      <input type="file" class="b_file" name="banner_imagen">
                    </div>
                    <div class="form-group col-12">
                      <h5>Contenido</h5>
                      <textarea class="form-control" id="content_banner" name="subtitle">{{$banner->subtitle}}</textarea>
                    </div>
                    <div class="form-group col-4">
                      <input class="btn btn-success" type="submit" value="Editar Banner">
                    </div>
                  </div>
                </form>
        </div>
    </section>



    @include('cms.banner_template.template')




    <script type="text/javascript">
      let banner_inputs = document.querySelectorAll('.b_file');
      console.log(banner_inputs)

      banner_inputs.forEach(input => {
        input.onchange = function (e){
          let imgContainer = document.getElementById('image_banner');

          console.log(imgContainer)


          let reader = new FileReader();
          reader.readAsDataURL(e.target.files[0]);

          reader.onload = function (){
            imgContainer.src = reader.result;
          }

        }
      });
    </script>

    <script type="text/javascript">
      let titleBanner = document.getElementById('title_banner');
      let contentBanner = document.getElementById('content_banner');

      //template 

      let t_title = document.getElementById('template_title'),
          t_content = document.getElementById('template_content');

      titleBanner.addEventListener('keyup', (e) => {
        t_title.textContent = titleBanner.value;
      });

      contentBanner.addEventListener('keyup', (e) => {
        t_content.textContent = contentBanner.value;
      }); 
    </script>

@endsection
