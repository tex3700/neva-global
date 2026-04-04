@extends('layouts.app')

@section('title', 'Портфолио — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>Портфолио <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Портфолио</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Наши проекты</span>
        <h2>Мы выполнили множество клининговых проектов</h2>
      </div>
    </div>
    <div class="row">
      @foreach($works as $w)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="work img d-flex align-items-center" style="background-image: url({{ asset('images/'.$w['image']) }});">
          <a href="{{ asset('images/'.$w['image']) }}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4 text-center pt-5 mt-5">
            <div class="text w-100 mb-3 mt-4">
              <h2><a href="#">{{ $w['title'] }}</a></h2>
            </div>
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
