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
                                <p>We provide high-quality engineering and fabrication services including metal fabrication, industrial structures, and custom machinery solutions with precision and durability.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
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
                                <p>Specializing in structural fabrication, welding works, shed fabrication, and industrial project execution tailored to client requirements.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
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
                                <p>Omkar Engineering delivers reliable fabrication services with expert craftsmanship, modern tools, and commitment to quality and safety.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
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
    <!-- Services -->
    <section class="services center section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">What We Do</div>
                    <div class="section-title">Our <span>Services</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/1.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-new-construction"></i> </div>
                            <h5><a href="services-page.html">Project Planning</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/2.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-construction-sign"></i> </div>
                            <h5><a href="services-page.html">General Contracting</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/3.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-factory"></i> </div>
                            <h5><a href="services-page.html">Industrial / Manufacturing</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/4.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-radiation"></i> </div>
                            <h5><a href="services-page.html">Energy and Environment</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/5.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-cogwheel"></i> </div>
                            <h5><a href="services-page.html">Const. Management</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
                    <div class="item mb-30">
                        <div class="service-img">
                            <div class="img"> <img src="{{ asset('template/img/services/6.jpg')}}" alt=""> </div>
                        </div>
                        <div class="cont">
                            <div class="service-icon"> <i class="norc-pantone"></i> </div>
                            <h5><a href="services-page.html">Interior Design</a></h5>
                            <p>Quisque imperdie miss sapien porttiton the bibendum. Pellentesque accumsa amet tincidunt risus nesuen.</p> <a href="services-page.html" class="link-btn" tabindex="0">View service</a>
                        </div>
                    </div>
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
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Latest Works</div>
                    <div class="section-title">Our <span>Projects</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-90">
                    <div class="projects left">
                        <figure><img src="{{ asset('template/img/projects/5.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4>Interior Remodeling <span>in Westport, CT</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-new-construction"></i> Renovation</div>
                                <div class="more"><a href="project-page.html" class="link-btn" tabindex="0">Discover</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-90">
                    <div class="projects">
                        <figure><img src="{{ asset('template/img/projects/1.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4>Factory Construction <span>in Southlake, TX</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-factory"></i> Construction</div>
                                <div class="more"><a href="project-page.html" class="link-btn" tabindex="0">Discover</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="projects left">
                        <figure><img src="{{ asset('template/img/projects/6.jpg')}}" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h4>Residential Construction <span>in Los Altos, CA</span></h4>
                            <p>Construction elibero tristique mattis suspen dissen potenti seden laorien ultricies magna, in dignissim justo porta eget miss vention ormana the miss drana on the tenis vitae mollie.</p>
                            <div class="line-dec"></div>
                            <div class="info-wrapper">
                                <div class="date"><i class="norc-construction-sign"></i> Building</div>
                                <div class="more"><a href="project-page.html" class="link-btn" tabindex="0">Discover</a></div>
                            </div>
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
    <!-- Clients -->
    <section class="clients">

@endsection