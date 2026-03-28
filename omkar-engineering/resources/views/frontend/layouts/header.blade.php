    <!-- Top Navbar -->
    <div class="main-header">
        <div class="header-top">
            <div class="container">
                <div class="top-outer clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="tel:+12033334444"><span class="fa fa-phone"></span>+1 203-333-4444</a></li>
                            <li><a href="mailto:info@construction.com"><span
                                        class="fa fa-envelope"></span>info@construction.com</a></li>
                            <li><a href="https://goo.gl/maps/zgdqkg4hFFR8pfDS8" target="_blank"><span
                                        class="fa fa-map-marker"></span>24 King St, SC 29401 USA</a></li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <li>
                                <a href="#" class="fa fa-whatsapp"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-instagram"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-youtube-play"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index-2.html"> <img src="{{ asset('template/img/logo-dark.png') }}"
                        class="logo-img" alt="sdfs"> </a>
                <!-- <a class="logo" href="index.html"> <h2>Norc.</h2></a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    {{-- <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html" class="dropdown-item active"><span>Home Layout 01</span></a></li>
                            <li><a href="index2.html" class="dropdown-item"><span>Home Layout 02</span></a></li>
                            <li><a href="index3.html" class="dropdown-item"><span>Home Layout 03</span></a></li>
                            <li><a href="index4.html" class="dropdown-item"><span>Home Layout 04</span></a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Product</a></li>
                    {{-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Services <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html" class="dropdown-item"><span>Services 01</span></a></li>
                            <li><a href="services2.html" class="dropdown-item"><span>Services 02</span></a></li>
                            <li><a href="services3.html" class="dropdown-item"><span>Services 03</span></a></li>
                            <li><a href="services-page.html" class="dropdown-item"><span>Services Page</span></a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Project</a></li>
                    {{-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Projects <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="projects.html" class="dropdown-item"><span>Projects 01</span></a></li>
                            <li><a href="projects2.html" class="dropdown-item"><span>Projects 02</span></a></li>
                            <li><a href="project-page.html" class="dropdown-item"><span>Projects Page</span></a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Resources <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="image-gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
                            <li><a href="faqs.html" class="dropdown-item"><span>Certificate</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Blog</span></a></li>
                            <li><a href="testimonials.html" class="dropdown-item"><span>Testimonial</span></a></li>
                            <li><a href="faqs.html" class="dropdown-item"><span>Faqs</span></a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="image-gallery.html" class="dropdown-item"><span>Image Gallery</span></a></li>
                            <li><a href="video-gallery.html" class="dropdown-item"><span>Video Gallery</span></a></li>
                            <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="careers.html" class="dropdown-item"><span>Careers</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="fa fa-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="testimonials.html" class="dropdown-item"><span>Testimonials</span></a></li>
                                    <li><a href="faqs.html" class="dropdown-item"><span>Faqs</span></a></li>
                                    <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html" class="dropdown-item"><span>Blog 01</span></a></li>
                            <li><a href="blog2.html" class="dropdown-item"><span>Blog 02</span></a></li>
                            <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Downloads <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html" class="dropdown-item"><span>Company Brochure</span></a></li>
                            <li><a href="blog2.html" class="dropdown-item"><span>E-Card / Visiting Card</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
