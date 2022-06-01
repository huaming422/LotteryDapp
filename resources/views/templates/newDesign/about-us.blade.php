@extends('templates.newDesign.master')
@section('content')

    <section class="about-section section-padding">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xl-5 p-xl-0">
                    <div class="thumb">
                        <img src="{{asset('assets2/images/about-image.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 p-xl-0">
                    <div class="content">
                        <h2 class="title">A FEW WORDS ABOUT US</h2>
                        <p>Our goal is to provide our customers with the most convenient and enjoyable lottery purchasing experience.</p>
                        <p>It’s not just what we do, it’s who we are. From past to present, we are a success story still in the making.With an enthusiasm to serve, our commitment to providing fun and fair games is matched by our desire to make a positive difference in the community.</p>
                        <ul class="cmn-list">
                            <li>Playing It Global for Over a Decade</li>
                            <li>Play from Anywhere in the World</li>
                            <li>Absolutely No Commissions Taken</li>
                            <li>A Simple and Secure Service</li>
                            <li>Winning Made Easy</li>
                        </ul>
                        <a href="#0" class="cmn-btn">a bit of history</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding border-top border-bottom has_bg_image" data-background="assets/images/inner-page-banner.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Why Choose Us?</h2>
                        <p>With a selection of the world’s biggest and best international jackpots to choose from, there are already millions of reasons why you should be playing with LottoCryptoCoin lottery. But you don’t need a million reasons. All you need is six - and every one of them’s a winner:</p>
                    </div>
                </div>
            </div>
            <div class="row mt-mb-15">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/1.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Biggest lottery jackpots</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/2.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">No commission on Winnings</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/3.svg')}}" alt="icon">
                            </div>
                            <h4 class="title"> Safe and Secure Playing</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/4.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Instant payout system</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/5.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Performance Bonuses</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/6.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Dedicated Support</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/7.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Reliable Payment </h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="choose-item text-center choose-item--gray-border">
                        <div class="front">
                            <div class="icon">
                                <img src="{{asset('assets2/images/svg-icons/choose-us-icons/8.svg')}}" alt="icon">
                            </div>
                            <h4 class="title">Unlimited Affiliates</h4>
                        </div>
                        <div class="back">
                            <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
                        </div>
                    </div>
                </div><!-- choose-item end -->
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <h5>What they think about us</h5>
                        <h2>Testimonials</h2>
                        <div class="total-ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="ratings-count-num">3.4M Reviews</span>
                        </div>
                        <p>With over 12 years of experience as the world’s leading online lottery service provider, LottoCryptoCoin has catered to over a million users. Find out what our members have to say about us! </p>
                        <div class="testimonial-slider-arrows d-flex">
                            <div class="button-next"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="button-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-slide-header d-flex">
                                        <div class="client-thumb">
                                            <img src="{{asset('assets2/images/testimonial/1.png')}}" alt="image">
                                        </div>
                                        <div class="client-details">
                                            <h5 class="name">Albert G.</h5>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>5.00</span>
                                            </div>
                                            <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide-body">
                                        <p>I've played with LottoCryptoCoin for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  LottoCryptoCoin!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-slide-header d-flex">
                                        <div class="client-thumb">
                                            <img src="{{asset('assets2/images/testimonial/2.png')}}" alt="image">
                                        </div>
                                        <div class="client-details">
                                            <h5 class="name">Edward L.</h5>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>5.00</span>
                                            </div>
                                            <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide-body">
                                        <p>I've played with LottoCryptoCoin for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  LottoCryptoCoin!"</p>
                                    </div>
                                </div>
                            </div><!--swiper-slide end -->
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-slide-header d-flex">
                                        <div class="client-thumb">
                                            <img src="{{asset('assets2/images/testimonial/1.png')}}" alt="image">
                                        </div>
                                        <div class="client-details">
                                            <h5 class="name">Albert G.</h5>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>5.00</span>
                                            </div>
                                            <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide-body">
                                        <p>I've played with LottoCryptoCoin for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  LottoCryptoCoin!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-slide-header d-flex">
                                        <div class="client-thumb">
                                            <img src="{{asset('assets2/images/testimonial/2.png')}}" alt="image">
                                        </div>
                                        <div class="client-details">
                                            <h5 class="name">Edward L.</h5>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>5.00</span>
                                            </div>
                                            <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide-body">
                                        <p>I've played with LottoCryptoCoin for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  LottoCryptoCoin!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-slide-header d-flex">
                                        <div class="client-thumb">
                                            <img src="{{asset('assets2/images/testimonial/1.png')}}" alt="image">
                                        </div>
                                        <div class="client-details">
                                            <h5 class="name">Albert G.</h5>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>5.00</span>
                                            </div>
                                            <p><span class="place">France</span><span class="date">15th June, 2018</span></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-slide-body">
                                        <p>I've played with LottoCryptoCoin for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  LottoCryptoCoin!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->

    <!-- team-section start -->
    <section class="team-section border-top border-bottom section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">Our Management Team</h2>
                        <p>Our team of creative programmers, marketing experts, and members of the global lottery community have worked together to build the ultimate lottery site, and every win and happy customer reminds us how lucky we are to be doing what we love.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-single text-center">
                        <div class="thumb">
                            <img src="{{asset('assets2/images/team/1.png')}}" alt="team-image">
                            <ul class="team-social-link d-flex justify-content-center">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="name">Philip Brower</h3>
                            <span class="designation">Co-Founder & CEO</span>
                        </div>
                    </div>
                </div><!-- team-single end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-single text-center">
                        <div class="thumb">
                            <img src="{{asset('assets2/images/team/2.png')}}" alt="team-image">
                            <ul class="team-social-link d-flex justify-content-center">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="name">Penny Tool</h3>
                            <span class="designation">IT Specialist</span>
                        </div>
                    </div>
                </div><!-- team-single end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-single text-center">
                        <div class="thumb">
                            <img src="{{asset('assets2/images/team/3.png')}}" alt="team-image">
                            <ul class="team-social-link d-flex justify-content-center">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="name">Conrad Berry</h3>
                            <span class="designation">Consultant</span>
                        </div>
                    </div>
                </div><!-- team-single end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team-single text-center">
                        <div class="thumb">
                            <img src="{{asset('assets2/images/team/4.png')}}" alt="team-image">
                            <ul class="team-social-link d-flex justify-content-center">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="name">Alexis Brady</h3>
                            <span class="designation">Financial Adviser</span>
                        </div>
                    </div>
                </div><!-- team-single end -->
            </div>
        </div>
    </section>
    <!-- team-section end -->

    <!-- brand-section start -->
    <div class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/1.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/2.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/3.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/4.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/5.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/3.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/4.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/5.png')}}" alt="image">
                            </div>
                        </div><!-- single-slide end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
