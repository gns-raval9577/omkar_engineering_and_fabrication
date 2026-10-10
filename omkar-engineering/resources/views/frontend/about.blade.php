@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')

    <!-- Header Banner -->
    <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="5"
        data-background="{{ asset('template/img/about-banner-engineering.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h6>Engineering & Fabrication Company</h6>
                    <h1>About <span>Omkar Engineering</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <h5>Over 25 Years of Engineering Excellence & Heavy Metal Fabrication</h5>
                    <p>Established in Vatva GIDC, Ahmedabad, <strong>Omkar Engineering & Fabrication</strong> is a premier manufacturer and industrial contractor specializing in structural steel fabrication, pre-engineered building (PEB) sheds, heavy equipment assemblies, industrial storage tanks, piping networks, and precision CNC cutting.</p>
                    <p>With more than 25 years of hands-on technical expertise, modern workshop infrastructure, and certified fabricators, we deliver complete engineering solutions—from CAD design and structural load calculation to manufacturing, sandblasting, protective painting, and on-site erection.</p>
                    <ul class="listext list-unstyled mb-30">
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Over 25 years of proven fabrication craftsmanship & engineering expertise</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>150+ successfully delivered industrial & heavy structural projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>ASME/AWS compliant welding standards & rigorous quality inspection</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="about-bottom"> <img src="{{ asset('template/img/signature-dark.svg') }}" alt=""
                            class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Sagar Rathod (D.M.E.)</div>
                            <div class="about-rol">Founder & Managing Director</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img fl-wrap">
                        <img src="{{ asset('template/img/about-main-fabrication.jpg') }}" class="img-fluid" alt="Omkar Engineering Fabrication Inspection">
                        <div class="about-img-hotifer color-bg">
                            <p>Our 25+ years of fabrication experience ensure strong, reliable, and precise engineering solutions.</p>
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
                            <div class="img"> <img src="{{ asset('template/img/about-journey-blueprints.jpg') }}" class="img-fluid"
                                    alt="Omkar Engineering Fabrication Blueprints & CAD"> </div>
                        </div>
                        <div class="section-title2">The Journey of <span>Omkar Engineering & Fabrication</span></div>
                        <p>Founded with a commitment to unmatched structural reliability, Omkar Engineering & Fabrication has evolved into a trusted engineering partner for heavy manufacturing industries across Gujarat and India. We translate complex structural specifications and CAD blueprints into enduring, high-strength industrial structures.</p>
                    </div>
                    <div class="col-md-6 offset-md-1 pt-60">
                        <div class="section-title2">Advanced Machinery & <span>Precision Fabrication</span></div>
                        <p>We deploy modern fabrication machinery—including high-accuracy CNC fiber laser cutting, heavy hydraulic plate bending, precision lathe turning, and automated welding—guaranteeing superior structural strength, tight dimensional tolerances, and prompt project delivery.</p>
                        <div class="about-info-img pt-60">
                            <div class="img"> <img src="{{ asset('template/img/about-excellence-fabrication.jpg') }}" class="img-fluid"
                                    alt="Precision CNC Laser Cutting & Heavy Fabrication"> </div>
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
                    <div class="section-subtitle">Skilled Engineering Professionals</div>
                    <div class="section-title">Meet <span>Our Leadership</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/team-sagar-rathod.jpg') }}" alt="Sagar Rathod - Founder & Managing Director"
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Sagar Rathod (D.M.E.)<span>Founder & Managing Director</span></h3>
                            <p class="team-text">Over 25 years of technical leadership in heavy industrial fabrication, structural PEB sheds, process equipment, and turnkey manufacturing execution.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="tel:+918141133144"><i class="fa fa-phone"></i></a>
                                    <a href="mailto:omkarengineers.fab@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a href="https://wa.me/918141133144" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Sagar Rathod (D.M.E.)<span>Founder & Managing Director</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/team-lead-engineer.jpg') }}" alt="R. Sharma - Senior Structural Design Engineer"
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">R. Sharma<span>Senior Structural Design Engineer</span></h3>
                            <p class="team-text">Specializes in CAD/CAM modeling, load-bearing structural design, pre-engineered building calculations, and material optimization.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="mailto:omkarengineers.fab@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a href="tel:+918141133144"><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">R. Sharma<span>Senior Structural Engineer</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/team-fabrication-manager.jpg') }}" alt="Rajesh Solanki - Fabrication & Quality Supervisor"
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Rajesh Solanki<span>Fabrication & Quality Supervisor</span></h3>
                            <p class="team-text">Directs shop-floor welding operations, ultrasonic weld testing, surface finishing, and strict compliance with industrial safety protocols.</p>
                            <div class="social">
                                <div class="full-width">
                                    <a href="mailto:omkarengineers.fab@gmail.com"><i class="fa fa-envelope"></i></a>
                                    <a href="tel:+918141133144"><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Rajesh Solanki<span>Fabrication & Quality Supervisor</span></h3>
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
