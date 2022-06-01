<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $general->sitename(__($pageTitle)) }}</title>
@include('partials.seo')

<!-- bootstrap 5  -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/lib/bootstrap.min.css')}}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/all.min.css')}}">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/line-awesome.min.css')}}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/lib/slick.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets2/images/lotto-logo-2.png')}}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/fontawesome.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/lightcase.css')}}">
    <!-- slick css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/slick.css')}}">
    <!-- swiper css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/swiper.min.css')}}">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/flipclock.css')}}">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/jqvmap.min.css')}}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{asset('assets2/css/responsive.css')}}">
    <link rel="stylesheet"
          href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">
          
    @stack('style-lib')

    @stack('style')
</head>
<body>

@stack('fbComment')

{{--<div class="preloader">--}}
{{--    <div class="preloader-container">--}}
{{--        <span class="animated-preloader"></span>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket" aria-hidden="true"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="header-top-left d-flex">
                        <div class="language-part">
                            <i class="fa fa-globe"></i>
                            <select>
                                <option>Eng</option>
                                <option>Ban</option>
                                <option>Rus</option>
                                <option>Arb</option>
                            </select>
                        </div>
                        <div class="support-part">
                            <a href="tel:+88016558888454"><i class="fa fa-headphones"></i>Support</a>
                        </div>
                        
      
    
                        <div class="email-part">
                            <a href="mailto:info@lottocryptocoin.com"><i class="fa fa-envelope"></i>info@lottocryptocoin.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-top-right">
                        <div class="header-cart-count">
                            <i class="fa fa-shopping-cart"></i>
                            <span>My cart (0)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl">
                <a class="site-logo site-title" href="/"><img src="{{asset('assets2/images/lotto-logo.png')}}" alt="site-logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li style="white-space: nowrap"><a href="{{url('/lottery')}}">Buy LCC</a>
                        <li style="white-space: nowrap" class="menu_has_children"><a href="#">Buy Tickets</a>
                            <ul class="sub-menu">
                                <li style="padding: 0px !important;"><a  style="padding: 5px 13px !important;" href="all-lottery-one.html">United States</a></li>
                                <li style="padding: 0px !important;"><a  style="padding: 5px 13px !important;" href="all-lottery-two.html">China</a></li>
                                <li style="padding: 0px !important;"><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Japan</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Germany</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">United Kingdom</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">India</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">France</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Italy</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Canada</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">South Korea</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Russia</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Brazil</a></li>
                                <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Australia</a></li>
                            </ul>
                        </li>
                        <li style="white-space: nowrap"><a href="{{url('how-to-play-card')}}">How to Play</a>

                        {{--                            <li><a href="lottery-result.html">How To Play</a></li>--}}
                        <li class="menu_has_children"><a href="#0">Results</a>
                            <ul class="sub-menu">
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-one.html">United States</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-two.html">China</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Japan</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Germany</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">United Kingdom</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">India</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">France</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Italy</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Canada</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">South Korea</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Russia</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Brazil</a></li>
                                <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Australia</a></li>
                            </ul>
                        </li>
                        
                        <li style="white-space: nowrap"><a href="{{url('/lottery-buy/1')}}">View Ticket</a></li>
                    </ul>
                    <div class="header-join-part">
                        <button style="white-space: nowrap" type="button" class="cmn-btn" data-toggle="modal" data-target="#exampleModal">Connect to wallet</button>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header-bottom end -->
</header>

<div class="main-wrapper">

    <!-- lottery details section start -->
    <section class="pt-50 pb-50 lottery-result-section section-padding has_bg_imag" data-background="{{asset('assets2/images/bg-one.jpg')}}">
        <div class="container-fluid">
            <div class=""  >
                <div class="col-lg-12">
                    <div class="lottery-details-header">
                        <div class="thumb"><img src="{{ getImage('assets/images/lottery/'.$phase->lottery->image, imagePath()['lottery']['size']) }}" alt="image"></div>
                        <div class="content text-center">
                            <h3 class="game-name mb-4" style="color: white">{{ __($phase->lottery->name) }}</h3>
                            <div style="color: white !important;" class="clock" data-clock="{{ showDateTime($phase->end,'Y/m/d h:i:s') }}" data-title="@lang('This lottery expired')"></div>
                        </div>
                    </div><!-- lottery-details-header ed -->
                </div>
            </div><!-- row end -->
            <div class="row mt-5">
                <div class="col-lg-12">

                    <form method="post" action="{{ route('user.buyTicket') }}">
                        @csrf

                        <input type="hidden" name="lottery_id" value="{{ $phase->lottery->id }}">
                        <input type="hidden" name="phase_id" value="{{ $phase->id }}">

                        <div class="lottery-details-body">
                            <div class="top-part">
                                <div class="left">
                                    <h4 style="color: white">@lang('Available Ticket'): {{ __($phase->available) }}</h4>
                                    <h4 style="color: white" class="mt-2">@lang('Price'):  {{__($general->cur_sym)}}{{ __(showAmount($phase->lottery->price)) }}</h4>
                                </div>
                                @auth
                                    <div class="middle">
                                        <div class="balance" style="color: white">@lang('Balance'):  {{__($general->cur_sym)}}{{ showAmount(auth()->user()->balance) }}</div>
                                    </div>
                                @endauth
                                <div class="right">
                                    <button type="button" class="btn btn-md btn--base addMore">+ @lang('Add New')</button>
                                </div>
                            </div>
                            <div class="body-part">
                                <div class="row gy-4" id="tickets">

                                    <div class="col-xl-4 col-md-6">
                                        <div class="ticket-card">
                                            <div class="ticket-card__header">
                                                <h4 style="color: white">@lang('Your Ticket Number')</h4>
                                            </div>
                                            <div class="ticket-card__body elements">
                                                <input type="hidden" class="numVal" name="number[]">
                                                <div class="numbers uniqueNumbers mb-4" style="color: white">
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                    <span>0</span>
                                                </div>
                                                <button type="button" class="btn btn-md btn--base w-100 generate">@lang('Generate Number')</button>
                                            </div>
                                        </div><!-- ticket-card end -->
                                    </div>

                                </div>
                            </div>

                        </div><!-- lottery-details-body end -->
                    </form>

                    <div class="lottery-details-instruction mt-5">
                        <ul class="nav nav-tabs cumtom--nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">@lang('Instruction')</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">@lang('Win Bonuses')</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="mb-3" style="color: white">@lang('Introduction')</h3>

                                @php echo $phase->lottery->detail @endphp

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table level-table">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase font-weight-bold text-white">@lang('Winners')</th>
                                        <th class="text-uppercase font-weight-bold text-white">@lang('Win Bonus')</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($phase->lottery->bonuses as $bonus)
                                        <tr>
                                            <td class="text-black">@lang('Winner')- {{ $bonus->level }}</td>
                                            <td class="text-black">{{ $bonus->amount }} {{ __($general->cur_text) }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- lottery details section end -->
</div>
<footer class="footer-section">
    <div class="footer-top border-top border-bottom has_bg_image" data-background="{{asset('assets2/images/bg-four.jpg')}}">
        <div class="footer-top-first">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                        <a href="home-one.html" class="site-logo"><img src="{{asset('assets2/images/lotto-logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="number-count-part d-flex">
                            <div class="number-count-item">
                                <span class="number">2,3402,233</span>
                                <p>TOTAL MEMBERS</p>
                            </div>
                            <div class="number-count-item">
                                <span class="number">1,9402,575</span>
                                <p>TOTAL winner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer-top-second">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget widget-about">
                            <h3 class="widget-title">About LottoCryptoCoin</h3>
                            <ul class="footer-list-menu">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">How it Works</a></li>
                                <li><a href="#0">Our services</a></li>
                                <li><a href="#0">Blog</a></li>
                                <li><a href="#0">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget widget-links">
                            <h3 class="widget-title">Quick links</h3>
                            <ul class="footer-list-menu">
                                <li><a href="#0">My Account</a></li>
                                <li><a href="#0">Affiliate Program</a></li>
                                <li><a href="#0">Terms & Conditions</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                                <li><a href="#0">LottoCryptoCoin Licenses</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget widget-subscribe">
                            <h3 class="widget-title">email newsletters</h3>
                            <div class="subscribe-part">
                                <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
                                <form class="subscribe-form">
                                    <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                                    <input type="submit" value="subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <div class="copy-right-text">
                        <p>© 2019 <a href="#">LottoCryptoCoin</a> - All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5">
                    <ul class="footer-social-links d-flex justify-content-end">
                        <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<p class="txt my-2">

    @php echo @$cookie->data_values->description @endphp

    <a href="{{ @$cookie->data_values->link }}" target="_blank" class="text--base">@lang('Read Policy')</a>
</p>
<button class="btn btn--base btn-md my-2 acceptPolicy">Accept</button>


<!-- jQuery library -->
<script src="{{asset($activeTemplateTrue.'js/lib/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset($activeTemplateTrue.'js/lib/bootstrap.bundle.min.js')}}"></script>
<!-- slick slider js -->
<script src="{{asset($activeTemplateTrue.'js/lib/slick.min.js')}}"></script>
<!-- scroll animation -->
<script src="{{asset($activeTemplateTrue.'js/lib/wow.min.js')}}"></script>
<!-- apex chart js -->
<script src="{{asset($activeTemplateTrue.'js/lib/jquery.countdown.js')}}"></script>
<!-- main js -->
<script src="{{asset($activeTemplateTrue.'js/app.js')}}"></script>

@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('partials.notify')


<script>
    (function ($) {
        "use strict";
        $(".langSel").on("change", function () {
            window.location.href = "{{route('home')}}/change/" + $(this).val();
        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                       url: "{{ route('cookie.accept') }}",
                       method:'GET',
                       success:function(data){
                           if (data.success){
                               $('.cookie__wrapper').addClass('d-none');
                               notify('success', data.success)
                           }
                       },
                   });
        });
    })(jQuery);
</script>


<script type="text/javascript">
  (function($){
        "use strict";
      	$( window ).on('load',function(){
              var element = $('.elements').length;
              addMoreBtn(element);
            });

      	$('.addMore').click(function(){
                var element = $('.elements').length + 1

                	var html = `

                        <div class="col-xl-4 col-md-6 elem">
                            <div class="ticket-card">
                                <button type="button" class="ticket-card-del removeBtn"><i class="las la-times"></i></button>
                                <div class="ticket-card__header">
                                    <h4>@lang('Your Ticket Number')</h4>
                                </div>
                                <div class="ticket-card__body elements">
                                    <input type="hidden" class="numVal" name="number[]">
                                    <div class="numbers uniqueNumbers mb-4">
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                        <span>0</span>
                                    </div>
                                    <button type="button" class="btn btn-md btn--base w-100 generate">@lang('Generate Number')</button>
                                </div>
                            </div>
                        </div>


                	`;
                  $('#tickets').append(html);
                  $('.qnt').html(element);
                  $('.tam').html(element * {{ $phase->lottery->price }});
                  $('input[name=ticket_quantity]').val(element);
                  $('input[name=total_price]').val(element * {{ $phase->lottery->price }});
                  rAndOm();
                  remove();
                  addMoreBtn(element);
              });

      	function remove(){
                $('.removeBtn').click(function(){
                  $(this).parents('.elem').remove();
                  var elem = $('.elements').length;
                  addMoreBtn(elem);
                  $('.qnt').html(elem);
                  $('.tam').html(elem * {{ $phase->lottery->price }});
                  $('input[name=ticket_quantity]').val(elem);
                  $('input[name=total_price]').val(elem * {{ $phase->lottery->price }});
                });
              }


      	function addMoreBtn(count){
                if (count >= {{ $phase->available }}) {
                  $('.addMore').addClass('d-none');
                }else{
                  $('.addMore').removeClass('d-none');
                }
              }

              function rAndOm(){
                  $('.generate').click(function(){

                      var tendigitrandom = Math.floor(1000000000 + Math.random() * 9000000000);
                      var array = tendigitrandom.toString().split('');
                      var newArray = [];

                      $.each(array, function( index, value ) {
                          newArray[index] =`<span>${value}</span>`;
                      });

                      $(this).parents('.elements').children('.numbers').html(newArray);

                      $(this).parents('.elements').children('.numbers').addClass('active');
                      $(this).parents('.elements').children('.numbers').removeClass('op-0-3');
                      $(this).parents('.elements').children('.numVal').val(tendigitrandom);
                  });
              }
              $('.generate').click(function(){

                  var tendigitrandom = Math.floor(1000000000 + Math.random() * 9000000000);
                  var array = tendigitrandom.toString().split('');
                  var newArray = [];

                  $.each(array, function( index, value ) {
                      newArray[index] =`<span>${value}</span>`;
                  });

                  $(this).parents('.elements').children('.numbers').html(newArray);

                  $(this).parents('.elements').children('.numbers').addClass('active');
                  $(this).parents('.elements').children('.numbers').removeClass('op-0-3');
                  $(this).parents('.elements').children('.numVal').val(tendigitrandom);
              });
    })(jQuery);
</script>
</body>
</html>
