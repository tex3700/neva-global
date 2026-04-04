@extends('layouts.app')

@section('title', 'Статья блога — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{ route('blog') }}">Блог <i class="fa fa-chevron-right"></i></a></span> <span>Статья <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Блог</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <p><img src="{{ asset('images/image_1.jpg') }}" alt="" class="img-fluid"></p>
        <h2 class="mb-3">10 советов по уходу за окнами в вашем доме</h2>
        <p>Чистые окна — это не только красиво, но и важно для здоровья. Грязные стёкла пропускают меньше света, что негативно сказывается на настроении и самочувствии. В этой статье мы расскажем, как правильно ухаживать за окнами и поддерживать их в идеальном состоянии.</p>
        <p>Профессиональные клинеры рекомендуют мыть окна не реже двух раз в год — весной и осенью. Однако если вы живёте в городе с высокой запылённостью, делать это стоит чаще. Используйте специальные средства для стёкол и микрофибровые тряпки — они не оставляют разводов.</p>
        <h2 class="mb-3 mt-5">#2. Выбор правильных средств для уборки</h2>
        <p>Современный рынок предлагает огромное количество чистящих средств. Важно выбирать экологически безопасные продукты, которые не вредят здоровью вашей семьи и окружающей среде. Наши специалисты используют только сертифицированные средства.</p>
        <p><img src="{{ asset('images/image_2.jpg') }}" alt="" class="img-fluid"></p>
        <p>Помните, что правильная уборка — это не только чистота, но и порядок. Начинайте уборку сверху вниз: сначала протирайте пыль с полок и мебели, затем мойте полы. Так вы избежите повторного загрязнения уже убранных поверхностей.</p>

        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Уборка</a>
            <a href="#" class="tag-cloud-link">Советы</a>
            <a href="#" class="tag-cloud-link">Окна</a>
            <a href="#" class="tag-cloud-link">Чистота</a>
          </div>
        </div>

        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="{{ asset('images/person_1.jpg') }}" alt="Фото автора" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>Александр Иванов</h3>
            <p>Эксперт в области клининга с 15-летним опытом. Специализируется на профессиональной уборке жилых и коммерческих помещений. Автор многочисленных статей о чистоте и порядке.</p>
          </div>
        </div>

        <div class="pt-5 mt-5">
          <h3 class="mb-5">6 комментариев</h3>
          <ul class="comment-list">
            @foreach($comments as $comment)
            <li class="comment">
              <div class="vcard bio">
                <img src="{{ asset('images/person_1.jpg') }}" alt="Фото">
              </div>
              <div class="comment-body">
                <h3>{{ $comment[0] }}</h3>
                <div class="meta">24 февраля 2020 в 14:21</div>
                <p>{{ $comment[1] }}</p>
                <p><a href="#" class="reply">Ответить</a></p>
              </div>
            </li>
            @endforeach
          </ul>

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Оставить комментарий</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Имя *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Сайт</label>
                <input type="url" class="form-control" id="website">
              </div>
              <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Отправить комментарий" class="btn py-3 px-4 btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Введите ключевое слово">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Услуги</h3>
            @foreach($categories as $cat)
            <li><a href="#">{{ $cat }} <span class="fa fa-chevron-right"></span></a></li>
            @endforeach
          </div>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Последние статьи</h3>
          @foreach($recentPosts as $rb)
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{ asset('images/'.$rb['image']) }});"></a>
            <div class="text">
              <h3 class="heading"><a href="#">{{ $rb['title'] }}</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> 05 марта 2020</a></div>
                <div><a href="#"><span class="icon-person"></span> Редакция</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Теги</h3>
          <div class="tagcloud">
            @foreach($tags as $tag)
            <a href="#" class="tag-cloud-link">{{ $tag }}</a>
            @endforeach
          </div>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>О блоге</h3>
          <p>Наш блог — это полезные советы и профессиональные рекомендации по уборке и поддержанию чистоты в доме и офисе от экспертов клининговой компании.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
