<footer class="footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Клининговая компания</h2>
        <p>Мы предоставляем профессиональные услуги по уборке жилых и коммерческих помещений. Качество, надёжность и забота о каждом клиенте — наши главные принципы.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
          <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Последние новости</h2>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url({{ asset('images/image_1.jpg') }});"></a>
          <div class="text">
            <h3 class="heading"><a href="#">10 советов по уходу за окнами в вашем доме</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> 04 марта 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Редакция</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url({{ asset('images/image_2.jpg') }});"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Как правильно чистить ковры в домашних условиях</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> 04 марта 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Редакция</a></div>
              <div><a href="#"><span class="icon-chat"></span> 12</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
        <h2 class="footer-heading">Быстрые ссылки</h2>
        <ul class="list-unstyled">
          <li><a href="{{ route('home') }}" class="py-1 d-block">Главная</a></li>
          <li><a href="{{ route('about') }}" class="py-1 d-block">О нас</a></li>
          <li><a href="{{ route('services') }}" class="py-1 d-block">Услуги</a></li>
          <li><a href="{{ route('portfolio') }}" class="py-1 d-block">Портфолио</a></li>
          <li><a href="{{ route('blog') }}" class="py-1 d-block">Блог</a></li>
          <li><a href="{{ route('contact') }}" class="py-1 d-block">Контакты</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Есть вопросы?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map-marker"></span><span class="text">г. Москва, ул. Примерная, д. 203, офис 15</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+7 (495) 123-45-67</span></a></li>
            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@neva-global.ru</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <p class="copyright">Copyright &copy; {{ date('Y') }} Все права защищены | Шаблон создан с <i class="fa fa-heart" aria-hidden="true"></i> командой <a href="https://colorlib.com" target="_blank">Colorlib.com</a></p>
      </div>
    </div>
  </div>
</footer>
