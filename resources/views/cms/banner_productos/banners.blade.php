@extends('cms.index')


@section('content')
<section>

  @if(session('message'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('message')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Nombre producto</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="#" type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modalCategoria">Agregar banner</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Imagen</th>
          <th>titulo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($banners as $banner)
          <tr>
            <td>{{$banner->imagen}}</td>
            <td>{{$banner->title}}</td>
            <td class="d-flex ">
              <button type="button" id="" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalCategoriaEditar">Editar</button>
              <form action="/cms/membresia/delete" method="POST">
                @csrf
                <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-success">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

@endsection
