@extends('templates.newDesign.master')

@section('content')
    <style>
        element.style {
        }
        .img-fluid, .img-thumbnail {
            max-width: 100%;
            height: auto;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        img, svg {
            vertical-align: middle;
        }
        img {
            border-style: none;
        }
        *, :after, :before {
            box-sizing: border-box;
        }
        .main-dark-version a, .main-dark-versionli li, .main-dark-version p, .main-dark-version span {
            color: var(--dark-para-color);
        }
        a, a:focus, a:hover {
            text-decoration: none;
            color: inherit;
        }
        a {
            display: inline-block;
            font-family: var(--para-font);
            color: var(--para-color);
            font-weight: 700;
        }
        a {
            color: #007bff;
            text-decoration: none;
            background-color: initial;
        }
        user agent stylesheet
        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
        }
        .text-center {
            text-align: center!important;
        }
        body {
            font-size: 16px;
            font-family: var(--para-font);
            font-weight: 400;
            overflow: hidden;
            overflow-y: auto;
        }
        body {
            font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,Liberation Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }
        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
        }
        html {
            scroll-behavior: smooth;
            --main-color: #33b5f7;
            --second-color: #233d63;
            --heading-font: "Ubuntu",sans-serif;
            --heading-color: #333745;
            --para-font: "Roboto",sans-serif;
            --para-color: rgba(51,55,69,0.8);
            --dark-main-color: #2b2d5c;
            --dark-second-color: #303265;
            --dark-heading-color: #fff;
            --dark-para-color: #e7e7f4;
            --light-text: #ffb92a;
        }
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }
        *, :after, :before {
            box-sizing: border-box;
        }
        *, :after, :before {
            box-sizing: border-box;
        }
    </style>
    <!--  header-section end  -->
    <!--login registration Modal -->
    <div class="modal fade login-registration-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-registration-area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Registration</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form class="login-form cmn-frm">
                                    <div class="frm-group">
                                        <label>Username or Email Address</label>
                                        <input type="email" name="login_email" id="login_email" placeholder="Username or Email Address">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="frm-group">
                                        <label>Password</label>
                                        <input type="password" name="login_pass" id="login_pass" placeholder="Enter Password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="frm-group">
                                        <input type="submit" name="registration_submit2" id="registration_submit2" value="login">
                                    </div>
                                    <div class="frm-group">
                                        <div class="checkbox-area">
                                            <input type="checkbox" id="login_remember_pass">
                                            <label for="login_remember_pass">Remember Password</label>
                                        </div>
                                        <div class="forgot-pass-area">
                                            <a href="#0">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="frm-group">
                                        <div class="or-text">
                                            <span>Or login with</span>
                                        </div>
                                    </div>
                                    <div class="frm-group">
                                        <div class="login-with-area">
                                            <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                                            <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="have-not-account">
                                    <p>You don’t have an account?<a href="#0">Register Now</a></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                                <form class="registration-form cmn-frm">
                                    <div class="frm-group">
                                        <label>Username or Email Address</label>
                                        <input type="email" name="registration_email" id="registration_email" placeholder="Username or Email Address">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="frm-group">
                                        <label>Password</label>
                                        <input type="password" name="registration_pass" id="registration_pass" placeholder="Enter Password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="frm-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="registration_re_pass" id="registration_re_pass" placeholder="Enter Password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="frm-group">
                                        <input type="submit" name="registration_submit" id="registration_submit" value="Registration">
                                    </div>
                                    <div class="frm-group">
                                        <div class="checkbox-area">
                                            <input type="checkbox" id="registration_remember_pass">
                                            <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                                        </div>
                                        <div class="forgot-pass-area">
                                            <a href="#0">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="frm-group">
                                        <div class="or-text">
                                            <span>Or login with</span>
                                        </div>
                                    </div>
                                    <div class="frm-group">
                                        <div class="login-with-area">
                                            <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                                            <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="have-not-account">
                                    <p>Already have an account?<a href="#0">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner-section start -->
    <section class="banner-section">
        <div class="banner-elements-part has_bg_image" data-background="{{asset('assets2/images/elements/vector-bg.jpg')}}">
            <div class="element-one"><img src="{{asset('assets2/images/elements/box.png')}}" alt="vector-image"></div>

            <div class="element-two"><img src="{{asset('assets2/images/elements/car.png')}}" alt="vector-image"></div>

            <div class="element-three"><img src="{{asset('assets2/images/elements/chart.png')}}" alt="vector-image"></div>

            <div class="element-four"><img src="{{asset('assets2/images/elements/dollars.png')}}" alt="vector-image"></div>

            <div class="element-five"><img src="{{asset('assets2/images/elements/laptop.png')}}" alt="vector-image"></div>

            <div class="element-six"><img src="{{asset('assets2/images/elements/money-2.png')}}" alt="vector-image"></div>

            <div class="element-seven"><img src="{{asset('assets2/images/elements/person.png')}}" alt="vector-image"></div>

            <div class="element-eight"><img src="{{asset('assets2/images/elements/person-2.png')}}" alt="vector-image"></div>

            <div class="element-nine"><img src="{{asset('assets2/images/elements/power.png')}}" alt="vector-image"></div>
        </div>
        <div class="banner-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-content">
                            <h1 class="title">@lang('Take the chance to change your life')</h1>
                            <p>LottoCryptoCoin is online lottery platform inspired by few LottoCryptoCoin lover's fantasy of the ultimate lottery platfrom.</p>
                            <a href="{{url('/buy-llc')}}" class="cmn-btn">buy ticket now !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- lottery-timer-section start -->
{{--    <section class="lottery-timer-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="col-xl-5">--}}
{{--                    <div class="timer-content">--}}
{{--                        <h3 class="title">Buy Lottery Tickets Online</h3>--}}
{{--                        <p>Buy lottery tickets online to the biggest lotteries in the world offering huge jackpot prizes that you can win when you play online lottery.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-5 text-center">--}}
{{--                    <div class="timer-part">--}}
{{--                        <div class="clock"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2">--}}
{{--                    <div class="link-area text-center">--}}
{{--                        <a href="#0" class="border-btn">register & play</a>--}}
{{--                        <a href="#0" class="text-btn">view all offer</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- lottery-timer-section end -->

    <!-- jackpot-section start -->
{{--    <section class="jackpot-section section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-header text-center">--}}
{{--                        <h2 class="section-title">Lottery Jackpots</h2>--}}
{{--                        <p>Choose from the Powerball, Mega Millions, Lotto or Lucky Day Lotto and try for a chance to win a big cash prize</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="jackpot-item text-center">--}}
{{--                        <img src="{{asset('assets2/images/elements/jackpot-1.png')}}" alt="image">--}}
{{--                        <span class="amount">€161,557,581</span>--}}
{{--                        <h5 class="title">US Powerball</h5>--}}
{{--                        <p class="next-draw-time">Next Draw : <span id="remainTime1"></span></p>--}}
{{--                        <a href="#0" class="cmn-btn">play now!</a>--}}
{{--                    </div>--}}
{{--                </div><!-- jackpot-item end -->--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="jackpot-item text-center">--}}
{{--                        <img src="{{asset('assets2/images/elements/jackpot-2.png')}}" alt="image">--}}
{{--                        <span class="amount">€161,557,581</span>--}}
{{--                        <h5 class="title">Cancer Charity</h5>--}}
{{--                        <p class="next-draw-time">Next Draw : <span id="remainTime2"></span></p>--}}
{{--                        <a href="#0" class="cmn-btn">play now!</a>--}}
{{--                    </div>--}}
{{--                </div><!-- jackpot-item end -->--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="jackpot-item text-center">--}}
{{--                        <img src="{{asset('assets2/images/elements/jackpot-3.png')}}" alt="image">--}}
{{--                        <span class="amount">€161,557,581</span>--}}
{{--                        <h5 class="title">EuroJackpot</h5>--}}
{{--                        <p class="next-draw-time">Next Draw : <span id="remainTime3"></span></p>--}}
{{--                        <a href="#0" class="cmn-btn">play now!</a>--}}
{{--                    </div>--}}
{{--                </div><!-- jackpot-item end -->--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <a href="#0" class="text-btn">Show all lotteries</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- jackpot-section start -->
            <?php
                            
            $curl = curl_init();
            
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://powerball.p.rapidapi.com/latest",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: powerball.p.rapidapi.com",
               "X-RapidAPI-Key: 77e05338camsh4dc4c3d47317c6cp173d5fjsnf30e5cf1196d"
            ],
            ]);
        
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                if ($err) {
                echo "cURL Error #:" . $err;
                } else {
                        
                        //print_r($response);
                        /*
                            below code for testing only
                        */
                        // $response = '{"status":"success","data":[{
                        // "DrawingDate":"2022-03-26T00:00:00.000Z",
                        // "FirstNumber":2,
                        // "SecondNumber":10,
                        // "ThirdNumber":50,
                        // "FourthNumber":59,
                        // "FifthNumber":61,
                        // "PowerBall":6,
                        // "Multiplier":3,
                        // "Jackpot":"$181,000,000",
                        // "NumberSet":"2 10 50 59 61 6 3x"}]}';
                        //ends here
                        
                        
                        $json = json_decode($response, true);
                        $json_array = $json["data"];
                        $DrawingDate =  $json_array[0]["DrawingDate"];
                        $Jackpot =  $json_array[0]["Jackpot"];
                        $NumberSet =  $json_array[0]["NumberSet"];
                        $FirstNumber =  $json_array[0]["FirstNumber"];
                        $SecondNumber =  $json_array[0]["SecondNumber"];
                        $ThirdNumber =  $json_array[0]["ThirdNumber"];
                        $FourthNumber =  $json_array[0]["FourthNumber"];
                        $FifthNumber =  $json_array[0]["FifthNumber"];
                        $PowerBall =  $json_array[0]["PowerBall"];

                        
                }
            ?>
    <!-- lottery-result-section start -->
    <section class="lottery-result-section section-padding has_bg_image" data-background="{{asset('assets2/images/bg-one.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Lottery Results</h2>
                        <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto jackpots! </p>
                            <div class="row"><div class="col-lg-4 col-md-6"></div><div class="col-lg-4 col-md-6"><div class="jackpot-item text-center"><a href="https://powerball.com" target="_blank"><img src="https://mylottocoin.com/assets/images/elements/powerball.png" alt="image" class="img-fluid"></a><span class="amount">Official Estimated Jackpot</span><h5 class="title">$195 Million
</h5><p class="next-draw-time">Next Drawing : <b>Tue, Mar 29</b></p><p class="mt-2">Countdown to Drawing</p><p><b>Count Down</b></p><p class="mt-2"> LottoCryptoCoin Powerball Follows </p><p> U.S Powerball Rules! </p><a class="cmn-btn" href="/ticket">play now!</a></div></div><div class="col-lg-4 col-md-6"></div><div class="col-lg-12 text-center"><a class="text-btn" href="/result">see all result</a></div>
                            </div>

                            Lottery Winning Numbers
                            
                    </div>
                    
                </div>
            </div>
            
            
            
            <section class="lottery-result-section section-padding has_bg_image d-flex align-items-center" style="background-image: url('assets/images/dark-bg-one.jpg');"><div class="container"><div class="row justify-content-center"><div class="col-lg-7"><div class="section-header text-center"><h2 class="section-title">Latest Lottery Results</h2></div></div></div><div class="row"><div class="col-lg-12"><div class="lottery-winning-num-part"><div class="lottery-winning-num-table"><h3 class="block-title">lottery winning numbers</h3><div class="lottery-winning-table"><table><thead><tr><th class="name">lottery</th><th class="date">draw date</th><th class="numbers">winning numbers</th></tr></thead><tbody><tr><td><div class="winner-details"><span class="winner-name">LottoCryptoCoin (US Powerball)</span></div></td><td><span class="winning-date"><?php $subject = $DrawingDate; $search = 'T00:00:00.000Z' ; $trimmed = str_replace($search, '', $subject); echo $trimmed ; ?></span></td><td><ul class="number-list"><li class="active"><?php echo $FirstNumber ?></li><li class="active"><?php echo $SecondNumber ?></li><li class="active"><?php echo $ThirdNumber ?></li><li class="active"><?php echo $FourthNumber ?></li><li class="active"><?php echo $FifthNumber ?></li><li class="activered"><?php echo $PowerBall ?></li></ul></td></tr></tbody></table></div></div></div></div><div class="col-lg-12 text-center"><a class="text-btn" href="/result">See the latest results</a></div></div></div></section>
            
            
                      
                        
                        
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="lottery-winning-num-part">
                        <div class="lottery-winning-num-table">
                            <h3 class="block-title">lottery winning numbers</h3>
                            <div class="lottery-winning-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="name">lottery</th>
                                            <th class="date">draw date</th>
                                            <th class="numbers">winning numbers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            
                                        $curl = curl_init();
                                        
                                        curl_setopt_array($curl, [
                                        CURLOPT_URL => "https://powerball.p.rapidapi.com/Latest10",
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 30,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HTTPHEADER => [
                                        "X-RapidAPI-Host: powerball.p.rapidapi.com",
                                            "X-RapidAPI-Key: 77e05338camsh4dc4c3d47317c6cp173d5fjsnf30e5cf1196d"
                                        ],
                                        ]);
                                    
                                            $response = curl_exec($curl);
                                            $err = curl_error($curl);
                                            
                                            curl_close($curl);
                                            
                                            if ($err) {
                                            echo "cURL Error #:" . $err;
                                            } else {
                                                    
                                                    //print_r($response);
                                                    
                                                    $json = json_decode($response, true);
                                                    // echo "<pre>"; print_r($response);exit;
                                                    $json_array = $json["data"];
                                                    
                            
                                                    
                                            }
                                        ?>
                                        <?php foreach ($json_array as $key => $results_) {
                                            $DrawingDate =  $results_["DrawingDate"];
                                            $Jackpot =  $results_["Jackpot"];
                                            $NumberSet =  $results_["NumberSet"];
                                            $FirstNumber =  $results_["FirstNumber"];
                                            $SecondNumber =  $results_["SecondNumber"];
                                            $ThirdNumber =  $results_["ThirdNumber"];
                                            $FourthNumber =  $results_["FourthNumber"];
                                            $FifthNumber =  $results_["FifthNumber"];
                                            $PowerBall =  $results_["PowerBall"];    
                                        ?>
                                            <tr>
                                                <td><div class="winner-details"><img src="{{asset('assets2/images/flag/1.jpg')}}" alt="flag"><span class="winner-name">MyLottoCoin (US Powerball)</span></div></td>
                                                <td><span class="winning-date"><?php $subject = $DrawingDate; $search = 'T00:00:00.000Z' ; $trimmed = str_replace($search, '', $subject); echo $trimmed ; ?></span></td>
                                                <td>
                                                    <ul class="number-list">
                                                        <li><?= $FirstNumber ?></li>
                                                        <li><?= $SecondNumber ?></li>
                                                        <li><?= $ThirdNumber ?></li>
                                                        <li class="active"><?= $FourthNumber ?></li>
                                                        <li><?= $FifthNumber ?></li>
                                                        <li><?= $PowerBall ?></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="winner-part">
                        <h3 class="block-title">our winners</h3>
                        <div class="winner-list">
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{asset('assets2/images/flag/1.jpg')}}" alt="flag"><span class="name">vola pitmar</span></div>
                                <p><span class="lottery-name">Cancer Charity</span><span class="date">30/05/2018</span></p>
                                <h5 class="prize-amount">€500.00</h5>
                            </div> 
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{asset('assets2/images/flag/4.jpg')}}" alt="flag"><span class="name">cay colon</span></div>
                                <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                                <h5 class="prize-amount">€340.00</h5>
                            </div>
                            <div class="winner-single">
                                <div class="winner-header"><img src="{{asset('assets2/images/flag/5.jpg')}}" alt="flag"><span class="name">irez newtkon</span></div>
                                <p><span class="lottery-name">Powerball</span><span class="date">30/05/2018</span></p>
                                <h5 class="prize-amount">€130.00</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 text-center">
                    <a href="#" class="text-btn">see all result</a>
                </div>
            </div>
        </div>
    </section>
    <!-- lottery-result-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding">
        <div class="choose-us-image"><img src="{{asset('assets2/images/elements/mouse.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Why Choose Us?</h2>
                        <p>LottoCryptoCoin makes playing the world's largest lotteries easy and fun.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row mt-mb-15">
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="choose-item text-center">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- work-steps-section strat -->
    <section class="work-steps-section section-padding border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h2 class="section-title">how it works</h2>
                        <p>LottoCryptoCoin is the best way to play these exciting lotteries from anywhere in the world.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-steps-items-part d-flex">
                        <div class="line"><img src="{{asset('assets2/images/elements/line.png')}}" alt="line-image"></div>
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('assets2/images/svg-icons/how-work-icons/1.svg')}}" alt="icon">
                                    <span class="count-num">01</span></div>
                                <h4 class="title">choose</h4>
                                <p>Choose your lottery & pick your numbers</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('assets2/images/svg-icons/how-work-icons/2.svg')}}" alt="icon">
                                    <span class="count-num">02</span></div>
                                <h4 class="title">buy</h4>
                                <p>Complete your purchase</p>
                            </div>
                        </div><!-- work-steps-item end -->
                        <div class="work-steps-item">
                            <div class="work-steps-item-inner">
                                <div class="icon"><img src="{{asset('assets2/images/svg-icons/how-work-icons/3.svg')}}" alt="icon">
                                    <span class="count-num">01</span></div>
                                <h4 class="title">win</h4>
                                <p>Start dreaming, you're almost there</p>
                            </div>
                        </div><!-- work-steps-item end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-steps-thumb-part">
                        <img src="{{asset('assets2/images/elements/step.png')}}" alt="work-step-image">
                        <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-steps-section strat -->

    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding has_bg_image" data-background="assets/images/bg-two.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <h2 class="section-title">Buy Lottery Tickets Online</h2>
                        <p>Play the lottery online safely and securely at theLotter, the leading lottery ticket purchasing service in the world </p>
                    </div>
                </div>
            </div>

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-10">--}}
{{--                    <div class="online-ticket-table-part">--}}
{{--                        <div class="online-ticket-table">--}}
{{--                            <h3 class="block-title">Select your winning lottery numbers</h3>--}}
{{--                            <div class="online-ticket-table-wrapper">--}}
{{--                                <table>--}}
{{--                                    <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th class="name">lottery</th>--}}
{{--                                            <th class="jackpot">jackpot</th>--}}
{{--                                            <th class="price">price</th>--}}
{{--                                            <th class="draw-time">time to draw</th>--}}
{{--                                            <th class="sold-num">sold</th>--}}
{{--                                            <th class="status">status</th>--}}
{{--                                        </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="winner-details"><img src="{{asset('assets2/images/flag/1.jpg')}}" alt="flag"><span class="winner-name">cancer charity</span></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="jackpot-price">€ 53,000,000</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="price">€3.9</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="draw-timer"></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="progressbar" data-perc="50%">--}}
{{--                                                    <div class="bar"></div>--}}
{{--                                                    <span class="label">50</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="cmn-btn">buy ticket</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="winner-details"><img src="{{asset('assets2/images/flag/2.jpg')}}" alt="flag"><span class="winner-name">US Powerball</span></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="jackpot-price">€ 53,000,000</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="price">€3.9</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="draw-timer"></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="progressbar" data-perc="50%">--}}
{{--                                                    <div class="bar"></div>--}}
{{--                                                    <span class="label">50</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="cmn-btn">buy ticket</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="winner-details"><img src="{{asset('assets2/images/flag/3.jpg')}}" alt="flag"><span class="winner-name">Mega Millions</span></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="jackpot-price">€ 53,000,000</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="price">€3.9</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="draw-timer"></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="progressbar" data-perc="50%">--}}
{{--                                                    <div class="bar"></div>--}}
{{--                                                    <span class="label">50</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="cmn-btn">buy ticket</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="winner-details"><img src="{{asset('assets2/images/flag/1.jpg1')}}" alt="flag"><span class="winner-name">UK Lotto</span></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="jackpot-price">€ 53,000,000</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="price">€3.9</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="draw-timer"></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="progressbar" data-perc="50%">--}}
{{--                                                    <div class="bar"></div>--}}
{{--                                                    <span class="label">50</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="cmn-btn">buy ticket</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <div class="winner-details"><img src="{{asset('assets2/images/flag/3.jpg')}}" alt="flag"><span class="winner-name">Mega Millions</span></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="jackpot-price">€ 53,000,000</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="price">€3.9</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="draw-timer"></div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="progressbar" data-perc="50%">--}}
{{--                                                    <div class="bar"></div>--}}
{{--                                                    <span class="label">50</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="#" class="cmn-btn">buy ticket</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <a href="#" class="text-btn">view all lotteries</a>--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>
    </section>
    <!-- online-ticket-section end -->

    <!-- affiliate-section start -->
    
    <!-- affiliate-section end -->

    <!-- payment-method-section start -->
    
    <!-- payment-method-section end -->

    <!-- active-user-section start -->
    
    <!-- active-user-section end -->

    <!-- testimonial-section start -->
    
    <!-- testimonial-section end -->

    <!-- team-section start -->
        <!-- team-section end -->

    <!-- contact-section start -->
    <!-- <section class="contact-section border-top overflow-hidden has_bg_image" data-background="assets/images/bg-three.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h5 class="top-title">We answer all of your questions</h5>
                        <h2 class="section-title text-uppercase">Contact us</h2>
                        <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
                    </div>
                    <div class="contact-form-area">
                        <form class="contact-form">
                            <div class="form-grp">
                                <input type="text" name="contact_name" id="contact_name" placeholder="Full Name">
                            </div>
                            <div class="form-grp">
                                <input type="email" name="contact_email" id="contact_email" placeholder="Email Address">
                            </div>
                            <div class="form-grp">
                                <input type="tel" name="contact_phone" id="contact_phone" placeholder="Phone No">
                            </div>
                            <div class="form-grp">
                                <textarea name="contact_message" id="contact_message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-grp">
                                <input class="submit-btn" type="submit" value="sent message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-thumb">
                        <img src="{{asset('assets2/images/elements/contact.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- contact-section end -->

    <!-- brand-section start -->
    <!-- <div class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/1.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/2.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/3.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/4.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/5.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/3.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/4.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-inner">
                                <img src="{{asset('assets2/images/brand/5.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- brand-section end -->

    @endsection
{{--<script>--}}
{{--    var clock = $('.clock').FlipClock(99000 * 24 * 3, {--}}
{{--        clockFace: 'DailyCounter',--}}
{{--        countdown: true--}}
{{--    });--}}
{{--    jQuery(document).ready(function() {s--}}
{{--        jQuery('#vmap').vectorMap({--}}
{{--                                      map: 'world_en',--}}
{{--                                      color: '#eaedef',--}}
{{--                                      backgroundColor: '#f7fcff',--}}
{{--                                      hoverOpacity: 0.8,--}}
{{--                                      selectedColor: '#eaedef',--}}
{{--                                      scaleColors: ['#f7fcff', '#f7fcff'],--}}
{{--                                      normalizeFunction: 'polynomial'--}}
{{--                                  });--}}
{{--    });--}}
{{--</script>--}}
