@extends('frontend.layouts.app')

@section('title', 'Company Certificates | Omkar Engineering & Fabrication')

@section('content')

    <!-- Header Banner -->
    <section class="banner-header banner-img-top section-padding valign bg-img bg-fixed" data-overlay-dark="5"
        data-background="{{ asset('template/img/slider/1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Compliance & Accreditations</h6>
                    <h1>Company <span>Certificates</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section class="certificates-section section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-60">
                    <div class="section-subtitle">Verified Quality & Accreditations</div>
                    <div class="section-title">Our <span>Certificates</span></div>
                    <p class="section-desc mx-auto" style="max-width: 750px; color: #666; font-size: 15px;">
                        Omkar Engineering & Fabrication operates under the highest standards of manufacturing excellence, 
                        precision engineering, and quality compliance recognized by the Government of India.
                    </p>
                </div>
            </div>

            <!-- Certificate Cards Grid - Equal Size Row -->
            <div class="row justify-content-center align-items-stretch">
                <!-- Certificate 1: ZED Certificate -->
                <div class="col-lg-5 col-md-6 mb-40 d-flex">
                    <div class="cert-card-wrapper w-100">
                        <!-- Viewer Container -->
                        <div class="cert-viewer-box">
                            <!-- Top Bar -->
                            <div class="cert-viewer-top">
                                <span class="cert-badge"><i class="fa fa-shield"></i> Government Certified</span>
                                <a href="{{ asset('storage/documents/Bronze.pdf') }}" target="_blank" class="cert-popout-btn" title="Open Full PDF in New Tab">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </div>

                            <!-- Certificate Document Preview (Fixed uniform height) -->
                            <div class="cert-preview-img-wrap">
                                <a href="{{ asset('storage/documents/zed-bronze-certificate.png') }}" class="img-zoom" title="ZED Bronze Certificate - Omkar Engineers & Fabricators">
                                    <img src="{{ asset('storage/documents/zed-bronze-certificate.png') }}" alt="ZED Bronze Certificate" class="cert-img">
                                    <div class="cert-hover-overlay">
                                        <div class="cert-hover-content">
                                            <i class="fa fa-search-plus"></i>
                                            <span>Click to Enlarge</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Bottom Control Bar (matching reference design) -->
                            <div class="cert-viewer-bottom">
                                <span class="page-counter">Page 1 / 1</span>
                                <div class="viewer-actions">
                                    <a href="{{ asset('storage/documents/zed-bronze-certificate.png') }}" class="img-zoom btn-viewer-tool" title="Zoom In">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    <a href="{{ asset('storage/documents/Bronze.pdf') }}" target="_blank" class="btn-viewer-tool" title="View Full PDF">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Certificate Title & Info Below -->
                        <div class="cert-meta text-center">
                            <div>
                                <h3 class="cert-title">ZED CERTIFICATE</h3>
                                <p class="cert-category">MSME Sustainable (ZED) Bronze Certification</p>
                                <p class="cert-details">
                                    <strong>Certificate No:</strong> 14092024_325620<br>
                                    <strong>Unit Name:</strong> Omkar Engineers & Fabricators
                                </p>
                            </div>
                            <div class="cert-btns mt-10">
                                <a href="{{ asset('storage/documents/zed-bronze-certificate.png') }}" class="img-zoom button-secondary me-2">
                                    <span><i class="fa fa-eye"></i> View</span>
                                </a>
                                <a href="{{ asset('storage/documents/Bronze.pdf') }}" download="ZED_Bronze_Certificate_Omkar_Engineers.pdf" class="button-primary">
                                    <span><i class="fa fa-download"></i> Download PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certificate 2: MSME Certificate -->
                <div class="col-lg-5 col-md-6 mb-40 d-flex">
                    <div class="cert-card-wrapper w-100">
                        <!-- Viewer Container -->
                        <div class="cert-viewer-box">
                            <!-- Top Bar -->
                            <div class="cert-viewer-top">
                                <span class="cert-badge"><i class="fa fa-certificate"></i> Official MSME</span>
                                <a href="{{ asset('storage/documents/OMKAR%20ENGINEERS%20%26%20FABRICATORS.pdf') }}" target="_blank" class="cert-popout-btn" title="Open Full PDF in New Tab">
                                    <i class="fa fa-external-link"></i>
                                </a>
                            </div>

                            <!-- Certificate Document Preview (Fixed uniform height) -->
                            <div class="cert-preview-img-wrap">
                                <a href="{{ asset('storage/documents/msme-udyam-certificate.png') }}" class="img-zoom" title="MSME Udyam Registration Certificate - Omkar Engineers & Fabricators">
                                    <img src="{{ asset('storage/documents/msme-udyam-certificate.png') }}" alt="MSME Certificate" class="cert-img">
                                    <div class="cert-hover-overlay">
                                        <div class="cert-hover-content">
                                            <i class="fa fa-search-plus"></i>
                                            <span>Click to Enlarge</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Bottom Control Bar (matching reference design) -->
                            <div class="cert-viewer-bottom">
                                <span class="page-counter">Page 1 / 5</span>
                                <div class="viewer-actions">
                                    <a href="{{ asset('storage/documents/msme-udyam-certificate.png') }}" class="img-zoom btn-viewer-tool" title="Zoom In">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                    <a href="{{ asset('storage/documents/OMKAR%20ENGINEERS%20%26%20FABRICATORS.pdf') }}" target="_blank" class="btn-viewer-tool" title="View Full PDF">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Certificate Title & Info Below -->
                        <div class="cert-meta text-center">
                            <div>
                                <h3 class="cert-title">MSME CERTIFICATE</h3>
                                <p class="cert-category">Udyam Registration Certificate (Govt. of India)</p>
                                <p class="cert-details">
                                    <strong>Udyam Reg. No:</strong> UDYAM-GJ-01-0359460<br>
                                    <strong>Enterprise:</strong> Omkar Engineers & Fabricators
                                </p>
                            </div>
                            <div class="cert-btns mt-10">
                                <a href="{{ asset('storage/documents/msme-udyam-certificate.png') }}" class="img-zoom button-secondary me-2">
                                    <span><i class="fa fa-eye"></i> View</span>
                                </a>
                                <a href="{{ asset('storage/documents/OMKAR%20ENGINEERS%20%26%20FABRICATORS.pdf') }}" download="MSME_Udyam_Certificate_Omkar_Engineers.pdf" class="button-primary">
                                    <span><i class="fa fa-download"></i> Download PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Highlights Strip -->
            <div class="row mt-30">
                <div class="col-md-12">
                    <div class="cert-trust-banner">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mb-1 text-white">Need Official Verification or Vendor Registration Copies?</h4>
                                <p class="mb-0 text-white-50">You can download our official certified documents directly or get in touch with our compliance team for tender registrations.</p>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <a href="{{ route('contact') }}" class="button-primary">
                                    <span>Contact Compliance</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Custom In-page CSS for Equal-size Certificate Cards -->
    <style>
        .cert-card-wrapper {
            background: #ffffff;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #eaeaea;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .cert-card-wrapper:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        .cert-viewer-box {
            background: #1e1e1e;
            border-radius: 6px;
            overflow: hidden;
            border: 2px solid #2a2a2a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
        }

        .cert-viewer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #252525;
            padding: 8px 14px;
            border-bottom: 1px solid #333333;
        }

        .cert-badge {
            color: #008acf;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cert-popout-btn {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            font-size: 13px;
            transition: all 0.2s ease;
        }

        .cert-popout-btn:hover {
            background: #008acf;
            color: #ffffff;
        }

        /* Fixed identical preview height for both portrait & landscape certificates */
        .cert-preview-img-wrap {
            position: relative;
            background: #2b2d31;
            height: 480px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 14px;
        }

        .cert-preview-img-wrap a.img-zoom {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            position: relative;
            text-decoration: none;
        }

        .cert-img {
            max-width: 100% !important;
            max-height: 100% !important;
            width: auto !important;
            height: auto !important;
            object-fit: contain;
            display: block;
            margin: auto;
            transition: transform 0.4s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
            background: #ffffff;
        }

        .cert-preview-img-wrap:hover .cert-img {
            transform: scale(1.02);
        }

        .cert-hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 138, 207, 0.65);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .cert-preview-img-wrap:hover .cert-hover-overlay {
            opacity: 1;
        }

        .cert-hover-content {
            color: #ffffff;
            text-align: center;
        }

        .cert-hover-content i {
            font-size: 32px;
            display: block;
            margin-bottom: 6px;
        }

        .cert-hover-content span {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cert-viewer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #252525;
            padding: 8px 14px;
            border-top: 1px solid #333333;
        }

        .page-counter {
            color: #aaaaaa;
            font-size: 12px;
            font-weight: 500;
        }

        .viewer-actions {
            display: flex;
            gap: 8px;
        }

        .btn-viewer-tool {
            color: #cccccc;
            background: rgba(255, 255, 255, 0.08);
            width: 26px;
            height: 26px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 3px;
            font-size: 12px;
            transition: all 0.2s ease;
        }

        .btn-viewer-tool:hover {
            background: #008acf;
            color: #ffffff;
        }

        .cert-meta {
            padding-top: 18px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .cert-title {
            font-size: 20px;
            font-weight: 800;
            color: #111111;
            letter-spacing: 1px;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-family: 'Syne', sans-serif;
        }

        .cert-category {
            font-size: 14px;
            color: #008acf;
            font-weight: 600;
            margin-bottom: 6px;
            min-height: 22px;
        }

        .cert-details {
            font-size: 13px;
            color: #555555;
            line-height: 1.5;
            margin-bottom: 15px;
            min-height: 42px;
        }

        .cert-btns {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .cert-btns .button-primary,
        .cert-btns .button-secondary {
            padding: 10px 22px;
            font-size: 13px;
        }

        .cert-trust-banner {
            background: linear-gradient(135deg, #161c24 0%, #008acf 100%);
            border-radius: 8px;
            padding: 35px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.8) !important;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .cert-preview-img-wrap {
                height: 360px;
            }
            .cert-btns {
                flex-direction: column;
            }
            .cert-btns a {
                width: 100%;
                text-align: center;
                margin-right: 0 !important;
                margin-bottom: 8px;
            }
        }
    </style>

@endsection
