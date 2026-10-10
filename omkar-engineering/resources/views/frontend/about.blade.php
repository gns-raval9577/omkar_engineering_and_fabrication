@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')

    <!-- Header Banner -->
    <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('template/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Engineering & Fabrication Company</h6>
                    <h1>About <span>Omkar</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <h5>Leading Experts in Engineering & Fabrication Solutions!</h5>
                    <p>Omkar Engineering & Fabrication is a trusted name in delivering high-quality industrial fabrication,
                        structural engineering, and custom metal solutions. We specialize in precision work, durability, and
                        innovative engineering tailored to client requirements.</p>
                    <p>With years of hands-on experience, we provide end-to-end fabrication services including design,
                        manufacturing, installation, and maintenance for various industrial and commercial projects.</p>
                    <ul class="listext list-unstyled mb-30">
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>10+ years of experience in engineering & fabrication</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>200+ successfully completed industrial projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>High-quality workmanship & client satisfaction</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="about-bottom"> <img src="{{ asset('template/img/signature-dark.svg') }}" alt=""
                            class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Omkar Engineering</div>
                            <div class="about-rol">Fabrication Experts</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img fl-wrap">
                        <img src="{{ asset('template/img/about4.jpg') }}" class="img-fluid" alt="">
                        <div class="about-img-hotifer color-bg">
                            <p>Our years of fabrication experience ensure strong, reliable, and precise engineering
                                solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Info -->
    <section class="about-info section-padding bg-gray">
        <div class="container">
            <div class="about-info">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-info-img mb-60">
                            <div class="img"> <img src="{{ asset('template/img/about2.jpg') }}" class="img-fluid"
                                    alt=""> </div>
                        </div>
                        <div class="section-title2">The journey of<span>Omkar Engineering & Fabrication</span></div>
                        <p>Founded with a vision to deliver high-quality engineering solutions, Omkar Engineering &
                            Fabrication has grown into a reliable partner for industrial fabrication, structural work, and
                            customized metal projects.</p>
                    </div>
                    <div class="col-md-6 offset-md-1 pt-60">
                        <div class="section-title2">Excellence in <span>Engineering & Fabrication Services</span></div>
                        <p>We focus on precision engineering, advanced fabrication techniques, and timely project delivery
                            to meet the highest industry standards and customer expectations.
                        </p>
                        <div class="about-info-img pt-60">
                            <div class="img"> <img src="{{ asset('template/img/about3.jpg') }}" class="img-fluid"
                                    alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Skilled Professionals</div>
                    <div class="section-title">Meet <span>Our Experts</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/1.jpg') }}" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Adam Norman<span>CEO & Founder</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien
                                arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Adam Norman<span>CEO & Founder</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/2.jpg') }}" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Enrico Brown<span>Head of Sales</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien
                                arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Enrico Brown<span>Head of Sales</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/3.jpg') }}" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Olivia White<span>Lead Project Manager</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien
                                arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Olivia White<span>Lead Project Manager</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed section-padding"
            data-background="{{ asset('template/img/fabrication-numbers-banner.jpg') }}" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="front norc-factory"></i>
                                <i class="back norc-factory"></i>
                            </span>
                            <h3 class="count">675</h3>
                            <h6><span>01.</span> Fabrication Projects</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="front norc-b-meeting"></i>
                                <i class="back norc-b-meeting"></i>
                            </span>
                            <h3 class="count">450</h3>
                            <h6><span>02.</span> Happy Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center">
                            <span class="icon">
                                <i class="front norc-trophy"></i>
                                <i class="back norc-trophy"></i>
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
                    <div class="section-subtitle">Our Strength</div>
                    <div class="section-title">Core <span>Values</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-construction-sign"></span>
                        <h5>Safety First</h5>
                        <p>We maintain zero-compromise safety protocols and follow rigorous workplace standards across all industrial fabrication and on-site installations.</p>
                        <div class="facility-shape"> <span class="norc-construction-sign"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-cogwheel"></span>
                        <h5>Precision Engineering</h5>
                        <p>Delivering high dimensional accuracy, meticulous detailing, and durable engineering through modern machinery and skilled craftsmanship.</p>
                        <div class="facility-shape"> <span class="norc-cogwheel"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-paper-diploma"></span>
                        <h5>Quality Assurance</h5>
                        <p>Every fabrication component, weld joint, and structure undergoes strict quality inspection to guarantee lasting strength and industrial compliance.</p>
                        <div class="facility-shape"> <span class="norc-paper-diploma"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-chess-knight"></span>
                        <h5>Integrity & Trust</h5>
                        <p>We build lasting partnerships through transparent communication, honest pricing, and an unwavering commitment to our project commitments.</p>
                        <div class="facility-shape"> <span class="norc-chess-knight"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-strategy"></span>
                        <h5>Timely Execution</h5>
                        <p>Optimized manufacturing schedules and dedicated project management ensure reliable, on-time project completion without compromising on quality.</p>
                        <div class="facility-shape"> <span class="norc-strategy"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility">
                        <span class="norc-flag-points-32"></span>
                        <h5>Customer Focus</h5>
                        <p>We engineer custom metal and structural solutions tailored precisely to meet each client's unique technical specifications and operational needs.</p>
                        <div class="facility-shape"> <span class="norc-flag-points-32"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video & Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0"
            data-background="{{ asset('template/img/fabrication-testimonials-banner.jpg') }}" data-overlay-dark="4">
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
                                <h6>Fabrication Tour</h6>
                                <h4>Engineering & Fabrication in Action</h4>
                                <p>Discover our advanced fabrication facilities, heavy machinery, and precision craftsmanship delivering durable industrial solutions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>What Our Clients Say</h6>
                                <h4>Customer Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img
                                            src="{{ asset('template/img/quot.png') }}" alt=""></span>
                                    <p class="v-border">Omkar Engineering delivered outstanding structural steel fabrication for our industrial facility. Their precision engineering, weld quality, and on-schedule execution exceeded our expectations.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment2.jpg') }}"
                                                alt=""> </div>
                                        <div class="cont">
                                            <h6>Rajesh Patel</h6> <span>Industrial Plant Director, Ahmedabad</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png') }}" alt="">
                                    </span>
                                    <p class="v-border">We partnered with Omkar for custom machinery parts and industrial shed fabrication. Their technical expertise, CAD accuracy, and material strength are best in class.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment3.jpg') }}"
                                                alt=""> </div>
                                        <div class="cont">
                                            <h6>Suresh Sharma</h6> <span>Project Head, Vadodara</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png') }}" alt="">
                                    </span>
                                    <p class="v-border">Highly dependable fabrication partner. Their attention to detail, robust safety compliance, and finishing quality on our heavy engineering projects have been truly commendable.
                                    </p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment.jpg') }}"
                                                alt=""> </div>
                                        <div class="cont">
                                            <h6>Mahesh Shah</h6> <span>Operations Manager, Sanand GIDC</span>
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
@endsection
