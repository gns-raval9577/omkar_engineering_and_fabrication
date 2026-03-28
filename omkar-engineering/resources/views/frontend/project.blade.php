@extends('frontend.layouts.app')

@section('title', 'project')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('template/img/slider/1.jpg') }}"">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Latest Works</h6>
                    <h1>Our <span>Projects</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-90">
                    <div class="projects left">
                        <figure><img src="{{ asset('template/img/projects/5.jpg') }}"" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Interior Remodeling <span>in Westport, CT</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in
                                dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-new-construction"></i> Renovation</div>
                                <div class="more"><a href="{{ route('project-details') }}" class="link-btn"
                                        tabindex="0">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-90">
                    <div class="projects">
                        <figure><img src="{{ asset('template/img/projects/1.jpg') }}"" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Factory Construction <span>in Southlake, TX</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in
                                dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-factory"></i> Construction</div>
                                <div class="more"><a href="{{ route('project-details') }}" class="link-btn"
                                        tabindex="0">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-90">
                    <div class="projects left">
                        <figure><img src="{{ asset('template/img/projects/6.jpg') }}"" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Residential Construction <span>in Los Altos, CA</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in
                                dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-construction-sign"></i> Building</div>
                                <div class="more"><a href="{{ route('project-details') }}" class="link-btn"
                                        tabindex="0">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="projects">
                        <figure><img src="{{ asset('template/img/projects/3.jpg') }}"" alt="" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h4>Solar Energy Construction, McLean, VA</h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in
                                dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-radiation"></i> Solar Energy</div>
                                <div class="more"><a href="{{ route('project-details') }}" class="link-btn"
                                        tabindex="0">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed section-padding"
            data-background="{{ asset('template/img/banner2.jpg') }}"" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="front norc-design"></i>
                                <i class="back norc-design"></i>
                            </span>
                            <h3 class="count">675</h3>
                            <h6><span>01.</span> Projects Design</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="font norc-b-meeting"></i>
                                <i class="back norc-b-meeting"></i>
                            </span>
                            <h3 class="count">450</h3>
                            <h6><span>02.</span> Happy Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="front norc-paper-diploma"></i>
                                <i class="back norc-paper-diploma"></i>
                            </span>
                            <h3 class="count">550</h3>
                            <h6><span>03.</span> Completed Projects</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Values -->
    <section class="values section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Values</div>
                    <div class="section-title">Core <span>Values</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-construction-sign"></span>
                        <h5>Safety</h5>
                        <p>Safety will always come first as we strive for accident-free projects. Fusce tincidunt nis ace
                            park norttito amet space.</p>
                        <div class="facility-shape"> <span class="norc-construction-sign"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-bulb-63"></span>
                        <h5>Innovation</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a
                            menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-bulb-63"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-paper-diploma"></span>
                        <h5>Quality</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a
                            menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-paper-diploma"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-chess-knight"></span>
                        <h5>Integrity</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a
                            menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-chess-knight"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-strategy"></span>
                        <h5>Strategy</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a
                            menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-strategy"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-flag-points-32"></span>
                        <h5>Inclusion</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a
                            menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-flag-points-32"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video & Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ asset('template/img/banner.jpg') }}"" data-overlay-dark="4">
            <div class="container">
                <div class="row">
                    <!-- Video -->
                    <div class="col-md-6 mb-30 valign">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://youtu.be/z4nO6NuEM3A">
                                    <svg class="circle-fill">
                                        <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width="1">
                                        </circle>
                                    </svg>
                                    <svg class="circle-track">
                                        <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1"
                                            fill="none"></circle>
                                    </svg> <span class="polygon">
                                        <i class="norc-triangle-right"></i>
                                    </span> </a>
                            </div>
                            <div class="cont mt-30 mb-30">
                                <h6>Promo Video</h6>
                                <h4>Video About Company</h4>
                                <p>Video showing our 25 years of business experience.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>What said about us</h6>
                                <h4>Customer Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img
                                            src="{{ asset('template/img/quot.png') }}" alt=""></span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna
                                        busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img
                                                src="{{ asset('template/img/team/comment2.jpg') }}"" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Jason Brown</h6> <span>Hollywood Hills, CA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png') }}" alt="">
                                    </span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna
                                        busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img
                                                src="{{ asset('template/img/team/comment3.jpg') }}"" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Los Angeles, CA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png') }}" alt="">
                                    </span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna
                                        busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment.jpg') }}""
                                                alt=""> </div>
                                        <div class="cont">
                                            <h6>Enrico Smith</h6> <span>Malibu Beach, CA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/1.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/2.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/3.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/4.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/5.png') }}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{ asset('template/img/clients/6.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
@endsection()
