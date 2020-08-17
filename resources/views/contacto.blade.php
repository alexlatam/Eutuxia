@extends('home.main_plantilla')

@section('title')
<title>Contactanos</title>
@endsection

@section('content')
@include('home.plantilla_header')
<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span class="eyebrow mb-1 text-primary">Get in touch with us</span>
        <h2>We’ll get back to you as soon as possible.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form>
          <div class="form-row mb-1">
            <div class="col">
              <input type="text" class="form-control form-control-minimal" name="name"  placeholder="Nombre">
            </div>
            <div class="col">
              <input type="text" class="form-control form-control-minimal" name="email" placeholder="Correo">
            </div>
            <div class="col">
              <input type="text" class="form-control form-control-minimal" name="phone" placeholder="Telefono">
            </div>
          </div>
          <div class="form-row mb-1">
            <div class="col">
              <textarea class="form-control form-control-minimal" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Tu mensaje"></textarea>
            </div>
          </div>
          <div class="form-row mt-3">
            <div class="col">
              <button class="btn btn-primary px-5">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection