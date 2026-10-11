@extends('frontend.layouts.app')

@section('title', $project->title . ' - Project Details')

@section('content')

    <!-- Project Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @php
                $sliderImages = !empty($project->slider_images) ? $project->slider_images : [$project->image];
            @endphp
            @foreach($sliderImages as $sliderImg)
                <div class="item bg-img" data-overlay-dark="2" data-background="{{ \App\Models\Project::resolveImageUrl($sliderImg, 'template/img/interior/1.jpg') }}" style="background-image: url('{{ \App\Models\Project::resolveImageUrl($sliderImg, 'template/img/interior/1.jpg') }}');"></div>
            @endforeach
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
                @if($project->location)
                    <div class="section-subtitle">{{ $project->location }}</div>
                @else
                    <div class="section-subtitle">{{ $project->category ?? 'Engineering Project' }}</div>
                @endif
                <div class="section-title">{{ $project->title }}</div>
            </div>
            <div class="row">
                <!-- about -->
                <div class="col-md-9">
                    <div class="row">
                        {!! $project->description !!}

                        @if(!empty($project->gallery_images) && count($project->gallery_images) > 0)
                            <div class="row mb-30">
                                @foreach($project->gallery_images as $galleryImg)
                                    <div class="col-md-6 gallery-item mb-20">
                                        <a href="{{ \App\Models\Project::resolveImageUrl($galleryImg) }}" title="{{ $project->title }}" class="img-zoom">
                                            <div class="gallery-box">
                                                <div class="gallery-img">
                                                    <img src="{{ \App\Models\Project::resolveImageUrl($galleryImg) }}"
                                                        class="img-fluid mx-auto d-block" alt="{{ $project->title }}" style="width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 6px;">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(!empty($project->included_items) && count($project->included_items) > 0)
                            <h5 style="margin-top: 15px; margin-bottom: 15px;">What was included in the project?</h5>
                            <ol class="number" style="margin-bottom: 25px;">
                                @foreach($project->included_items as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                </div>
                <!-- details -->
                <div class="col-md-2 offset-md-1">
                    <ul class="content nor-list nor-list-divider">
                        @if($project->client)
                            <li class="author">
                                <strong>Client</strong>
                                <span>{{ $project->client }}</span>
                            </li>
                        @endif
                        @if($project->project_date)
                            <li class="date">
                                <strong>Date</strong>
                                <span>{{ $project->project_date }}</span>
                            </li>
                        @endif
                        @if($project->category)
                            <li class="category">
                                <strong>Category</strong>
                                <span><a href="{{ route('project') }}">{{ $project->category }}</a></span>
                            </li>
                        @endif
                    </ul>
                    <div class="share-icons mb-30">
                        <ul class="list-inline">
                            <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($project->title) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&description={{ urlencode($project->title) }}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://wa.me/?text={{ urlencode($project->title . ' - ' . request()->fullUrl()) }}" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    @if($project->website_url)
                        <a href="{{ $project->website_url }}" target="_blank" class="button-secondary">Visit Site</a>
                    @else
                        <a href="{{ route('contact') }}?service={{ urlencode($project->category ?? $project->title) }}" class="button-secondary">Request Quote</a>
                    @endif

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
                            @if(isset($prevProject) && $prevProject)
                                <a href="{{ route('project-details', $prevProject->slug) }}"> <i class="norc-arrow-left"></i> Previous Project</a>
                            @else
                                <a href="{{ route('project') }}" style="opacity: 0.6;"> <i class="norc-arrow-left"></i> All Projects</a>
                            @endif
                        </div>
                        <a href="{{ route('project') }}"><i class="fa fa-th-large"></i></a>
                        <div class="projects-prev-next-right">
                            @if(isset($nextProject) && $nextProject)
                                <a href="{{ route('project-details', $nextProject->slug) }}">Next Project <i class="norc-arrow-right"></i></a>
                            @else
                                <a href="{{ route('project') }}" style="opacity: 0.6;">All Projects <i class="norc-arrow-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()
