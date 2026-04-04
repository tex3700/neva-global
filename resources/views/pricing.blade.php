@extends('layouts.app')

@section('title', 'Цены — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>Цены <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Цены</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading mb-3">Цены и тарифы</span>
        <h2>Выберите подходящий тариф</h2>
      </div>
    </div>
    <div class="row">
      @foreach($plans as $p)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="block-7 {{ $p['active'] ? 'active' : '' }}">
          <div class="text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa {{ $p['icon'] }}"></span></div>
            <h4 class="heading-2">{{ $p['title'] }}</h4>
            <span class="price"><sup>₽</sup> <span class="number">{{ $p['price'] }}</span></span>
            <ul class="pricing-text mb-5">
              <li><span class="fa fa-check mr-2"></span>Уборка спален</li>
              <li><span class="fa fa-check mr-2"></span>Пылесосение</li>
              <li><span class="fa fa-check mr-2"></span>Уборка ванной</li>
              <li><span class="fa fa-check mr-2"></span>Чистка зеркал</li>
              <li><span class="fa fa-check mr-2"></span>Уборка гостиной</li>
            </ul>
            <a href="#" class="btn btn-primary px-4 py-3">Заказать</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
