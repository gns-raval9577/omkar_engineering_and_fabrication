@extends('frontend.layouts.app')

@section('title', 'product-details')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('template/img/slider/1.jpg') }}"">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Our Services</h6>
                    <h1>Project <span>Planning</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Page -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>About the service</h5>
                    <p>Architecture lonon lorem ac erat suscipit bibendum nulla facilisi. Sedeuter nunc volutpat mollis
                        sapien viventa conseyer turpeutionyer masin libero sempe fusce mollis augue sit amet hendrerit
                        vestibulum. Duisteyerionyer venenatis lacus gravida eros ut turpis interdum ornare. Sedeuter nunc
                        volutpat, mollis sapien iventa, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit
                        amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                    <p class="mb-30">Project lonon lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat,
                        moment sapien vel, conseyer turpeutionyer masin libero sempe. Fuscele mollis augue sit amet
                        hendrerit vestibulum. Duisteyerionyer venenatis lacus. Gravida eros ut turpis interdum ornare.
                        Interdum et malesu they adamale fames anteipsu pimsine faucibus. Curabitur arcu site feugiat in
                        torto. Gravida eros ut turpis interdum ornare.</p>
                    <ol class="number mb-30">
                        <li>Duisteyerionyer venenatis lacus gravida eros ut turpis interdum.</li>
                        <li>Sedeuter nunc volutpat mollis sapien viventa drana viventa.</li>
                        <li>Fusceler mollis augue sit amet hendrerit vestibulum.</li>
                        <li>Gravida eros ut turpis interdum ornare. Interdum et malesu adama.</li>
                    </ol>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('template/img/services/1.jpg') }}"" title="Event" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('template/img/services/1.jpg') }}""
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="{{ asset('template/img/services/2.jpg') }}"" title="Fashion" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('template/img/services/2.jpg') }}""
                                    class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 mt-30">
                    <p class="mb-30">Architecture lonon lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc
                        volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit
                        amet hendrerit vestibulum. Duisteyerionyer venenatis lacus. Gravida eros ut turpis interdum ornare.
                        Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in
                        torto.</p>
                    <h6>What's part of the service?</h6>
                    <p>Architecture lonon lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis
                        sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit
                        vestibulum. Duisteyerionyer venenatis lacus. Gravida eros ut turpis interdum ornare. Interdum et
                        malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in torto.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Other Services -->
    <section class="services center section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">What We Do</div>
                    <div class="section-title">Other <span>Services</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/2.jpg') }}"" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-construction-sign"></i> </div>
                            <h5><a href="services-page.html">General Contracting</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt
                                risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View
                                service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/3.jpg') }}"" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-factory"></i> </div>
                            <h5><a href="services-page.html">Industrial / Manufacturing</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt
                                risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View
                                service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/4.jpg') }}"" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-radiation"></i> </div>
                            <h5><a href="services-page.html">Energy and Environment</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt
                                risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View
                                service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/5.jpg') }}"" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-cogwheel"></i> </div>
                            <h5><a href="services-page.html">Const. Management</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt
                                risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View
                                service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/6.jpg') }}"" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-pantone"></i> </div>
                            <h5><a href="services-page.html">Interior Design</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt
                                risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View
                                service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
