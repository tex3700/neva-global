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
