@extends('livewire.client.layouts.app')
@section('content')

        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Build beautiful website & mobile apps.</h1>
                            <span class="subtitle">Create live segments and target the right people for messages based on their behaviors.</span>
                            <a href="contact.html" class="axil-btn btn-fill-primary btn-large">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                                <img src="{{ Vite::asset('resources/client-assets/media/banner/window.png') }}" alt="Laptop">
                            </div>
                            <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                                <img src="{{ Vite::asset('resources/client-assets/media/banner/laptop-poses.png') }}" alt="Laptop">
                            </div>
                            <ul class="list-unstyled shape-group">
                                <li class="shape shape-1" data-sal="slide-left" data-sal-duration="500" data-sal-delay="800">
                                    <img src="{{ Vite::asset('resources/client-assets/media/banner/chat-group.png') }}" alt="chat">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-21">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-39.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-38.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-14.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-14.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-14.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-40.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="{{ Vite::asset('resources/client-assets/media/others/bubble-41.png') }}" alt="Bubble">
                </li>
            </ul>
        </section>




        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2 bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services we can help you with</h2>
                    <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid active">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-1.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-design.html">Design</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-design.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-2.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-development.html">Development</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-development.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-3.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-marketing.html">Online marketing</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-marketing.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-4.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-business.html">Business</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-business.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-5.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-technology.html">Technology</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-technology.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid">
                            <div class="thumbnail">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-6.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/line-9.png') }}" alt="Circle"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-42.png') }}" alt="Circle"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-43.png') }}" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=       Case Study Area Start       =-->
        <!--=====================================-->
        <section class="section section-padding-equal case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-content" data-slick='{"infinite": true,"arrows": false, "dots": true, "slidesToShow": 1, "asNavFor": ".featured-thumbnail"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Logo, identity &amp; web design for Uber</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="15">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="60">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Website and web Development, Design</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="20">20</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="60">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured">
                                    <div class="section-heading heading-left">
                                        <span class="subtitle">Featured Case Study</span>
                                        <h2 class="title">Branding, website &amp; digital marketing for Apple</h2>
                                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                                        <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                        <a href="single-case-study.html" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                                    </div>
                                    <div class="case-study-counterup">
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="15">15</span>
                                                <span class="symbol">%</span>
                                            </h2>
                                            <span class="counter-title">ROI increase</span>
                                        </div>
                                        <div class="single-counterup">
                                            <h2 class="count-number">
                                                <span class="number count" data-count="60">60</span>
                                                <span class="symbol">k</span>
                                            </h2>
                                            <span class="counter-title">Monthly website visits</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                        <div class="slick-slider slick-dot-nav featured-thumbnail" data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/others/case-study-4.png') }}" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/others/case-study-5.png') }}" alt="travel">
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="case-study-featured-thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/others/case-study-6.png') }}" alt="travel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        About Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-equal bg-color-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-us">
                            <div class="section-heading heading-left mb-0">
                                <span class="subtitle">About Us</span>
                                <h2 class="title mb--40">We do design, code & develop.</h2>
                                <p>Nulla et velit gravida, facilisis quam a, molestie ante. Mauris placerat suscipit dui, eget maximus tellus blandit a. Praesent non tellus sed ligula commodo blandit in et mauris. Quisque efficitur ipsum ut dolor molestie pellentesque. </p>
                                <p>Nulla pharetra hendrerit mi quis dapibus. Quisque luctus, tortor a venenatis fermentum, est lacus feugiat nisl, id pharetra odio enim eget libero. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="contact-form-box">
                            <h3 class="title">Get a free Keystroke quote now</h3>
                            <form method="POST" action="https://new.axilthemes.com/demo/template/abstrak/mail.php" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="contact-name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="contact-company" placeholder="+123456789">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn">Get Free Quote</button>
                                </div>
                                <input type="hidden" class="form-control" name="contact-message" value="Null">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-7.png') }}" alt="Bubble"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/line-4.png') }}" alt="line"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/line-5.png') }}" alt="line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding-2">
            <div class="container">
                <div class="section-heading heading-left mb--40">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-1.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
                                    <span class="subtitle">Full Branding, Website, App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-2.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
                                    <span class="subtitle">Logo, Website & Mobile App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-3.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
                                    <span class="subtitle">Website, UI/UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-4.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
                                    <span class="subtitle">Branding, Website, IOS App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-5.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Social Engagement</a></h4>
                                    <span class="subtitle">Design, Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="{{ Vite::asset('resources/client-assets/media/project/project-6.png') }}" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Web Application</a></h4>
                                    <span class="subtitle">Logo, Webapp, App</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/circle-2.png') }}" alt="circle"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-2.png') }}" alt="Line"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-1.png') }}" alt="Line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Featured Case Study</span>
                    <h2 class="title">Design startup movement</h2>
                    <p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress active">
                            <div class="icon">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-7.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="15">15</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-8.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="360">360</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/icon-9.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="600">600</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Specialist</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="{{ Vite::asset('resources/client-assets/media/icon/apple.png') }}" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="64">64</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media') }}/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-42.png') }}" alt="Circle"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-43.png') }}" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Testimonial Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Testimonial</span>
                    <h2 class="title">From getting started</h2>
                    <p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="testimonial-grid active">
                            <span class="social-media"><img src="{{ Vite::asset('resources/client-assets/media/icon/yelp-2.png') }}" alt="Yelp"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/testimonial/testimonial-1.png') }}" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Darrell Steward</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="{{ Vite::asset('resources/client-assets/media/icon/google-2.png') }}" alt="google"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/testimonial/testimonial-2.png') }}" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Savannah Nguyen</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                        <div class="testimonial-grid">
                            <span class="social-media"><img src="{{ Vite::asset('resources/client-assets/media/icon/fb-2.png') }}" alt="Facebook"></span>
                            <p>“ Donec metus lorem, vulputate
                                at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="{{ Vite::asset('resources/client-assets/media/testimonial/testimonial-3.png') }}" alt="Google Review">
                                </div>
                                <div class="content">
                                    <span class="name">Floyd Miles</span>
                                    <span class="designation">Executive Chairman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-4 list-unstyled">
                <li class="shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-1.png') }}" alt="Bubble"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Pricing Area Start       	=-->
        <!--=====================================-->
        <section class="section bg-color-light section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Pricing Plan</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>Flexible pricing options for freelancers <br> and design teams.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link" id="yearly-plan-btn" type="button">Billed yearly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active">
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$119.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$19.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$219.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$29.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$559.99</span>
                                        <span class="duration">/yearly</span>
                                    </div>
                                    <div class="monthly-pricing">
                                        <span class="amount">$59.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/line-1.png') }}" alt="shape"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-4.png') }}" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Top Clients</span>
                    <h2 class="title">We’ve built solutions for...</h2>
                    <p>Design anything from simple icons to fully featured websites and applications.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                        <div class="brand-grid active">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-1.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-2.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-3.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-4.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-5.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-6.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-7.png') }}" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                        <div class="brand-grid">
                            <img src="{{ Vite::asset('resources/client-assets/media/brand/brand-8.png') }}" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/line-9.png') }}" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">What's Going On</span>
                    <h2 class="title">Latest stories</h2>
                    <p>News From Abstrak And Around The World Of Web Design And Complete Solution of Online Digital Marketing </p>
                </div>
                <div class="row g-0">
                    <div class="col-xl-6" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list active">
                            <div class="post-thumbnail">
                                <a href="single-blog-2.html"><img src="{{ Vite::asset('resources/client-assets/media/blog/blog-1.png') }}" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-2.html">How To Use a Remarketing Strategy To Get More</a></h5>
                                <p>Demand generation is a constant struggle for any business. Each marketing strategy you employ has...</p>
                                <a href="single-blog-2.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                        <div class="blog-list border-start">
                            <div class="post-thumbnail">
                                <a href="single-blog-3.html"><img src="{{ Vite::asset('resources/client-assets/media/blog/blog-2.png') }}" alt="Blog Post"></a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a href="single-blog-3.html">SEO Statistics You Should Know in 2021</a></h5>
                                <p>Organic search has the potential to capture more than 40 percent of your gross revenue...</p>
                                <a href="single-blog-3.html" class="more-btn">Learn more<i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-1 list-unstyled">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-1.png') }}" alt="bubble"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/line-1.png') }}" alt="bubble"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/line-2.png') }}" alt="bubble"></li>
                <li class="shape shape-4"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-2.png') }}" alt="bubble"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ Vite::asset('resources/client-assets/media/others/chat-group.png') }}" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="{{ Vite::asset('resources/client-assets/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="{{ Vite::asset('resources/client-assets/media/others/bill-pay.png') }}" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-12.png') }}" alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-13.png') }}" alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-14.png') }}" alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-15.png') }}" alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ Vite::asset('resources/client-assets/media/others/bubble-16.png') }}" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                            <li><a href="https://www.snapchat.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-snapchat-ghost"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p>Fusce varius, dolor tempor interdum tristique, dui urna bib
                                        endum magna, ut ullamcorper purus</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="service-design.html">Logo &amp; Branding</a></li>
                                                <li><a href="service-development.html">Website Development</a></li>
                                                <li><a href="service-development.html">Mobile App Development</a></li>
                                                <li><a href="service-marketing.html">Search Engine Optimization</a></li>
                                                <li><a href="service-marketing.html">Pay-Per-Click</a></li>
                                                <li><a href="service-marketing.html">Social Media Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="case-study.html">Case Studies</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/">Axilthemes</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <livewire:client.components.SideMenu />
    </div>

@endsection

