@extends('frontend.layouts.app')

@section('title', $product->title . ' | Products | Omkar Engineering & Fabrication')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="5"
        data-background="{{ $product->image ? asset('storage/' . $product->image) : asset('template/img/slider/1.jpg') }}"
        style="background-image: url('{{ $product->image ? asset('storage/' . $product->image) : asset('template/img/slider/1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h6><a href="{{ route('product') }}" style="color: #008acf;">Products</a> / Details</h6>
                    <h1>{{ $product->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>About this Product</h5>
                    @if ($product->sort_description)
                        <div class="product-summary mb-30 p-3" style="font-size: 17px; line-height: 1.7; color: #161c24; font-weight: 500; border-left: 4px solid #008acf; background: #f8f9fa; border-radius: 0 6px 6px 0;">
                            {{ $product->sort_description }}
                        </div>
                    @endif
                    @if ($product->description)
                        <div class="product-full-desc mb-40" style="color: #555; font-size: 16px; line-height: 1.8;">
                            {!! nl2br(e($product->description)) !!}
                        </div>
                    @endif
                </div>

                <!-- Product Gallery: Main Image + Related Product Images from Admin side -->
                @php
                    $galleryList = collect();
                    if ($product->image) {
                        $galleryList->push((object)[
                            'title' => $product->title . ' (Main Image)',
                            'image' => $product->image,
                        ]);
                    }
                    if ($product->images && $product->images->isNotEmpty()) {
                        foreach ($product->images as $extra) {
                            if ($extra->image) {
                                $galleryList->push($extra);
                            }
                        }
                    }
                @endphp

                @if ($galleryList->isNotEmpty())
                    <div class="col-md-12 mt-20 mb-20">
                        <div class="section-subtitle">Visual Showcase</div>
                        <div class="section-title">Product <span>Images</span></div>
                    </div>

                    @foreach ($galleryList as $item)
                        <div class="col-lg-4 col-md-6 mb-30 gallery-item">
                            <a href="{{ asset('storage/' . $item->image) }}" title="{{ $product->title }}" class="img-zoom d-block w-100">
                                <div class="gallery-box w-100" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); background: #f8f9fa;">
                                    <div class="gallery-img w-100" style="height: 270px; overflow: hidden; position: relative;">
                                        <img src="{{ asset('storage/' . $item->image) }}"
                                             class="w-100 h-100 d-block"
                                             style="object-fit: cover; object-position: center; transition: transform 0.4s ease;"
                                             alt="{{ $product->title }}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Other Products Carousel -->
    @if (isset($otherProducts) && $otherProducts->isNotEmpty())
        <section class="services center section-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">What We Offer</div>
                        <div class="section-title">Other <span>Products</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        @foreach ($otherProducts as $other)
                            <div class="item mb-30">
                                <div class="service-img">
                                    <div class="img" style="height: 220px; overflow: hidden;">
                                        <img src="{{ $other->image ? asset('storage/' . $other->image) : asset('template/img/services/1.jpg') }}" 
                                             style="width: 100%; height: 100%; object-fit: cover;" 
                                             alt="{{ $other->title }}">
                                    </div>
                                </div>
                                <div class="cont">
                                    <div class="service-icon"> <i class="norc-cogwheel"></i> </div>
                                    <h5><a href="{{ route('product-details', ['slug' => $other->slug ?: $other->id]) }}">{{ $other->title }}</a></h5>
                                    <p>{{ \Illuminate\Support\Str::limit($other->sort_description ?? strip_tags($other->description), 90) }}</p>
                                    <a href="{{ route('product-details', ['slug' => $other->slug ?: $other->id]) }}" class="link-btn" tabindex="0">View Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
