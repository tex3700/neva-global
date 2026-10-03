@extends('layouts.app')

@section('title', 'Клининговая компания — Главная')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h2 class="subheading">Доверьте уборку профессионалам</h2>
        <h1 class="mb-4">Мы возьмём на себя всю грязную работу, чтобы вы отдыхали.</h1>
        <p><a href="{{ route('services') }}" class="btn btn-primary mr-md-4 py-2 px-4">Узнать больше <span class="ion-ios-arrow-forward"></span></a></p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-center">
      <div class="col-md-12">
        <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
          <form action="#" class="appointment w-100">
            <div class="row justify-content-center">
              <div class="col-12 col-md d-flex align-items-center pt-4 pt-md-0">
                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                  <label for="name">Имя</label>
                  <input type="text" class="form-control" placeholder="Ваше имя">
                </div>
              </div>
              <div class="col-12 col-md d-flex align-items-center">
                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                  <label for="phone">Номер телефона</label>
                  <input type="text" class="form-control" placeholder="Номер телефона">
                </div>
              </div>
              <div class="col-12 col-md d-flex align-items-center">
                <div class="form-group py-md-4 py-2 px-4 px-md-0">
                  <label for="service">Выберите услугу</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Выберите услугу</option>
                        <option value="">Уборка офиса</option>
                        <option value="">Чистка бассейна</option>
                        <option value="">Чистка ковров</option>
                        <option value="">Уборка кухни</option>
                        <option value="">Уборка сада</option>
                        <option value="">Мытьё окон</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md d-flex align-items-center pb-4 pb-md-0">
                  <span>Отправьте нам заявку и мы свяжемся с Вами в самое ближайшее время</span>
                <!--<div class="form-group py-md-4 py-2 px-4 px-md-0">
                  <label for="cleaner">Выберите специалиста</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Выберите специалиста</option>
                        <option value="">Иван Петров</option>
                        <option value="">Мария Сидорова</option>
                        <option value="">Алексей Козлов</option>
                        <option value="">Елена Новикова</option>
                      </select>
                    </div>
                  </div>
                </div>-->
              </div>
              <div class="col-12 col-md d-flex align-items-center align-items-stretch">
                <div class="form-group py-md-4 py-2 px-4 px-md-0 d-flex align-items-stretch bg-primary">
                  <input type="submit" value="Записаться на уборку" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.welcome_cleaning')

@include('partials.our_services')

@include('partials.our_team')

<!--@include('partials.testimonials')-->

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Наши проекты</span>
        <!--<h2>Мы выполнили множество клининговых проектов</h2>-->
          <h2>Объекты на которых мы сейчас осуществляем деятельность</h2>
      </div>
    </div>
    <div class="row">
      @foreach($works as $w)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="work img d-flex align-items-center" style="background-image: url('{{ asset('storage/work/'.$w['image']) }}');">
          <a href="{{ asset('storage/work/'.$w['image']) }}" class="icon image-popup d-flex justify-content-center align-items-center" data-title="{{ $w['title'] }}" title="{{ $w['title'] }}" aria-label="Открыть проект: {{ $w['title'] }}">
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
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Новости и блог</span>
        <h2>Последние новости</h2>
      </div>
    </div>
    <div class="row d-flex">
      @foreach($latestPosts as $b)
      <div class="col-md-6 col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{ /*route('blog.single')*/ }}" class="block-20 rounded" style="background-image: url('{{ asset('images/'.$b['image']) }}');"></a>
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
  </div>
</section>

@endsection
