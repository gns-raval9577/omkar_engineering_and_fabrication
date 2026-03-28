@extends('frontend.layouts.app')

@section('title', 'project-details')

@section('content')

    <!-- Project Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="item bg-img" data-overlay-dark="1" data-background="{{ asset('template/img/interior/1.jpg') }}"></div>
            <div class="item bg-img" data-overlay-dark="1" data-background="{{ asset('template/img/interior/2.jpg') }}"></div>
            <div class="item bg-img" data-overlay-dark="1" data-background="{{ asset('template/img/interior/3.jpg') }}">
            </div>
            <div class="item bg-img" data-overlay-dark="1" data-background="{{ asset('template/img/interior/4.jpg') }}">
            </div>
            <div class="item bg-img" data-overlay-dark="1" data-background="{{ asset('template/img/interior/5.jpg') }}">
            </div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="norc-arrow-down-2"></i> </a>
        </div>
    </header>
    <!-- Project Page -->
    <section class="project-page section-padding bg-gray" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="section-subtitle">Westport, CT</div>
                <div class="section-title">Interior Remodeling</div>
            </div>
            <div class="row">
                <!-- about -->
                <div class="col-md-9">
                    <div class="row">
                        <p>Quisque pretium fermentum quam, sit amet cursus ante sollicitudin morbi consequat risu consetion
                            porttitor orci sitem iaculis nisl. Integer quis sapien nec elit ultrices euismod sit amet id
                            lacus. Sedimerdie erat. Fusce eu nulla ac nisi cursus tincidunt uis eu est dignissim lacus
                            dictum hendrerit quis vitae mi.</p>
                        <p>Quisque pretium fermentum quam, sit amet cursus ante sollicitudin vel. Morbi consequat risus
                            consequat porttitor fine sit amet iaculis nisl. Integer quis sapien nec elit ultrices euismod
                            sit amet id lacus. Sed a imperdiet erat. Duis euestioni dignissim lacus dictum hendrerit quis
                            vitae mi. Fusce eu nulla ac nisi cursus tincidunt.</p>
                        <div class="row mb-30">
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('template/img/news/b2.jpg') }}" title="Event" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('template/img/news/b2.jpg') }}"
                                                class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('template/img/news/b3.jpg') }}" title="Fashion" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('template/img/news/b3.jpg') }}"
                                                class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <h5>What was included in the project?</h5>
                        <p>Nulla vitae metus tincidunt, varius nunc quis, porta nulla. Pellentesque vel dui nec libero
                            auctor pretium id sed arcu. Nunc consequat diam id nisl blandit dignissim. Etiam commodo diam
                            dolor, at scelerisque sem finibus sit amet. Curabitur id lectus eget purus finibus laoreet.</p>
                        <ol class="number">
                            <li>Duisteyerionyer venenatis lacus gravida eros ut turpis interdum.</li>
                            <li>Sedeuter nunc volutpat mollis sapien viventa drana viventa.</li>
                            <li>Fusceler mollis augue sit amet hendrerit vestibulum.</li>
                        </ol>
                    </div>
                </div>
                <!-- details -->
                <div class="col-md-2 offset-md-1">
                    <ul class="content nor-list nor-list-divider">
                        <li class="author">
                            <strong>Client</strong>
                            <span>Micheal Brown</span>
                        </li>
                        <li class="date">
                            <strong>Date</strong>
                            <span>26 October, 2026</span>
                        </li>
                        <li class="category">
                            <strong>Category</strong>
                            <span><a href="#">Architecture</a>, <a href="#">Interior</a></span>
                        </li>
                    </ul>
                    <div class="share-icons mb-30">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <a href="#0" class="button-secondary">Visit Site</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Prev-Next Projects -->
    <section class="projects-prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="projects-prev-next-left">
                            <a href="#"> <i class="norc-arrow-left"></i> Previous Project</a>
                        </div>
                        <a href="projects.html"><i class="fa fa-th-large"></i></a>
                        <div class="projects-prev-next-right">
                            <a href="#">Next Project <i class="norc-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()
