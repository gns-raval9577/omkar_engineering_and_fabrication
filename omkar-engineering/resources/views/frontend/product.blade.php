@extends('frontend.layouts.app')

@section('title', 'Our Products | Omkar Engineering & Fabrication')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('template/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Precision Engineering</h6>
                    <h1>Our <span>Products</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Services 2 (Products) -->
    <section class="services2 center section-padding bg-gray">
        <div class="container">
            <div class="row">
                @forelse ($products as $product)
                    @php
                        $imgUrl = $product->image ? asset('storage/' . $product->image) : asset('template/img/services/1.jpg');
                    @endphp
                    <div class="col-md-4 mb-30">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ $imgUrl }}" style="background-image: url('{{ $imgUrl }}');">
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4>{{ $product->title }}</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{{ $product->sort_description ?? \Illuminate\Support\Str::limit(strip_tags($product->description), 140) }}</p>
                                    <a href="{{ route('product-details', ['slug' => $product->slug ?: $product->id]) }}" class="link-btn" tabindex="0">View product details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center py-5">
                        <div class="p-5" style="background: #fff; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <i class="norc-cogwheel" style="font-size: 40px; color: #008acf; display: block; margin-bottom: 15px;"></i>
                            <h4>No Products Published Yet</h4>
                            <p class="text-muted mb-0">Products added from the admin dashboard will automatically appear here.</p>
                        </div>
                    </div>
                @endforelse
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

    <!-- Card text & layout safety styles -->
    <style>
        .services2 .square-flip {
            min-height: 420px;
        }

        /* Front Card Title - Increased size & high visibility */
        .services2 .square h4 {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.9), 0 1px 3px rgba(0, 0, 0, 0.8);
            line-height: 1.3;
            margin-bottom: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Subtle bottom gradient for crystal-clear title text */
        .services2 .flip-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.25) 45%, transparent 75%) !important;
            opacity: 1 !important;
            pointer-events: none;
        }

        /* Back Card Title & Description Styling */
        .services2 .square2 h4 {
            font-size: 24px;
            font-weight: 700;
            color: #161c24;
            line-height: 1.3;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .services2 .square2 p {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>

@endsection

