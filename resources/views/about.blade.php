@extends('layouts.app')

@section('title', 'О нас — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>О нас <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">О нас</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-6 d-flex">
        <div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url({{ asset('images/about.jpg') }});">
          <div class="time-open-wrap">
            <div class="desc p-4">
              <h2>Часы работы</h2>
              <div class="opening-hours">
                <h4>Рабочие дни:</h4>
                <p class="pl-3">
                  <span><strong>Понедельник – Пятница:</strong> с 9:00 до 20:00</span>
                  <span><strong>Суббота:</strong> с 9:00 до 17:00</span>
                </p>
                <h4>Выходные:</h4>
                <p class="pl-3">
                  <span>Все воскресенья</span>
                  <span>Официальные праздники</span>
                </p>
              </div>
            </div>
            <div class="desc p-4 bg-secondary">
              <h3 class="heading">Экстренный вызов</h3>
              <span class="phone">+7 (495) 999-00-11</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 pl-md-5 pt-md-5">
        <div class="row justify-content-start py-5">
          <div class="col-md-12 heading-section ftco-animate">
            <span class="subheading">Добро пожаловать в Клининговую компанию</span>
            <h2 class="mb-4">Сделаем ваш дом чище и свежее</h2>
            <p>Мы — команда профессионалов с многолетним опытом в сфере клининга. Используем только экологически чистые средства и современное оборудование. Ваш комфорт и чистота вашего дома — наша главная цель. Доверьте уборку нам и наслаждайтесь свободным временем.</p>
          </div>
        </div>
        <div class="row ftco-counter py-5" id="section-counter">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text"><strong class="number" data-number="45">0</strong></div>
              <div class="text"><span>Лет <br>опыта</span></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text"><strong class="number" data-number="2342">0</strong></div>
              <div class="text"><span>Довольных <br>клиентов</span></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text"><strong class="number" data-number="30">0</strong></div>
              <div class="text"><span>Убранных <br>объектов</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
        <div class="heading-section ftco-animate text-center text-lg-left">
          <span class="subheading">Команда и персонал</span>
          <h2>Наша команда</h2>
          <p>Наши специалисты — опытные профессионалы, прошедшие специальное обучение и сертификацию.</p>
          <p><a href="#" class="btn btn-secondary">Весь персонал</a></p>
        </div>
      </div>
      @foreach($staff as $member)
      <div class="col-md-4 col-lg-3 ftco-animate d-flex">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url({{ asset('images/'.$member['image']) }});"></div>
          </div>
          <div class="text pt-3 px-3 pb-4 text-center">
            <h3>{{ $member['name'] }}</h3>
            <span class="position mb-2">{{ $member['position'] }}</span>
            <div class="faded">
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Отзывы</span>
        <h2>Довольные клиенты</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          @foreach($testimonials as $t)
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
              <div class="text">
                <div class="d-flex align-items-center mb-4">
                  <div class="user-img" style="background-image: url({{ asset('images/'.$t['image']) }})"></div>
                  <div class="pl-3">
                    <p class="name">{{ $t['name'] }}</p>
                    <span class="position">{{ $t['position'] }}</span>
                  </div>
                </div>
                <p class="mb-1">Отличная работа! Команда пришла вовремя, убрала всё до блеска. Очень довольна результатом — буду обращаться снова.</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2>Вместе мы откроем новые горизонты чистоты</h2>
        <a href="" class="icon-video d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></a>
      </div>
    </div>
  </div>
</section>

@endsection
