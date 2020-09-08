@extends('common.main_plantilla')

@section('title')
<title>Blog</title>
@endsection

@section('content')
<!-- hero -->
<section class="hero hero-with-header bg-light separator-bottom">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col text-center">
        <h1>Latest Blog Posts</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/inner-pages.html">Inner Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Tiles</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>    
</section>
<!-- / hero -->


<!-- right sidebar -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <ul class="masonry row gutter-2">
          @foreach($articulos as $article)
          <li class="col-md-6">
            <article class="tile">
              <div class="tile-image" style="background-image: url({{asset('storage/'.$article->image)}})"></div>
              <a href="{{route('blog.show', $article->id)}}" class="tile-content">
                <div class="tile-footer">
                  <span class="eyebrow mb-1">{{$article->title}}}</span>
                  <h3>{{$article->description}}</h3>
                </div>
              </a>
            </article>
          </li>
          @endforeach
        </ul>
      </div> 
      <aside class="col-md-4 pl-md-4">
        <div class="widget">
          <span class="widget-title">Categorias</span>
          <div class="list-group list-group-categories">
            @foreach($categorias as $category)
            <a href="" class="list-group-item d-flex justify-content-between align-items-center">
              {{$category->title}}
              <span class="badge">{{$category->articles->count()}}</span>
            </a>
            @endforeach
          </div>
        </div>
        <div class="widget">
          <span class="widget-title">Latest News</span>
          <ul class="feed">
            @foreach($recientes as $reciente)
            <li>
              <a href="{{route('blog.show', $reciente->id)}}" class="feed-item">
                <img src="{{asset('storage/'.$reciente->image)}}" alt="Image">
                <div class="feed-item-content">
                  <h3>{{$reciente->title}}</h3>
                </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="widget">
          <span class="widget-title">Tags</span>
          <div class="tag-cloud">
            <a href="">Design</a>
            <a href="">Development</a>
            <a href="">Travel</a>
            <a href="">Web Design</a>
            <a href="">Marketing</a>
            <a href="">Research</a>
            <a href="">Managment</a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- / right sidebar -->

@endsection