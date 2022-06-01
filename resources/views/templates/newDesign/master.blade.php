<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LottoCryptoCoin - Lotto HTML template</title>
    <!-- site favicon -->
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
    <style >
        .main-menu li a {
            padding: 19px 14px;
            }
            .goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}.goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
    display: none !important;
}
body {
    top: 0px !important;
}
.goog-tooltip {
    display: none !important;
}
.goog-tooltip:hover {
    display: none !important;
}
.goog-text-highlight {
    background-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
}
    </style >
    <script type="text/javascript"> 
        function googleTranslateElementInit() { 
            new google.translate.TranslateElement(
                {pageLanguage: 'en'}, 
                'google_translate_element'
            ); 
        } 
    </script> 
      
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>

<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
    <button type="button"><i class="fa fa-cog"></i></button>
    <div class="color-version-area">
        <a href="home-two.html" class="dark-vesion">Dark Version</a>
        <a href="home-one.html" class="light-vesion">Light Version</a>
    </div>
</div>

<div class="main-light-version">
    <!--  header-section start  -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-left d-flex">
                            <div class="language-part">
                                <i class="fa fa-globe"></i>
                                <!-- <select class="language-select langSel">
                                    <option value="">@lang('Select One')</option>
                                    @foreach($language as $item)
                                        <option value="{{$item->code}}" @if(session('lang') == $item->code) selected  @endif>{{ __($item->name) }}</option>
                                    @endforeach
                                </select> -->
                                <!-- <div class="text-right m-3">
        <select class="form-select p-3" name="language" style="width: 200%;">
            <option value="en" {{ \Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
            <option value="es" {{ \Session::get('language') == 'es' ? 'selected' : '' }}>Spanish</option>
            <option value="de" {{ \Session::get('language') == 'de' ? 'selected' : '' }}>German</option>
            <option value="hi" {{ \Session::get('language') == 'hi' ? 'selected' : '' }}>Hindi</option>
        </select>
    </div> -->
                            </div>
                            <!-- <div class="support-part">
                                <a href="tel:+88016558888454"><i class="fa fa-headphones"></i>Support</a>
                            </div> -->
                            <div id="google_translate_element"></div> 
                            <div class="email-part">
                                <a href="mailto:info@lottocryptocoin.com"><i class="fa fa-envelope"></i>info@lottocryptocoin.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="header-top-right">
                            <div class="header-cart-count">
                                <i class="fa fa-shopping-cart"></i>
                                <span>My cart (0)</span>
                            </div>
                        </div>
                    </div> -->
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
                            <li><a href="{{url('/')}}">@lang('Home')</a></li>
                            <li style="white-space: nowrap"><a href="#">@lang('Buy LCC')</a></li>
                            <li style="white-space: nowrap"><a href="{{url('/buy-llc')}}">@lang('Buy Tickets')</a>

{{--                            <li style="white-space: nowrap" class="menu_has_children"><a href="{{url('/buy-llc')}}">@lang('Buy Tickets')</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li style="padding: 0px !important;"><a  style="padding: 5px 13px !important;" href="all-lottery-one.html">United States</a></li>--}}
{{--                                    <li style="padding: 0px !important;"><a  style="padding: 5px 13px !important;" href="all-lottery-two.html">China</a></li>--}}
{{--                                    <li style="padding: 0px !important;"><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Japan</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Germany</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">United Kingdom</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">India</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">France</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Italy</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Canada</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">South Korea</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Russia</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Brazil</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;" href="all-lottery-three.html">Australia</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li style="white-space: nowrap"><a href="{{url('how-to-play-card')}}">@lang('How to Play')</a>

                            {{--                            <li><a href="lottery-result.html">How To Play</a></li>--}}
{{--                            <li class="menu_has_children"><a href="{{url('/results')}}">@lang('Results')</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-one.html">United States</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-two.html">China</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Japan</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Germany</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">United Kingdom</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">India</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">France</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Italy</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Canada</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">South Korea</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Russia</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Brazil</a></li>--}}
{{--                                    <li><a style="padding: 5px 13px !important;"href="all-lottery-three.html">Australia</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li style="white-space: nowrap"><a href="{{url('/results')}}">@lang('Results')</a>

                            <li  class=""><a href="/faq">@lang('FAQ')</a>
                                <!-- <ul class="sub-menu">
                                    <li><a style="padding: 5px 13px !important;" href="{{url('/about-us')}}">@lang('About Us')</a></li>
                                </ul> -->
                            </li>
                            <li style="white-space: nowrap"><a href="{{url('/view-ticket')}}">@lang('View Ticket')</a></li>
                        </ul>
                        <div class="header-join-part">
                            <button style="white-space: nowrap" type="button"   class="connect cmn-btn" onClick="startProcess()">Connect to wallet</button>
                           <div style="display: flex">
                            <button style="white-space: nowrap;padding: 2% 5%" type="button"   class=" connected cmn-btn">Connected</button>
                            <button style="white-space: nowrap;background: #E92020;padding: 2% 5%;" type="button" class="disConnected cmn-btn" onClick="disConnectProcess()">Disconnect</button>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div><!-- header-bottom end -->
    </header>
</div>

@yield('content')


<!-- footer-section start -->
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
                        <p>© 2022 <a href="#">LottoCryptoCoin</a> - All Rights Reserved.</p>
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
<!-- footer-section end -->

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
</div>
<script src="{{asset('assets2/js/jquery-3.3.1.min.js')}}"></script>
<!-- bootstrap js file -->
<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
<!-- flipclock js file -->
<script src="{{asset('assets2/js/flipclock.min.js')}}"></script>
<!-- countdown js file -->
<script src="{{asset('assets2/js/jquery.countdown.min.js')}}"></script>
<!-- slick js file -->
<script src="{{asset('assets2/js/slick.min.js')}}"></script>
<!-- swiper js file -->
<script src="{{asset('assets2/js/swiper.min.js')}}"></script>
<!-- lightcase js file -->
<script src="{{asset('assets2/js/lightcase.js')}}"></script>
<!-- wow js file -->
<script src="{{asset('assets2/js/wow.min.js')}}"></script>
<!-- vamp js files -->
<script src="{{asset('assets2/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets2/js/jquery.vmap.world.js')}}"></script>
<!-- main script js file -->
<script src="{{asset('/assets2/js/main.js')}}"></script>
<script>
    var clock = $('.clock').FlipClock(99000 * 24 * 3, {
        clockFace: 'DailyCounter',
        countdown: true
    });
    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
                                      map: 'world_en',
                                      color: '#eaedef',
                                      backgroundColor: '#f7fcff',
                                      hoverOpacity: 0.8,
                                      selectedColor: '#eaedef',
                                      scaleColors: ['#f7fcff', '#f7fcff'],
                                      normalizeFunction: 'polynomial'
                                  });
    });
</script>

<script >

    let session = sessionStorage.getItem("session");
    console.log(session);
    if(session == 'wallet'){
        $('.connect').hide();
        $('.connected').show();
        $('.disConnected').show();
    }else{
        $('.connect').show();
        $('.connected').hide();
        $('.disConnected').hide();
    }

    $('.disConnected').on('click',function (){
        $('.connect').show();
        $('.connected').hide();
        $('.disConnected').hide();
        sessionStorage.removeItem("session");

    });
    function startProcess() {
            EThAppDeploy.loadEtherium();
    }


    EThAppDeploy = {
        loadEtherium: async () => {
            if (typeof window.ethereum !== 'undefined') {
                EThAppDeploy.web3Provider = ethereum;
                EThAppDeploy.requestAccount(ethereum);
            } else {
                alert(
                    "Not able to locate an Ethereum connection, please install a Metamask wallet"
                );
            }
        },
        /****
         * Request A Account
         * **/
        requestAccount: async (ethereum) => {
            ethereum
                .request({
                             method: 'eth_requestAccounts'
                         })
                .then((resp) => {
                    //do payments with activated account

                    sessionStorage.setItem("session", "wallet");
                    $('.connect').hide();
                    $('.connected').show();
                    $('.disConnected').show();
                    EThAppDeploy.payNow(ethereum, resp[0]);

                })
                .catch((err) => {
                    // Some unexpected error.
                    console.log(err);
                });
        },
        /***
         *
         * Do Payment
         * */
        payNow: async (ethereum, from) => {
            var amount = $('#inp_amount').val();
            ethereum
                .request({
                             method: 'eth_sendTransaction',
                             params: [{
                                 from: from,
                                 to: "{~Your Account Addree~}",
                                 value: '0x' + ((amount * 1000000000000000000).toString(16)),
                             }, ],
                         })
                .then((txHash) => {
                    if (txHash) {
                        console.log('if');
                        console.log(txHash);
                        //Store Your Transaction Here
                    } else {
                        console.log("Something went wrong. Please try again");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    }
    $(".langSel").on("change", function () {
        window.location.href = "{{route('home')}}/change/" + $(this).val();
    });
</script >

<script >
    
    $(document).ready(initialactivate(1));

    
    
    $("#add-item").on('click', function(){

        var length = $('.play-card.ng-star-inserted').length;
        if(length<5){
            var new_length = length + 1;
            
            
            var cloned_div = $('#playBox-' + length);
            var cloned = $(cloned_div).clone().attr('id', 'playBox-' + new_length).insertAfter('#playBox-' + length);
            
            cloned.find('.cloner').each(function (i, e) {
                $(e).attr('id', $(e).attr('id').replace(length,new_length));
            });
            
            cloned.find('ul.cloner').each(function (i, e) {
                $(e).attr('data-val', $(e).attr('data-val').replace(length,new_length));
            });
            
            cloned.find('.clonerOnClick').each(function (i, e) {
                $(e).attr('onclick', $(e).attr('onclick').replace(length,new_length));
            });



            $('#number-lp-'+new_length+' li').removeClass('active');
            $('#number-lp-'+new_length).attr('data-limit',0);
            
            $('#singlenumber-lp-'+new_length+' li').removeClass('active');
            $('#singlenumber-lp-'+new_length).attr('data-limit',0);
            
            document.getElementById('total-selected-number-'+new_length).innerHTML="";
            document.getElementById('single-selected-number-'+new_length).innerHTML="";
            $('#limitCount').text(new_length);
            $('#totalAmount').text(new_length*5);

            activate(new_length);
        }


    });

    $("#delete-item").on('click', function(){

        var length = $('.play-card.ng-star-inserted').length;
        if (length > 1) {

            $('#playBox-' + length).remove();
            var finalL = --length;
            $('#limitCount').text(finalL);
            $('#totalAmount').text(finalL*5);
        }
    });



    $("#clear-item").on('click', function(){
        var length = $('.play-card.ng-star-inserted').length;
        for(var i=1;i<=length;i++){
            clearBox(i);
        }
    });

    $("#quick-pick-all").on('click', function(){
        var length = $('.play-card.ng-star-inserted').length;
        for(var i=1;i<=length;i++){
            quickPick(i);
        }
    });


    function clearBox(i){
        $('#number-lp-'+i+' li').removeClass('active');
        $('#number-lp-'+i).attr('data-limit',0);
        $('#singlenumber-lp-'+i+' li').removeClass('active');
        $('#singlenumber-lp-'+i).attr('data-limit',0);
        document.getElementById('total-selected-number-'+i).innerHTML="";
        document.getElementById('single-selected-number-'+i).innerHTML="";
    }



    function quickPick(i){
        clearBox(i);
        for(var ii=1;ii<=4;ii++){
            var num = Math.floor(Math.random() * 69);
            $('#number-lp-'+i+' li').filter((i, el) => +el.textContent.trim() === num).addClass('active');
            $('#total-selected-number-'+i).append('<span id="upper-'+i+'-'+num+'">'+num+'</span>');
        }
        $('#number-lp-'+i).attr('data-limit',$('#number-lp-'+i+' li.active').length);

        var sing = Math.floor(Math.random() * 26);
        $('#singlenumber-lp-'+i+' li').filter((i, el) => +el.textContent.trim() === sing).addClass('active');
        $('#singlenumber-lp-'+i).attr('data-limit',$('#singlenumber-lp-'+i+' li.active').length);
        $('#single-selected-number-'+i).append('<span id="upper-'+i+'-'+sing+'">'+sing+'</span>');

    }

    function initialactivate(index){
        activate(index);
    }

    function activate(index){
        $("#number-lp-"+index+" li").on('click', function(){

            var indexId = $(this).parent().attr('data-val');
            var upperLimit = $(this).parent().attr('data-limit');

            if(index==1)
            {
                $(this).removeClass("active");
            }


            if($(this).hasClass("active")){
                upperLimit--;

                $(this).removeClass("active");
                $('#upper-'+indexId+'-'+$(this).text().trim()).remove();
            }
            else{
                if(upperLimit>=4){
                    alert('You can only select 4');
                }
                else{
                    upperLimit++;
                    $(this).addClass("active");
                    $('#total-selected-number-'+indexId).append('<span id="upper-'+indexId+'-'+$(this).text().trim()+'">'+$(this).text().trim()+'</span>');
                }
            }

            $(this).parent().attr('data-limit',upperLimit);

        });



        $("#singlenumber-lp-"+index+" li").on('click', function(){

            var indexId = $(this).parent().attr('data-val');
            var lowerLimit = $(this).parent().attr('data-limit');
            if(index==1)
            {
                $(this).removeClass("active");
            }

            if($(this).hasClass("active")){
                lowerLimit--;
                $(this).removeClass("active");
                $('#lower-'+indexId+'-'+$(this).text().trim()).remove();
            }
            else{
                if(lowerLimit>=1){
                    alert('You can only select 1');
                }
                else{
                    lowerLimit++;
                    $(this).addClass("active");
                    $('#single-selected-number-'+indexId).append('<span id="lower-'+indexId+'-'+$(this).text().trim()+'">'+$(this).text().trim()+'</span>');
                }
            }

            $(this).parent().attr('data-limit',lowerLimit);
        });

    };


    const netURL = 'https://mainnet.infura.io/v3/60045862aafe4b64b983125cf61000fb';
    const ADDRESS = '0x4dCaee353322EA4702ff0aC17E7253DDa9e200EB123';
    const web3 = window.Web3
    const ethereum = window.ethereum
    let accounts
    let price = 0.3
    const input = document.querySelector(".eth_input")
    const button = document.querySelector(".metamask_content-btn")
    const buttonor = document.querySelector(".buttonorer")
    const title = document.querySelector(".metamask_content-title")
    const priceDisplay = document.querySelector("#price")
    const pricex = document.querySelector("#pricex")
    const Web3 = new web3(netURL)
    const CONTRACT_ABI = JSON.parse("[{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_recipient\",\"type\":\"address\"},{\"internalType\":\"string\",\"name\":\"baseUri\",\"type\":\"string\"},{\"internalType\":\"string\",\"name\":\"contractURi\",\"type\":\"string\"},{\"internalType\":\"string\",\"name\":\"stubURi\",\"type\":\"string\"},{\"internalType\":\"address\",\"name\":\"_proxyRegistry\",\"type\":\"address\"}],\"stateMutability\":\"nonpayable\",\"type\":\"constructor\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"address\",\"name\":\"owner\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"approved\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"Approval\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"address\",\"name\":\"owner\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"operator\",\"type\":\"address\"},{\"indexed\":false,\"internalType\":\"bool\",\"name\":\"approved\",\"type\":\"bool\"}],\"name\":\"ApprovalForAll\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"address\",\"name\":\"previousOwner\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"newOwner\",\"type\":\"address\"}],\"name\":\"OwnershipTransferred\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"address\",\"name\":\"from\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"to\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"Transfer\",\"type\":\"event\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"approve\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"owner\",\"type\":\"address\"}],\"name\":\"balanceOf\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_to\",\"type\":\"address\"}],\"name\":\"buyToken\",\"outputs\":[],\"stateMutability\":\"payable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"amount\",\"type\":\"uint256\"}],\"name\":\"buyTokens\",\"outputs\":[],\"stateMutability\":\"payable\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"contractURI\",\"outputs\":[{\"internalType\":\"string\",\"name\":\"\",\"type\":\"string\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"getApproved\",\"outputs\":[{\"internalType\":\"address\",\"name\":\"\",\"type\":\"address\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_owner\",\"type\":\"address\"}],\"name\":\"getTokensOfOwner\",\"outputs\":[{\"internalType\":\"uint16[]\",\"name\":\"_tokensIDs\",\"type\":\"uint16[]\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_owner\",\"type\":\"address\"},{\"internalType\":\"address\",\"name\":\"_operator\",\"type\":\"address\"}],\"name\":\"isApprovedForAll\",\"outputs\":[{\"internalType\":\"bool\",\"name\":\"\",\"type\":\"bool\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_to\",\"type\":\"address\"}],\"name\":\"mintToken\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"_to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"amount\",\"type\":\"uint256\"}],\"name\":\"mintTokens\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"name\",\"outputs\":[{\"internalType\":\"string\",\"name\":\"\",\"type\":\"string\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"owner\",\"outputs\":[{\"internalType\":\"address\",\"name\":\"\",\"type\":\"address\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"ownerOf\",\"outputs\":[{\"internalType\":\"address\",\"name\":\"\",\"type\":\"address\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"renounceOwnership\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"from\",\"type\":\"address\"},{\"internalType\":\"address\",\"name\":\"to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"safeTransferFrom\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"from\",\"type\":\"address\"},{\"internalType\":\"address\",\"name\":\"to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"},{\"internalType\":\"bytes\",\"name\":\"_data\",\"type\":\"bytes\"}],\"name\":\"safeTransferFrom\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"operator\",\"type\":\"address\"},{\"internalType\":\"bool\",\"name\":\"approved\",\"type\":\"bool\"}],\"name\":\"setApprovalForAll\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"string\",\"name\":\"baseUri\",\"type\":\"string\"}],\"name\":\"setBaseURI\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"string\",\"name\":\"contractURi\",\"type\":\"string\"}],\"name\":\"setContractURI\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"newmintLimitPerTransaction\",\"type\":\"uint256\"}],\"name\":\"setMintLimitPerTransaction\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"newPrice\",\"type\":\"uint256\"}],\"name\":\"setPrice\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"newRecipient\",\"type\":\"address\"}],\"name\":\"setRecipient\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bool\",\"name\":\"newSale\",\"type\":\"bool\"}],\"name\":\"setSale\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"string\",\"name\":\"stubURi\",\"type\":\"string\"}],\"name\":\"setStubURI\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"stubURI\",\"outputs\":[{\"internalType\":\"string\",\"name\":\"\",\"type\":\"string\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes4\",\"name\":\"interfaceId\",\"type\":\"bytes4\"}],\"name\":\"supportsInterface\",\"outputs\":[{\"internalType\":\"bool\",\"name\":\"\",\"type\":\"bool\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"symbol\",\"outputs\":[{\"internalType\":\"string\",\"name\":\"\",\"type\":\"string\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"index\",\"type\":\"uint256\"}],\"name\":\"tokenByIndex\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"owner\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"index\",\"type\":\"uint256\"}],\"name\":\"tokenOfOwnerByIndex\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"tokenURI\",\"outputs\":[{\"internalType\":\"string\",\"name\":\"\",\"type\":\"string\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"totalSupply\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"from\",\"type\":\"address\"},{\"internalType\":\"address\",\"name\":\"to\",\"type\":\"address\"},{\"internalType\":\"uint256\",\"name\":\"tokenId\",\"type\":\"uint256\"}],\"name\":\"transferFrom\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"address\",\"name\":\"newOwner\",\"type\":\"address\"}],\"name\":\"transferOwnership\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"}]")

    window.addEventListener("load", () => {
        if (ethereum.selectedAddress) {
            document.querySelector(".container_link_metamask_install-btn").style.display = "none"
            document.querySelector(".container_metamask_content-btn").style.display = "flex"
            button.innerHTML = "<span>Mint now</span>"
            input.disabled = false
            title.innerHTML = "Connected"
        }
        else if (ethereum.isMetaMask) {
            document.querySelector(".container_link_metamask_install-btn").style.display = "none"
            document.querySelector(".container_metamask_content-btn").style.display = "flex"
            title.innerHTML = "Connect Wallet"
            input.disabled = false
        }


    })



    const getAccount = async () => {
        accounts = await ethereum.request({ method: 'eth_requestAccounts' });
        console.log(accounts)
        if (window.ethereum.chainId == "0x1") console.log("Already connected to ethereum mainnet...")
        else {
            try {
                await ethereum.request({
                                           method: 'wallet_switchEthereumChain',
                                           params: [{chainId: '0x1'}],
                                       });
            } catch (switchError) {
                // This error code indicates that the chain has not been added to MetaMask.
                if (error.code === 4902) {
                    try {
                        await ethereum.request({
                                                   method: 'wallet_addEthereumChain',
                                                   params: [{
                                                       chainId: '0x1',
                                                       rpcUrl: netURL
                                                   }],
                                               });
                    } catch (addError) {
                        // handle "add" error
                    }
                }
            }
        }
    }

    const contract = new Web3.eth.Contract(CONTRACT_ABI, ADDRESS);

    const sendTransaction =  async () => {
        const data = await contract.methods.buyTokens(accounts[0],input.value).encodeABI()
        const priceToWei = (price * 1e18).toString(16)
        const gasLimit = (100_000 * +input.value).toString(16);
        ethereum.request({
                             method: 'eth_sendTransaction',
                             params: [
                                 {
                                     from: accounts[0],
                                     to: ADDRESS,
                                     value: priceToWei,
                                     data: data,
                                     gas: gasLimit,
                                 },
                             ],
                         })
                .then((txHash) => console.log(txHash))
                .catch((error) => console.error);
    };


    // input.addEventListener("input", () => {
    //     if (+input.value < 1) button.disabled = true
    //     else if (+input.value >= 1) button.disabled = false

    //     price = +input.value * 0.3
    //   pricex.innerText = input.value
    //     if (+input.value >= 1) priceDisplay.innerText = price.toFixed(2)
    //   //else if(input.value < 1) input.value =+ "1"
    //   else priceDisplay.innerText = "0.3"
    // })

    button.addEventListener("click", async () => {
        if (!ethereum.selectedAddress) {
            await getAccount()
            button.innerHTML = "<span>Mint now</span>"
            title.innerHTML = "Connected"
        } else {
            await getAccount()
            await sendTransaction()
        }
    })

    buttonor.addEventListener("click", async () => {
        if (!ethereum.selectedAddress) {
            await getAccount()
            button.innerHTML = "<span>Mint now</span>"
            title.innerHTML = "Connected"
        }
    })

    setTimeout(function(){
        buttonor.click();
    }, 1000);

    document.querySelector(".pluson").addEventListener("click", () => {
        if(input.value < 10) {
            input.value = +input.value + 1
            event = new Event("input")
            input.dispatchEvent(event)
        }
    })

    document.querySelector(".minuson").addEventListener("click", () => {
        if(input.value > 1) {
            input.value = +input.value - 1
            event = new Event("input")
            input.dispatchEvent(event)
        }
    })

    document.querySelector(".maxon").addEventListener("click", () => {
        input.value = 20
        event = new Event("input")
        input.dispatchEvent(event)
    });


</script >

</body></html>
