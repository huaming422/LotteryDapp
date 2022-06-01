@extends('templates.newDesign.master')
@section('content')
    <section class="powerball">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>View Results</h2>
                </div>
            </div>
        </div>
    </section>


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
    <section class="lottery-result-section  has_bg_image" data-background="{{asset('assets2/images/bg-one.jpg')}}">
        <div class="container">
            <!--<div class="row justify-content-center">-->
            <!--    <div class="col-lg-7">-->
            <!--        <div class="section-header text-center">-->
            <!--            <h2 class="section-title">Latest Lottery Results</h2>-->
            <!--            <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto jackpots! </p>-->
            <!--                <div class="row"><div class="col-lg-4 col-md-6"></div><div class="col-lg-4 col-md-6"><div class="jackpot-item text-center"><a href="https://powerball.com" target="_blank"><img src="https://mylottocoin.com/assets/images/elements/powerball.png" alt="image" class="img-fluid"></a><span class="amount">Official Estimated Jackpot</span><h5 class="title">$195 Million-->
            <!--                    </h5><p class="next-draw-time">Next Drawing : <b>Tue, Mar 29</b></p><p class="mt-2">Countdown to Drawing</p><p><b>Count Down</b></p><p class="mt-2"> LottoCryptoCoin Powerball Follows </p><p> U.S Powerball Rules! </p><a class="cmn-btn" href="/ticket">play now!</a></div></div><div class="col-lg-4 col-md-6"></div><div class="col-lg-12 text-center"><a class="text-btn" href="/result">see all result</a></div>-->
            <!--                </div>-->

            <!--                Lottery Winning Numbers-->
                            
            <!--        </div>-->
                    
            <!--    </div>-->
            <!--</div>-->
            
            
            
            <section class="lottery-result-section section-padding has_bg_image d-flex align-items-center" style="background-image: url('assets/images/dark-bg-one.jpg');"><div class="container"><div class="row justify-content-center"><div class="col-lg-7"><div class="section-header text-center">
                <!--<h2 class="section-title">Latest Lottery Results</h2>-->
                </div></div></div><div class="row"><div class="col-lg-12"><div class="lottery-winning-num-part"><div class="lottery-winning-num-table"><h3 class="block-title">lottery winning numbers</h3><div class="lottery-winning-table"><table><thead><tr><th class="name">lottery</th><th class="date">draw date</th><th class="numbers">winning numbers</th></tr></thead><tbody><tr><td><div class="winner-details"><span class="winner-name">LottoCryptoCoin (US Powerball)</span></div></td><td><span class="winning-date"><?php $subject = $DrawingDate; $search = 'T00:00:00.000Z' ; $trimmed = str_replace($search, '', $subject); echo $trimmed ; ?></span></td><td><ul class="number-list"><li class="active"><?php echo $FirstNumber ?></li><li class="active"><?php echo $SecondNumber ?></li><li class="active"><?php echo $ThirdNumber ?></li><li class="active"><?php echo $FourthNumber ?></li><li class="active"><?php echo $FifthNumber ?></li><li class="activered"><?php echo $PowerBall ?></li></ul></td></tr></tbody></table></div></div></div></div><div class="col-lg-12 text-center"><a class="text-btn" href="/result">See the latest results</a></div></div></div></section>
            
            
                      
                        
                        
            
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
        </div>
    </section>
    <!-- lottery-result-section end -->

@endsection
