@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

       <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/1.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Guaranteed High Quality</h4>
                                <h1>Welcome to Norc. Construction</h1>
                                <p>Our 25 years working experience make a different construction building. Viverra tristique usto duis vitae diam neque nivamus estan the atin viverra nectow drana setlie.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/2.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Architecture Design</h4>
                                <h1>We Build Great Projects</h1>
                                <p>Our 25 years working experience make a different construction building. Viverra tristique usto duis vitae diam neque nivamus estan the atin viverra nectow drana setlie.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{ asset('template/img/slider/3.jpg')}}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Professional Team</h4>
                                <h1>Build Your Dream House</h1>
                                <p>Our 25 years working experience make a different construction building. Viverra tristique usto duis vitae diam neque nivamus estan the atin viverra nectow drana setlie.</p> <a href="projects.html" class="button-primary">Our Projects</a> <a href="services.html" class="button-tersiyer">Our Services</a>
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
                    <div class="section-subtitle">Construction Firm</div>
                    <div class="section-title">About <span>norc</span></div>
                    <p>Our company at libero tristique mattis. Suspendisse potenti sed leonra main dignissim justo porta eget. Curabitur luctus magna numsaton vivention esellentesue the miss tenis vitae mollie.</p>
                    <p>Curabitur luctus magna numsaton vivention esellentesue the mis awa vitan sedeonra magnain dignissim porta.</p>
                    <ul class="listext list-unstyled mb-30">
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Over 25 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>100+ successfully executed projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="listext-icon"> <i class="norc-d-check"></i> </div>
                            <div class="listext-text">
                                <p>Exceptional work quality</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="about-bottom"> <img src="{{ asset('template/img/signature-dark.svg') }}" alt="" class="image about-signature">
                        <div class="about-name-wrapper">
                            <div class="about-name">Adam Norman</div>
                            <div class="about-rol">CEO & Founder</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img"> <img src="{{ asset('template/img/about.jpg')}}" alt="">
                        <div class="about-img-hotifer">
                            <p>Our 25 years working experience make a different construction building.</p>
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
        <div class="section-padding bg-img bg-fixed section-padding" data-background="{{ asset('template/img/banner2.jpg')}}" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 mb-45 text-center">
                        <h5>How We Work</h5>
                        <h2>Our Process</h2>
                        <p>Suspendisse potenti sed laoen ultra magna in dignissim justo porta miss acurabitur luctus magna numsation elentesue the miss vitae moie.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" class="tobotm" alt=""> <span class="icon norc-paper"></span>
                            <h6><span>01.</span>Planing</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" alt=""> <span class="icon norc-pen-tool-2"></span>
                            <h6><span>02.</span>Design</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <img src="{{ asset('template/img/arrow1.png')}}" class="tobotm" alt=""> <span class="icon norc-new-construction"></span>
                            <h6><span>03.</span>Construct</h6>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="item text-center"> <span class="icon norc-trophy"></span>
                            <h6><span>04.</span>Finishing</h6>
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
                        <h5>Safety</h5>
                        <p>Safety will always come first as we strive for accident-free projects. Fusce tidunt nis ace park norttito amet space.</p>
                        <div class="facility-shape"> <span class="norc-construction-sign"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-bulb-63"></span>
                        <h5>Innovation</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-bulb-63"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-paper-diploma"></span>
                        <h5>Quality</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-paper-diploma"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-chess-knight"></span>
                        <h5>Integrity</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-chess-knight"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-strategy"></span>
                        <h5>Strategy</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a menas vitae.</p>
                        <div class="facility-shape"> <span class="norc-strategy"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility"> <span class="norc-flag-points-32"></span>
                        <h5>Inclusion</h5>
                        <p>Nulla quis effi vivento acus suvina sene in atue eduis euro vesatien arcum the onte nisl auctor a menas vitae.</p>
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
        <div class="section-padding bg-img bg-fixed section-padding" data-background="{{ asset('template/img/banner2.jpg')}}" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
                                <i class="front norc-design"></i>
                                <i class="back norc-design"></i>
                            </span>
                            <h3 class="count">675</h3>
                            <h6><span>01.</span> Projects Design</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
                                <i class="font norc-b-meeting"></i>
                                <i class="back norc-b-meeting"></i>
                            </span>
                            <h3 class="count">450</h3>
                            <h6><span>02.</span> Happy Clients</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item text-center"> <span class="icon">
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
    <!-- News -->
    <section class="news section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Latest News</span></div>
                    <div class="section-title">Our <span>Blog</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/5.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>10</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Construction Delivery Methods Training</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-new-construction"></i> </div>
                                        <div class="card-news-date-text">Construction</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/3.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Modern Glass Building in Construction</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-pantone"></i> </div>
                                        <div class="card-news-date-text">Interior</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/4.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Factory renovation architecture works</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-factory"></i> </div>
                                        <div class="card-news-date-text">Industrial</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div><div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/2.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Construction Site Security Guide</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-new-construction"></i> </div>
                                        <div class="card-news-date-text">Construction</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/1.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Airport Runway Construction Process</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-factory"></i> </div>
                                        <div class="card-news-date-text">Industrial</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('template/img/news/6.jpg')}}" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>12</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <h5><a href="post.html">Exterior House Colors Combinations</a></h5>
                                <div class="divider"></div>
                                <div class="news-info">
                                    <div class="split-content news-info-left">
                                        <div class="news-icon-wrapper"> <i class="norc-pantone"></i> </div>
                                        <div class="card-news-date-text">Interior</div>
                                    </div>
                                    <div class="split-content news-info-right"> <a href="#" class="link-btn" tabindex="0">Read more</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video & Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('template/img/banner.jpg')}}" data-overlay-dark="4">
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
                                <div class="item"> <span class="quote"><img src="{{ asset('template/img/quot.png')}}" alt=""></span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment2.jpg')}}" alt=""> </div>
                                        <div class="cont">
                                            <h6>Jason Brown</h6> <span>Hollywood Hills, CA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="img/quot.png" alt="">
                                    </span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment3.jpg')}}" alt=""> </div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Los Angeles, CA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                        <img src="img/quot.png" alt="">
                                    </span>
                                    <p class="v-border">Company kaya nisl ullamcorper the duru metu enna lophare mavna busnini viventa the ornare ipsuma. Curabitur magna pentesue the miss tenis vitae.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="{{ asset('template/img/team/comment.jpg')}}" alt=""> </div>
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

@endsection