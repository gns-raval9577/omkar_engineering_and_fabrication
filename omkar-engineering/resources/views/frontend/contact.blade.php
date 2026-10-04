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
                <div class="col-md-5 mb-60">
                    <h5>Contact Information</h5>
                    <p class="mb-30">Contact nullam usamcoen the drana duru metus utah osare asya mavna busnini viventa the
                        ornare ipsum. Curabitur luctus mana numsation pellentesque the miss tenis mollie.</p>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-phone"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Call us</div>
                            <div class="contact-link-text"><a href="tel:+918141133144" style="color: inherit;">+91 81411 33144</a></div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="fa fa-whatsapp"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">WhatsApp</div>
                            <div class="contact-link-text"><a href="https://wa.me/918141133144" target="_blank" style="color: inherit;">+91 81411 33144</a></div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-mail"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Send us an email</div>
                            <div class="contact-link-text"><a href="mailto:omkarengineers.fab@gmail.com" style="color: inherit;">omkarengineers.fab@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><span class="norc-square-pin"></span></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Visit our office</div>
                            <div class="contact-link-text">
                                <a href="https://www.google.com/maps/place/22%C2%B058'00.5%22N+72%C2%B037'52.3%22E/@22.9668007,72.6286049,17z/data=!3m1!4b1!4m4!3m3!8m2!3d22.9668007!4d72.6311798?hl=en" target="_blank" style="color: inherit;">
                                    C/42, Maruti Industrial Estate, Opp. Kirti Tools,<br>
                                    Phase-1, Vatva GIDC, Ahmedabad - 382445
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="form-wrap">
                        <div class="form-box">
                            <h5>Get in touch</h5>
                            <form method="post" class="contact__form">
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
                                        <button class="button-secondary mt-15"><a href="#0"><span>Send
                                                    Message</span></a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <iframe
                        src="https://maps.google.com/maps?q=22.9668007,72.6311798&amp;hl=en&amp;z=17&amp;output=embed"
                        width="100%" height="600" style="border:0; filter: none; -webkit-filter: none;" allowfullscreen="" loading="lazy"></iframe>
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
                                <h6>What is the experience of your employees?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>What tools do you use in construction?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Do you have free home delivery in the US?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum nulla.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Can you help with the construction documents?</h6>
                            </div>
                            <div class="accordion-info" style="display: none;">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
