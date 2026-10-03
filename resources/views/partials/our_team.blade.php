
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
                <div class="heading-section ftco-animate text-center text-lg-left">
                    <span class="subheading">Команда и персонал</span>
                    <h2>Наша команда</h2>
                    <p>Наши специалисты — опытные профессионалы, прошедшие специальное обучение и сертификацию.</p>
                    <p><a href="javascript:" class="btn btn-secondary">Весь персонал</a></p>
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
                                    <li class="ftco-animate"><a href="javascript:" class="d-flex align-items-center justify-content-center"><span class="fa fa-telegram"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:" class="d-flex align-items-center justify-content-center"><span class="fa fa-vk"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:" class="d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
