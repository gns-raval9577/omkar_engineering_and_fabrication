@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="{{ asset('template/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h6>Get in touch</h6>
                    <h1>Contact <span>Us</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-4 mb-60">
                    <h5>Contact Information</h5>
                    <p class="mb-30">Contact Omkar Engineering and Fabrication for quality fabrication services and
                        reliable engineering solutions.</p>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-phone"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Call us</div>
                            <div class="contact-link-text">+91 8141133144</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="fa fa-fax"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Fax Number</div>
                            <div class="contact-link-text">+91 8141133144</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-mail"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Send us an email</div>
                            <div class="contact-link-text">omkarengineers.fab@gmail.com</div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-square-pin"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Visit our office</div>
                            <div class="contact-link-text">C/42,Maruti Industrial Estate ,Opp.Kirti Tools,Phase-1,Vatva
                                GIDC,Ahmedabad-382445</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-2">
                    <div class="form-wrap">
                        <div class="form-box">
                            <h5>Get in touch</h5>
                            <form method="POST" action="{{ route('contact.send') }}" class="contact__form">
                                @csrf

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully. </div>
                                    </div>
                                </div>
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="name" type="text" placeholder="Your Name *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" placeholder="Your Email *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="Your Number *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="subject" type="text" placeholder="Subject *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button-secondary mt-15">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map-color animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps?q=22.9667998,72.6311831&hl=en&z=17&output=embed" width="100%"
                        height="600" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    <section class="section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Frequently Asked Questions</p>
                    <div class="section-title">Answer <span>Questions</span></div>
                </div>
            </div>
            <div class="row">
                <!-- Accordion -->
                <div class="col-md-8 offset-md-2 faqs-accordion mb-30">
                    <div class="accordion">
                        <div class="item">
                            <div class="title">
                                <h6>What services do you provide?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>We provide engineering and fabrication services including structural fabrication, metal
                                    works, welding, and custom industrial solutions tailored to client requirements.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Do you handle custom fabrication projects?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>Yes, we specialize in custom fabrication projects based on your design, size, and
                                    material requirements with high precision and quality standards.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>What materials do you work with?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>We work with a variety of materials including mild steel, stainless steel, aluminum, and
                                    other metals depending on the project needs.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>How can I get a quotation?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>You can contact us with your project details, drawings, or requirements. Our team will
                                    review and provide a competitive quotation promptly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
