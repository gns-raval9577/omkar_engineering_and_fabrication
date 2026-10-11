@extends('frontend.layouts.app')

@section('title', 'Contact Us | Omkar Engineering & Fabrication')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="5"
        data-background="{{ asset('template/img/contact-banner-engineering.jpg') }}"
        style="background-image: url('{{ asset('template/img/contact-banner-engineering.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h6>Get In Touch</h6>
                    <h1>Contact <span>Omkar Engineering</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <!-- Contact Information Column -->
                <div class="col-lg-5 col-md-12 mb-60">
                    <div class="section-subtitle">Get In Touch</div>
                    <h4 style="font-weight: 700; color: #0f172a; margin-bottom: 15px; font-family: 'Syne', sans-serif;">Let's Discuss Your Fabrication Project</h4>
                    <p class="mb-30" style="color: #64748b; font-size: 15px; line-height: 1.7;">
                        Have a structural steel requirement, industrial shed project, or need custom machinery fabrication? Connect with our engineering experts for project inquiries, technical consultations, or request a customized cost estimate.
                    </p>

                    <!-- Contact Channels -->
                    <div class="contact-link mb-20" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; transition: all 0.3s ease;">
                        <div class="contact-link-icon" style="border-radius: 10px; margin-bottom: 0; margin-right: 18px;">
                            <span class="norc-phone"></span>
                        </div>
                        <div class="contact-link-content" style="flex: 1;">
                            <div class="contact-link-title" style="font-size: 16px; margin-top: 0; color: #0f172a;">Call Us Directly</div>
                            <div class="contact-link-text" style="font-size: 15px; font-weight: 600;">
                                <a href="tel:+918141133144" style="color: #008acf; text-decoration: none;">+91 81411 33144</a>
                            </div>
                            <small style="color: #94a3b8; font-size: 12px;">Mon – Sat: 9:00 AM – 7:30 PM IST</small>
                        </div>
                    </div>

                    <div class="contact-link mb-20" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; transition: all 0.3s ease;">
                        <div class="contact-link-icon" style="background-color: #25D366; border-radius: 10px; margin-bottom: 0; margin-right: 18px;">
                            <span class="fa fa-whatsapp" style="background: #25D366;"></span>
                        </div>
                        <div class="contact-link-content" style="flex: 1;">
                            <div class="contact-link-title" style="font-size: 16px; margin-top: 0; color: #0f172a;">WhatsApp Chat</div>
                            <div class="contact-link-text" style="font-size: 15px; font-weight: 600;">
                                <a href="https://wa.me/918141133144?text=Hello%20Omkar%20Engineering,%20I%20have%20an%20inquiry%20regarding%20fabrication%20services." target="_blank" style="color: #16a34a; text-decoration: none;">+91 81411 33144</a>
                            </div>
                            <small style="color: #94a3b8; font-size: 12px;">Instant Drawing Sharing & Estimates</small>
                        </div>
                    </div>

                    <div class="contact-link mb-20" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; transition: all 0.3s ease;">
                        <div class="contact-link-icon" style="border-radius: 10px; margin-bottom: 0; margin-right: 18px;">
                            <span class="norc-mail"></span>
                        </div>
                        <div class="contact-link-content" style="flex: 1;">
                            <div class="contact-link-title" style="font-size: 16px; margin-top: 0; color: #0f172a;">Official Email</div>
                            <div class="contact-link-text" style="font-size: 15px; font-weight: 600;">
                                <a href="mailto:omkarengineers.fab@gmail.com" style="color: #008acf; text-decoration: none; word-break: break-all;">omkarengineers.fab@gmail.com</a>
                            </div>
                            <small style="color: #94a3b8; font-size: 12px;">Send RFQs, Drawings & BOMs</small>
                        </div>
                    </div>

                    <div class="contact-link mb-20" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; transition: all 0.3s ease;">
                        <div class="contact-link-icon" style="border-radius: 10px; margin-bottom: 0; margin-right: 18px;">
                            <span class="norc-square-pin"></span>
                        </div>
                        <div class="contact-link-content" style="flex: 1;">
                            <div class="contact-link-title" style="font-size: 16px; margin-top: 0; color: #0f172a;">Workshop & Works Office</div>
                            <div class="contact-link-text" style="font-size: 14px; line-height: 1.5; color: #475569;">
                                <a href="https://maps.google.com/maps?q=22.9668007,72.6311798" target="_blank" style="color: inherit; text-decoration: none;">
                                    C/42, Maruti Industrial Estate, Opp. Kirti Tools,<br>
                                    Phase-1, Vatva GIDC, Ahmedabad - 382445, Gujarat, India
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Visiting Card Download -->
                    <div class="p-3" style="background: #f0f9ff; border: 1px dashed #008acf; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; gap: 15px;">
                        <div>
                            <strong style="color: #0369a1; font-size: 14px; display: block;">Digital Visiting Card</strong>
                            <small style="color: #64748b;">Save our business details directly</small>
                        </div>
                        <a href="{{ route('download.visiting-card') }}" class="btn text-white" style="background: #008acf; font-size: 13px; font-weight: 600; padding: 6px 14px; border-radius: 6px; white-space: nowrap;">
                            <i class="fa fa-download mr-1"></i> Download
                        </a>
                    </div>
                </div>

                <!-- Inquiry Form Column -->
                <div class="col-lg-6 offset-lg-1 col-md-12">
                    <div class="form-wrap">
                        <div class="form-box" style="border-radius: 14px; box-shadow: 0 20px 45px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; padding: 40px;">
                            <div class="section-subtitle mb-5">Quick Inquiry</div>
                            <h4 style="font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Syne', sans-serif;">Request A Project <span>Quotation</span></h4>
                            
                            <form method="post" id="contactInquiryForm" class="contact__form">
                                @csrf
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" id="contactSuccessMsg" style="display: none; border-radius: 8px; font-size: 14px;" role="alert">
                                            <i class="fa fa-check-circle mr-1"></i> Thank you! Your inquiry has been sent successfully. Our engineering team will review your specifications and contact you shortly.
                                        </div>
                                    </div>
                                </div>

                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-12 form-group mb-20">
                                        <input name="name" id="formName" type="text" placeholder="Your Full Name *" required style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%;">
                                    </div>
                                    <div class="col-md-6 form-group mb-20">
                                        <input name="email" id="formEmail" type="email" placeholder="Your Email Address *" required style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%;">
                                    </div>
                                    <div class="col-md-6 form-group mb-20">
                                        <input name="phone" id="formPhone" type="text" placeholder="Your Mobile Number *" required style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%;">
                                    </div>
                                    
                                    <!-- Service Selection Dropdown -->
                                    <div class="col-md-12 form-group mb-20">
                                        <select name="service" id="formService" style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%; color: #334155; background-color: #fff;">
                                            <option value="">-- Select Service of Interest --</option>
                                            @if(isset($services) && $services->isNotEmpty())
                                                @foreach($services as $srv)
                                                    <option value="{{ $srv->title }}" {{ request('service') == $srv->title ? 'selected' : '' }}>
                                                        {{ $srv->title }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value="Structural Steel Fabrication">Structural Steel Fabrication</option>
                                                <option value="Industrial Shed & Warehouse Fabrication">Industrial Shed & Warehouse Fabrication</option>
                                                <option value="Heavy Machine & Equipment Fabrication">Heavy Machine & Equipment Fabrication</option>
                                                <option value="Industrial Piping & Storage Tank Fabrication">Industrial Piping & Storage Tank Fabrication</option>
                                                <option value="Precision CNC Cutting & Machining">Precision CNC Cutting & Machining</option>
                                                <option value="Architectural & Custom Metal Fabrication">Architectural & Custom Metal Fabrication</option>
                                            @endif
                                            <option value="Other Engineering Requirement">Other Custom Requirement</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group mb-20">
                                        <input name="subject" id="formSubject" type="text" placeholder="Subject / Project Title *" value="{{ request('service') ? 'Inquiry for ' . request('service') : (request('subject') ?? '') }}" required style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%;">
                                    </div>
                                    <div class="col-md-12 form-group mb-20">
                                        <textarea name="message" id="formMessage" cols="30" rows="4" placeholder="Project Description (e.g. Dimensions, Quantity, Material Grade, Location) *" required style="border-radius: 8px; border: 1px solid #cbd5e1; padding: 12px 16px; font-size: 15px; width: 100%;"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="button-secondary w-100" style="border: none; cursor: pointer; padding: 14px 28px; font-size: 15px; font-weight: 600; border-radius: 80px;">
                                            <span>Send Inquiry &rarr;</span>
                                        </button>
                                    </div>

                                    <!-- Quick WhatsApp Alternative -->
                                    <div class="col-md-12 mt-15 text-center">
                                        <a id="btnSendWhatsApp" href="https://wa.me/918141133144?text=Hello%20Omkar%20Engineering,%20I%20have%20an%20inquiry%20regarding%20fabrication%20services." target="_blank" class="w-100" style="display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 12px 25px; border-radius: 80px; background-color: #25D366; color: #fff; font-size: 14px; font-weight: 600; text-decoration: none; font-family: 'Syne', sans-serif;">
                                            <i class="fa fa-whatsapp" style="font-size: 18px;"></i> Send Inquiry via WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
                        <div style="padding: 16px 24px; background: #0f172a; color: #fff; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <span class="norc-square-pin" style="color: #008acf; font-size: 20px;"></span>
                                <span style="font-weight: 600; font-size: 15px;">Omkar Engineering & Fabrication — Phase-1, Vatva GIDC, Ahmedabad</span>
                            </div>
                            <a href="https://www.google.com/maps/place/22%C2%B058'00.5%22N+72%C2%B037'52.3%22E/@22.9668007,72.6286049,17z" target="_blank" class="btn btn-sm" style="background: #008acf; color: #fff; border-radius: 6px; font-weight: 600; padding: 6px 14px;">
                                Open in Google Maps &rarr;
                            </a>
                        </div>
                        <iframe
                            src="https://maps.google.com/maps?q=22.9668007,72.6311798&amp;hl=en&amp;z=17&amp;output=embed"
                            width="100%" height="480" style="border:0; display: block;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="section-padding" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-50">
                    <div class="section-subtitle" style="display: inline-block; background: #e0f2fe; color: #0284c7; padding: 4px 16px; border-radius: 30px; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px;">
                        Knowledge & Guidance
                    </div>
                    <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: #0f172a; margin-bottom: 12px; font-family: 'Syne', sans-serif;">
                        Got Questions? <span style="color: #008acf;">We Have Answers</span>
                    </h2>
                    <p style="color: #64748b; max-width: 680px; margin: 0 auto; font-size: 15px; line-height: 1.7;">
                        Find clear answers about our heavy metal fabrication capabilities, CAD drawing support, quality standards, quotation turnaround, and on-site erection services across India.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 mb-30">
                    <div class="faq-container">
                        
                        <!-- FAQ Item 1 -->
                        <div class="faq-card active">
                            <div class="faq-header" role="button" tabindex="0">
                                <div class="faq-header-content">
                                    <span class="faq-badge">01</span>
                                    <h6 class="faq-title">What types of industrial engineering & structural fabrication services do you provide?</h6>
                                </div>
                                <span class="faq-icon-pill">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="faq-body" style="display: block;">
                                <div class="faq-body-content">
                                    <p>
                                        We provide end-to-end industrial fabrication solutions including heavy structural steel fabrication, industrial factory sheds, Pre-Engineered Buildings (PEB), custom machinery assemblies, heavy storage tanks, industrial piping systems, and complete on-site structural erection.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-card">
                            <div class="faq-header" role="button" tabindex="0">
                                <div class="faq-header-content">
                                    <span class="faq-badge">02</span>
                                    <h6 class="faq-title">Can you manufacture custom parts based on our CAD drawings or 3D models?</h6>
                                </div>
                                <span class="faq-icon-pill">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="faq-body" style="display: none;">
                                <div class="faq-body-content">
                                    <p>
                                        Yes, absolutely. Our fabrication team works directly from client 2D AutoCAD drawings (DWG/DXF), 3D SolidWorks/STEP models, or physical samples. We ensure tight dimensional tolerances, precision CNC cutting, and strict adherence to all engineering specifications.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-card">
                            <div class="faq-header" role="button" tabindex="0">
                                <div class="faq-header-content">
                                    <span class="faq-badge">03</span>
                                    <h6 class="faq-title">What steel grades and quality standards do you follow?</h6>
                                </div>
                                <span class="faq-icon-pill">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="faq-body" style="display: none;">
                                <div class="faq-body-content">
                                    <p>
                                        We source certified prime raw materials including IS 2062 Grade E250/E350 structural steel, Stainless Steel (SS 304, SS 316), and specialty boiler/wear plates from primary mills like SAIL, Tata Steel, and Jindal. Every job undergoes stage-wise ultrasonic/DPT weld tests, dimensional verification, and comes with full mill test certificates (MTC).
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-card">
                            <div class="faq-header" role="button" tabindex="0">
                                <div class="faq-header-content">
                                    <span class="faq-badge">04</span>
                                    <h6 class="faq-title">How quickly can I get a quotation for my project requirement?</h6>
                                </div>
                                <span class="faq-icon-pill">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="faq-body" style="display: none;">
                                <div class="faq-body-content">
                                    <p>
                                        Once you submit your drawings, Bill of Materials (BOM), or project specifications via our online quotation form or on WhatsApp (+91 81411 33144), our technical estimators review the scope and typically provide a comprehensive itemized commercial quote within 24 to 48 hours.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-card">
                            <div class="faq-header" role="button" tabindex="0">
                                <div class="faq-header-content">
                                    <span class="faq-badge">05</span>
                                    <h6 class="faq-title">Do you handle on-site installation and delivery across India?</h6>
                                </div>
                                <span class="faq-icon-pill">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </div>
                            <div class="faq-body" style="display: none;">
                                <div class="faq-body-content">
                                    <p>
                                        Yes. While our state-of-the-art fabrication facility is located in Phase-1, Vatva GIDC, Ahmedabad, we manufacture and transport fabricated structures across India. We deploy skilled on-site riggers, certified welders, and project supervisors for complete structural erection, alignment, and final handover.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Modern Engineering FAQ Accordion */
        .faq-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .faq-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
            position: relative;
        }
        .faq-card:hover {
            border-color: #cbd5e1;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.07);
            transform: translateY(-1px);
        }
        .faq-card.active {
            border-color: #008acf;
            border-left: 5px solid #008acf;
            box-shadow: 0 10px 30px rgba(0, 138, 207, 0.12);
        }
        .faq-header {
            padding: 22px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            cursor: pointer;
            user-select: none;
            background: #ffffff;
            transition: background 0.25s ease;
        }
        .faq-card.active .faq-header {
            background: #f8fafc;
        }
        .faq-header-content {
            display: flex;
            align-items: center;
            gap: 18px;
            flex: 1;
        }
        .faq-badge {
            width: 36px;
            height: 36px;
            min-width: 36px;
            border-radius: 10px;
            background: #f1f5f9;
            color: #008acf;
            font-weight: 700;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: monospace;
            letter-spacing: -0.5px;
            transition: all 0.25s ease;
        }
        .faq-card.active .faq-badge {
            background: #008acf;
            color: #ffffff;
        }
        .faq-title {
            margin: 0;
            font-size: 16.5px;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.45;
            font-family: 'Syne', sans-serif;
            transition: color 0.25s ease;
        }
        .faq-card.active .faq-title {
            color: #008acf;
        }
        .faq-icon-pill {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: 50%;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            color: #64748b;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .faq-card.active .faq-icon-pill {
            background: #008acf;
            border-color: #008acf;
            color: #ffffff;
            transform: rotate(180deg);
        }
        .faq-body {
            padding: 0 26px 24px 80px;
            background: #f8fafc;
        }
        @media (max-width: 768px) {
            .faq-body {
                padding: 0 20px 20px 20px;
            }
            .faq-header {
                padding: 18px 20px;
                gap: 14px;
            }
            .faq-header-content {
                gap: 14px;
            }
            .faq-badge {
                width: 32px;
                height: 32px;
                min-width: 32px;
                font-size: 12px;
            }
            .faq-title {
                font-size: 15px;
            }
            .faq-icon-pill {
                width: 32px;
                height: 32px;
                min-width: 32px;
                font-size: 11px;
            }
        }
        .faq-body-content {
            border-top: 1px dashed #cbd5e1;
            padding-top: 18px;
        }
        .faq-body-content p {
            color: #475569;
            font-size: 15px;
            line-height: 1.75;
            margin: 0;
        }
    </style>

    <!-- Client-Side Form Handler & WhatsApp Integration Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inquiryForm = document.getElementById('contactInquiryForm');
            const successMsg = document.getElementById('contactSuccessMsg');
            const btnWhatsApp = document.getElementById('btnSendWhatsApp');

            // Dynamic WhatsApp message link update on input changes
            function updateWhatsAppLink() {
                const name = document.getElementById('formName').value.trim();
                const phone = document.getElementById('formPhone').value.trim();
                const service = document.getElementById('formService').value;
                const subject = document.getElementById('formSubject').value.trim();
                const message = document.getElementById('formMessage').value.trim();

                let text = "Hello Omkar Engineering,\n\nI would like to inquire about your fabrication services:";
                if (name) text += "\n- Name: " + name;
                if (phone) text += "\n- Phone: " + phone;
                if (service) text += "\n- Service: " + service;
                if (subject) text += "\n- Subject: " + subject;
                if (message) text += "\n- Requirement: " + message;

                btnWhatsApp.href = "https://wa.me/918141133144?text=" + encodeURIComponent(text);
            }

            ['formName', 'formPhone', 'formService', 'formSubject', 'formMessage'].forEach(function (id) {
                const el = document.getElementById(id);
                if (el) {
                    el.addEventListener('input', updateWhatsAppLink);
                    el.addEventListener('change', updateWhatsAppLink);
                }
            });

            if (inquiryForm) {
                inquiryForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    updateWhatsAppLink();
                    
                    if (successMsg) {
                        successMsg.style.display = 'block';
                        successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }

                    // Reset form after a small delay
                    setTimeout(function () {
                        inquiryForm.reset();
                    }, 4000);
                });
            }

            // Modern FAQ Accordion Interactive Toggle
            const faqHeaders = document.querySelectorAll('.faq-card .faq-header');
            faqHeaders.forEach(function (header) {
                header.addEventListener('click', function () {
                    const currentCard = this.closest('.faq-card');
                    const currentBody = currentCard.querySelector('.faq-body');
                    const isCurrentlyActive = currentCard.classList.contains('active');

                    // Close all other FAQ cards
                    document.querySelectorAll('.faq-card').forEach(function (card) {
                        if (card !== currentCard && card.classList.contains('active')) {
                            card.classList.remove('active');
                            const otherBody = card.querySelector('.faq-body');
                            if (otherBody) {
                                if (typeof jQuery !== 'undefined') {
                                    $(otherBody).slideUp(260);
                                } else {
                                    otherBody.style.display = 'none';
                                }
                            }
                        }
                    });

                    // Toggle clicked card
                    if (isCurrentlyActive) {
                        currentCard.classList.remove('active');
                        if (currentBody) {
                            if (typeof jQuery !== 'undefined') {
                                $(currentBody).slideUp(260);
                            } else {
                                currentBody.style.display = 'none';
                            }
                        }
                    } else {
                        currentCard.classList.add('active');
                        if (currentBody) {
                            if (typeof jQuery !== 'undefined') {
                                $(currentBody).slideDown(260);
                            } else {
                                currentBody.style.display = 'block';
                            }
                        }
                    }
                });
            });
        });
    </script>

@endsection
