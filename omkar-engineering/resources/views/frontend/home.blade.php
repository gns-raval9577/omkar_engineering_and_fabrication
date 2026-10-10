@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

       <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/c1.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Trusted Fabrication Experts</h4>
                                <h1>Omkar Engineering & Fabrication</h1>
                                <p>We provide high-quality engineering and fabrication services including metal fabrication, industrial structures, and custom machinery solutions with precision and durability.</p> <a href="{{ route('project') }}" class="button-primary">Our Projects</a> <a href="#services" class="button-tersiyer">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/c2.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Industrial & Custom Solutions</h4>
                                <h1>Precision Engineering Services</h1>
                                <p>Specializing in structural fabrication, welding works, shed fabrication, and industrial project execution tailored to client requirements.</p> <a href="{{ route('project') }}" class="button-primary">Our Projects</a> <a href="#services" class="button-tersiyer">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/c3.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>25+ Years Experience</h4>
                                <h1>Your Trusted Fabrication Partner</h1>
                                <p>Omkar Engineering delivers reliable fabrication services with expert craftsmanship, modern tools, and commitment to quality and safety.</p> <a href="{{ route('project') }}" class="button-primary">Our Projects</a> <a href="#services" class="button-tersiyer">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-subtitle">Engineering & Fabrication Company</div>
                    <div class="section-title">About <span>Omkar</span></div>
                    <p>Omkar Engineering & Fabrication is a trusted name in delivering high-quality engineering and fabrication services. We specialize in metal fabrication, structural works, industrial sheds, and custom engineering solutions tailored to client requirements.</p>
                    <p>With a strong focus on precision, durability, and modern techniques, we ensure every project meets the highest quality standards. Our skilled team is committed to providing reliable and cost-effective solutions for industrial and commercial projects.</p>
                    <ul class="listext list-unstyled mb-30">
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Over 25 years of engineering and fabrication experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>100+ successfully completed industrial projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>High-quality workmanship and reliable service</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="about-bottom"> <img src="{{ asset('template/img/signature-dark.svg') }}" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Sagar Rathod</div>
                            <div class="about-rol">CEO & Founder</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img"> <img src="{{ asset('template/img/about.jpg')}}" alt="Omkar Engineering & Fabrication">
                        <div class="about-img-hotifer">
                            <p>Delivering durable and precision-based fabrication solutions with over 25 years of industry experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Fixed uniform equal height for all service cards */
        .services .owl-stage {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .services .owl-item {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            float: none !important;
            height: auto !important;
        }
        .services .owl-item .item {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            width: 100% !important;
            height: 100% !important;
            margin-bottom: 30px !important;
            background: #fff;
        }
        .services .item .service-img {
            width: 100%;
            flex-shrink: 0;
        }
        .services .item .service-img .img {
            width: 100%;
            height: 240px !important;
            aspect-ratio: 1100 / 755;
            overflow: hidden;
            position: relative;
            background: #e5e7eb;
            border-radius: 4px 4px 0 0;
        }
        .services .item .service-img .img img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            display: block;
            transition: transform 0.6s ease;
        }
        .services .item .cont {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
            height: 100% !important;
            padding: 30px 25px 22px 25px !important;
            background: #fff;
            box-sizing: border-box;
        }
        .services .item .cont .service-title {
            font-size: 20px !important;
            line-height: 1.35 !important;
            min-height: 54px !important;
            max-height: 54px !important;
            margin-bottom: 12px !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .services .item .cont .service-desc {
            font-size: 14px !important;
            line-height: 1.6 !important;
            min-height: 70px !important;
            max-height: 70px !important;
            margin-bottom: 0 !important;
            color: #64748b !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 3 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .services .item .cont .service-action-bar {
            margin-top: auto !important;
            padding-top: 15px !important;
            border-top: 1px dashed #e2e8f0 !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        /* Decrease gap between About and Services sections */
        .about.section-padding {
            padding-bottom: 50px !important;
        }
        .services.section-padding {
            padding-top: 60px !important;
        }
        /* Decrease gap between Values and Team sections */
        .values.section-padding {
            padding-bottom: 50px !important;
        }
        .team.section-padding {
            padding-top: 60px !important;
        }
    </style>

    <!-- Services -->
    <section id="services" class="services center section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">What We Do</div>
                    <div class="section-title">Our <span>Services</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    @forelse ($services as $index => $service)
                        @php
                            $icons = [
                                'norc-factory',
                                'norc-cogwheel',
                                'norc-new-construction',
                                'norc-construction-sign',
                                'norc-radiation',
                                'norc-pantone',
                            ];
                            $icon = $icons[$index % count($icons)];
                            $fallbackImg = asset('template/img/services/' . (($index % 6) + 1) . '.jpg');
                            $imgUrl = $service->image ? asset('storage/' . $service->image) : $fallbackImg;
                        @endphp
                        <div class="item mb-30">
                            <div class="service-img">
                                <div class="img">
                                    <img src="{{ $imgUrl }}" 
                                         alt="{{ $service->title }}" 
                                         onerror="this.src='{{ $fallbackImg }}'">
                                </div>
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="service-icon"> <i class="{{ $icon }}"></i> </div>
                                    <h5 class="service-title"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $service->id }}">{{ $service->title }}</a></h5>
                                    <p class="service-desc">{{ \Illuminate\Support\Str::limit($service->sort_description ?? strip_tags($service->description), 110) }}</p>
                                </div>
                                <div class="service-action-bar">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $service->id }}" class="link-btn" tabindex="0">View Details</a>
                                    <a href="{{ route('contact') }}?service={{ urlencode($service->title) }}" class="link-btn" style="color: #008acf !important; font-weight: 600;" tabindex="0">Inquire Now &rarr;</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="item mb-30">
                            <div class="service-img">
                                <div class="img"> <img src="{{ asset('template/img/services/1.jpg')}}" alt="Project Planning"> </div>
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="service-icon"> <i class="norc-new-construction"></i> </div>
                                    <h5 class="service-title"><a href="{{ route('contact') }}">Project Planning</a></h5>
                                    <p class="service-desc">Comprehensive engineering planning, CAD structural modeling, and project consulting.</p>
                                </div>
                                <div class="service-action-bar">
                                    <a href="{{ route('contact') }}?service={{ urlencode('Project Planning') }}" class="link-btn" tabindex="0">Inquire Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="service-img">
                                <div class="img"> <img src="{{ asset('template/img/services/2.jpg')}}" alt="General Contracting"> </div>
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="service-icon"> <i class="norc-construction-sign"></i> </div>
                                    <h5 class="service-title"><a href="{{ route('contact') }}">General Contracting</a></h5>
                                    <p class="service-desc">End-to-end industrial structural fabrication, shed erection, and site assembly execution.</p>
                                </div>
                                <div class="service-action-bar">
                                    <a href="{{ route('contact') }}?service={{ urlencode('General Contracting') }}" class="link-btn" tabindex="0">Inquire Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="service-img">
                                <div class="img"> <img src="{{ asset('template/img/services/3.jpg')}}" alt="Industrial Manufacturing"> </div>
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="service-icon"> <i class="norc-factory"></i> </div>
                                    <h5 class="service-title"><a href="{{ route('contact') }}">Industrial / Manufacturing</a></h5>
                                    <p class="service-desc">Custom machine components, industrial vessels, heavy tanks, and sheet metal works.</p>
                                </div>
                                <div class="service-action-bar">
                                    <a href="{{ route('contact') }}?service={{ urlencode('Industrial Manufacturing') }}" class="link-btn" tabindex="0">Inquire Now</a>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- Process -->
    <section class="process">
        <div class="section-padding bg-img bg-fixed section-padding" data-background="{{ asset('template/img/Faded-Industrial-Workshop-Process-Banner.png')}}" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mb-45 text-center">
                        <h5>How We Work</h5>
                        <h2>Our Fabrication Process</h2>
                        <p>From precision CAD design and material cutting to high-grade welding, structural assembly, and rigorous quality inspection — here is how we execute every engineering project.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" class="tobotm" alt=""> <span class="icon norc-ruler-pencil"></span>
                            <h6><span>01.</span>Design & CAD</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" alt=""> <span class="icon norc-cogwheel"></span>
                            <h6><span>02.</span>Cutting & Machining</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" class="tobotm" alt=""> <span class="icon norc-factory"></span>
                            <h6><span>03.</span>Fabrication & Welding</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <span class="icon norc-d-check"></span>
                            <h6><span>04.</span>Quality & Finishing</h6>
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
                    <div class="single-facility"> <span class="norc-construction-sign"></span>
                        <h5>Safety First</h5>
                        <p>We maintain zero-compromise safety protocols and follow rigorous workplace standards across all industrial fabrication and on-site installations.</p>
                        <div class="facility-shape"> <span class="norc-construction-sign"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-cogwheel"></span>
                        <h5>Precision Engineering</h5>
                        <p>Delivering high dimensional accuracy, meticulous detailing, and durable engineering through modern machinery and skilled craftsmanship.</p>
                        <div class="facility-shape"> <span class="norc-cogwheel"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-paper-diploma"></span>
                        <h5>Quality Assurance</h5>
                        <p>Every fabrication component, weld joint, and structure undergoes strict quality inspection to guarantee lasting strength and industrial compliance.</p>
                        <div class="facility-shape"> <span class="norc-paper-diploma"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-chess-knight"></span>
                        <h5>Integrity & Trust</h5>
                        <p>We build lasting partnerships through transparent communication, honest pricing, and an unwavering commitment to our project commitments.</p>
                        <div class="facility-shape"> <span class="norc-chess-knight"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-strategy"></span>
                        <h5>Timely Execution</h5>
                        <p>Optimized manufacturing schedules and dedicated project management ensure reliable, on-time project completion without compromising on quality.</p>
                        <div class="facility-shape"> <span class="norc-strategy"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-flag-points-32"></span>
                        <h5>Customer Focus</h5>
                        <p>We engineer custom metal and structural solutions tailored precisely to meet each client's unique technical specifications and operational needs.</p>
                        <div class="facility-shape"> <span class="norc-flag-points-32"></span> </div>
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
                    <div class="section-subtitle">Expert Worker</div>
                    <div class="section-title">Meet <span>Our Team</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/1.jpg')}}" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Adam Norman<span>CEO & Founder</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width"> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Adam Norman<span>CEO & Founder</span></h3>
                        </div>
                    </div>
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/6.jpg')}}" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Enrico Brown<span>Head of Sales</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width"> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Enrico Brown<span>Head of Sales</span></h3>
                        </div>
                    </div>
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('template/img/team/5.jpg')}}" alt="" class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">John Snow<span>Lead Project Manager</span></h3>
                            <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                            <div class="social">
                                <div class="full-width"> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
                            </div>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">John Snow<span>Lead Project Manager</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed section-padding" data-background="{{ asset('template/img/fabrication-numbers-banner.jpg')}}" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
                                <i class="front norc-factory"></i>
                                <i class="back norc-factory"></i>
                            </span>
                            <h3 class="count">675</h3>
                            <h6><span>01.</span> Fabrication Projects</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
                                <i class="front norc-b-meeting"></i>
                                <i class="back norc-b-meeting"></i>
                            </span>
                            <h3 class="count">450</h3>
                            <h6><span>02.</span> Happy Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
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
    <!-- Video & Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('template/img/fabrication-testimonials-banner.jpg')}}" data-overlay-dark="4">
            <div class="container">
                <div class="row">
                    <!-- Video -->
                    <div class="col-md-6 mb-30 valign">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://youtu.be/z4nO6NuEM3A">
                                    <svg class="circle-fill">
                                        <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width="1"></circle>
                                    </svg>
                                    <svg class="circle-track">
                                        <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
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
                                <div class="item"> <span class="quote"><img src="{{ asset('template/img/quot.png')}}" alt=""></span>
                                    <p class="v-border">Omkar Engineering delivered outstanding structural steel fabrication for our industrial facility. Their precision engineering, weld quality, and on-schedule execution exceeded our expectations.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment2.jpg')}}" alt=""> </div>
                                        <div class="cont">
                                            <h6>Rajesh Patel</h6> <span>Industrial Plant Director, Ahmedabad</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png')}}" alt="">
                                    </span>
                                    <p class="v-border">We partnered with Omkar for custom machinery parts and industrial shed fabrication. Their technical expertise, CAD accuracy, and material strength are best in class.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment3.jpg')}}" alt=""> </div>
                                        <div class="cont">
                                            <h6>Suresh Sharma</h6> <span>Project Head, Vadodara</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="{{ asset('template/img/quot.png')}}" alt="">
                                    </span>
                                    <p class="v-border">Highly dependable fabrication partner. Their attention to detail, robust safety compliance, and finishing quality on our heavy engineering projects have been truly commendable.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment.jpg')}}" alt=""> </div>
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
    </section>

    <!-- Service Detail Modals -->
    @if(isset($services) && $services->isNotEmpty())
        @foreach ($services as $index => $service)
            @php
                $modalFallback = asset('template/img/services/' . (($index % 6) + 1) . '.jpg');
                $modalImg = $service->image ? asset('storage/' . $service->image) : $modalFallback;
            @endphp
            <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModalLabel{{ $service->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 12px; overflow: hidden; border: none; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                        <div class="modal-header" style="background: #111; color: #fff; border-bottom: 2px solid #008acf; padding: 20px 25px;">
                            <h5 class="modal-title" id="serviceModalLabel{{ $service->id }}" style="color: #fff; font-size: 20px; font-weight: 600; margin: 0;">
                                {{ $service->title }}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding: 25px;">
                            <div style="aspect-ratio: 1100 / 755; width: 100%; max-height: 380px; overflow: hidden; border-radius: 8px; margin-bottom: 20px; background: #e5e7eb;">
                                <img src="{{ $modalImg }}" alt="{{ $service->title }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{ $modalFallback }}'">
                            </div>
                            @if($service->sort_description)
                                <div class="p-3 mb-3" style="background: #f8fafc; border-left: 4px solid #008acf; border-radius: 4px;">
                                    <p style="margin: 0; font-size: 15px; color: #1e293b; font-weight: 500; line-height: 1.6;">
                                        {{ $service->sort_description }}
                                    </p>
                                </div>
                            @endif
                            <div style="color: #475569; font-size: 15px; line-height: 1.8;">
                                {!! nl2br(e($service->description)) !!}
                            </div>
                        </div>
                        <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 15px 25px; display: flex; justify-content: space-between;">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="font-size: 14px; border-radius: 6px; padding: 8px 18px;">Close</button>
                            <a href="{{ route('contact') }}?service={{ urlencode($service->title) }}" class="btn text-white" style="background-color: #008acf; border: none; font-size: 14px; font-weight: 600; padding: 8px 22px; border-radius: 6px;">
                                Inquire About This Service &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection