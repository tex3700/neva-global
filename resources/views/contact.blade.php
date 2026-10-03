@extends('layouts.app')

@section('title', 'Контакты — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>Контакты <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Контакты</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row mb-5">
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-map-marker"></span></div>
                <div class="text"><p><span>Адрес:</span><br> г. Москва, Пресненская наб., д. 8, стр 1 </p></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
                <div class="text"><p><span>Телефоны:</span>
                        <br><a href="tel:+79669738777">+7 (966) 973-87-77</a>
                        <br><a href="tel:+79612462777">+7 (961) 246-27-77</a>
                        <br><a href="tel:+79032671883">+7 (903) 267-18-83</a>
                    </p></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane"></span></div>
                <div class="text"><p><span>Email:</span> <br> <a href="mailto:info@neva-global.ru">info@neva-global.ru</a></p></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-globe"></span></div>
                <div class="text"><p><span>Сайт:</span> <br> <a href="https://neva-global.ru/"> neva-global.ru </a></p></div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-md-7">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4">Напишите нам</h3>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">Ваше сообщение отправлено, спасибо!</div>
                <form method="POST" action="{{ route('contact.send') }}" id="contactForm" name="contactForm" class="contactForm">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="name">Полное имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="label" for="email">Адрес электронной почты</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="subject">Тема</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема сообщения">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="message">Сообщение</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Ваше сообщение"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Отправить сообщение" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
              <div class="info-wrap w-100 p-5 img" style="background-image: url({{ asset('images/about.jpg') }});"></div>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="col-md-12">
        <div id="map" class="map"></div>
      </div>-->
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8 py-4">
        <div class="row">
          <div class="col-md-6 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 24px;">Подпишитесь на нашу рассылку</h2>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="javascript:" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Введите адрес email">
                <input type="submit" value="Подписаться" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
