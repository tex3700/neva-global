@extends('layouts.app')

@section('title', 'Блог — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>Блог <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Блог</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      @foreach($posts as $b)
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{ route('blog.single') }}" class="block-20 rounded" style="background-image: url('{{ asset('images/'.$b['image']) }}');"></a>
          <div class="text mt-3 px-4">
            <div class="posted mb-3 d-flex">
              <div class="img author" style="background-image: url({{ asset('images/'.$b['author_image']) }});"></div>
              <div class="desc pl-3">
                <span>Автор: Редакция</span>
                <span>04 марта 2020</span>
              </div>
            </div>
            <h3 class="heading"><a href="#">{{ $b['title'] }}</a></h3>
            <p>Профессиональные советы по уборке и поддержанию чистоты в вашем доме от наших экспертов.</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
