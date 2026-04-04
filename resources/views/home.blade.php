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
                <div class="form-group py-md-4 py-2 px-4 px-md-0">
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
                </div>
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
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Услуги</span>
        <h2>Как мы работаем</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-workplace"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Уборка офиса</h3>
            <p>Профессиональная уборка офисных помещений любой площади с использованием современного оборудования.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-pool"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Чистка бассейна</h3>
            <p>Профессиональная чистка и дезинфекция бассейнов. Поддерживаем идеальную чистоту воды и стен.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-rug"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Чистка ковров</h3>
            <p>Глубокая чистка ковров и ковровых покрытий. Удаляем пятна, пыль и аллергены эффективно.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-kitchen"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Уборка кухни</h3>
            <p>Тщательная уборка кухни: плита, духовка, холодильник, шкафы и все поверхности до блеска.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-garden"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Уборка сада</h3>
            <p>Уборка территории, вывоз мусора, уход за газоном и садовыми дорожками круглый год.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 services ftco-animate">
        <div class="d-block d-flex">
          <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-balcony"></span></div>
          <div class="media-body pl-3">
            <h3 class="heading">Мытьё окон</h3>
            <p>Профессиональное мытьё окон любой сложности: от квартир до высотных зданий.</p>
            <p><a href="#" class="btn-custom">Подробнее</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt">
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

<section class="ftco-section testimony-section ftco-bg-dark">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
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

<section class="ftco-section ftco-no-pb">
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
  </div>
</section>

@endsection
