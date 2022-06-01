@extends('templates.newDesign.master')
@section('content')

<head>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src ="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BDYVJPDBNW"></script>
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link> -->
</head>


    <section class="powerball">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>PowerBall</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="single-categories-play-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-cat-play-area">
                        <div class="single-header d-flex justify-content-between">
                            <div class="left d-flex">
                                <div class="icon"><img src="{{asset('assets2/images/jackpot-1.png')}}" alt=""></div>
                                <div class="content">
                                    <h3 class="title">(US Powerball)</h3><span>
                                    <a target="_blank"
                                       rel="noopener noreferrer"
                                       href="https://bscscan.com/address/0xD9A2267C10aBE89D47C3B74A1Aa033BD2190Ea30"><span
                                            class="amount">BNB 0.000000</span><img src="https://www.mylottocoin.com/assets/images/bnb_black.PNG"
                                                                                   width="30" alt="bscscan" class="mb-2 ml-2"
                                                                                   style="border-radius: 50%;"></a></span>
                                </div>
                            </div>
                            <div class="right text-right"><span id="timer" class="draw-days">66:53:21</span>
                                <div class="header-btn-area"><button type="button" id="quick-pick-all">Quick Pick
                                                                                                       All</button><button type="button" id="add-item"><i
                                            class="fa fa-plus"></i></button><button type="button" id="delete-item"><i
                                            class="fa fa-trash"></i></button><button type="button" id="clear-item"><i
                                            class="fa fa-times"></i></button></div><span class="draw-days">Total tickets <span id="limitCount">1</span> / 5</span>
                            </div>
                        </div>
                        <div class="single-body">
                            <div class="single-body-inner d-flex">




                           
                                <div class="play-card ng-star-inserted" id="playBox-1" data-index="0" data-val="1">
                                    <div id="playcard-wrap-0">
                                        <!---->
                                        <div class="play-card-inner text-center">
                                            <div class="play-card-header"><span class="number-amount">Pick 4 Numbers</span>
                                                <div class="header-btn-area">
                                                    <button class="cloner clonerOnClick" type="button" id="quick-pick-1" onclick="return quickPick(1)">quick pick</button>
                                                    <button class="cloner clonerOnClick" type="button" id="clear-pick-1" onclick="return clearBox(1)">clear</button>
                                                </div>
                                            </div>

                                            <div class="play-card-body">
                                                <ul class="number-list multiple-number-list number-lp cloner" id="number-lp-1" data-limit="0" data-val="1" >
                                                    <li class="ng-star-inserted"> 1</li>
                                                    <li class="ng-star-inserted"> 2</li>
                                                    <li class="ng-star-inserted"> 3</li>
                                                    <li class="ng-star-inserted"> 4</li>
                                                    <li class="ng-star-inserted"> 5</li>
                                                    <li class="ng-star-inserted"> 6</li>
                                                    <li class="ng-star-inserted"> 7</li>
                                                    <li class="ng-star-inserted"> 8</li>
                                                    <li class="ng-star-inserted"> 9</li>
                                                    <li class="ng-star-inserted"> 10</li>
                                                    <li class="ng-star-inserted"> 11</li>
                                                    <li class="ng-star-inserted"> 12</li>
                                                    <li class="ng-star-inserted"> 13</li>
                                                    <li class="ng-star-inserted"> 14</li>
                                                    <li class="ng-star-inserted"> 15</li>
                                                    <li class="ng-star-inserted"> 16</li>
                                                    <li class="ng-star-inserted"> 17</li>
                                                    <li class="ng-star-inserted"> 18</li>
                                                    <li class="ng-star-inserted"> 19</li>
                                                    <li class="ng-star-inserted"> 20</li>
                                                    <li class="ng-star-inserted"> 21</li>
                                                    <li class="ng-star-inserted"> 22</li>
                                                    <li class="ng-star-inserted"> 23</li>
                                                    <li class="ng-star-inserted"> 24</li>
                                                    <li class="ng-star-inserted"> 25</li>
                                                    <li class="ng-star-inserted"> 26</li>
                                                    <li class="ng-star-inserted"> 27</li>
                                                    <li class="ng-star-inserted"> 28</li>
                                                    <li class="ng-star-inserted"> 29</li>
                                                    <li class="ng-star-inserted"> 30</li>
                                                    <li class="ng-star-inserted"> 31</li>
                                                    <li class="ng-star-inserted"> 32</li>
                                                    <li class="ng-star-inserted"> 33</li>
                                                    <li class="ng-star-inserted"> 34</li>
                                                    <li class="ng-star-inserted"> 35</li>
                                                    <li class="ng-star-inserted"> 36</li>
                                                    <li class="ng-star-inserted"> 37</li>
                                                    <li class="ng-star-inserted"> 38</li>
                                                    <li class="ng-star-inserted"> 39</li>
                                                    <li class="ng-star-inserted"> 40</li>
                                                    <li class="ng-star-inserted"> 41</li>
                                                    <li class="ng-star-inserted"> 42</li>
                                                    <li class="ng-star-inserted"> 43</li>
                                                    <li class="ng-star-inserted"> 44</li>
                                                    <li class="ng-star-inserted"> 45</li>
                                                    <li class="ng-star-inserted"> 46</li>
                                                    <li class="ng-star-inserted"> 47</li>
                                                    <li class="ng-star-inserted"> 48</li>
                                                    <li class="ng-star-inserted"> 49</li>
                                                    <li class="ng-star-inserted"> 50</li>
                                                    <li class="ng-star-inserted"> 51</li>
                                                    <li class="ng-star-inserted"> 52</li>
                                                    <li class="ng-star-inserted"> 53</li>
                                                    <li class="ng-star-inserted"> 54</li>
                                                    <li class="ng-star-inserted"> 55</li>
                                                    <li class="ng-star-inserted"> 56</li>
                                                    <li class="ng-star-inserted"> 57</li>
                                                    <li class="ng-star-inserted"> 58</li>
                                                    <li class="ng-star-inserted"> 59</li>
                                                    <li class="ng-star-inserted"> 60</li>
                                                    <li class="ng-star-inserted"> 61</li>
                                                    <li class="ng-star-inserted"> 62</li>
                                                    <li class="ng-star-inserted"> 63</li>
                                                    <li class="ng-star-inserted"> 64</li>
                                                    <li class="ng-star-inserted"> 65</li>
                                                    <li class="ng-star-inserted"> 66</li>
                                                    <li class="ng-star-inserted"> 67</li>
                                                    <li class="ng-star-inserted"> 68</li>
                                                    <li class="ng-star-inserted"> 69</li>
                                                    <!---->
                                                </ul><span class="add-more-text">Select PowerBall Number</span>
                                                <ul class="b1 number-list single-num-list singlenumber-lp cloner" id="singlenumber-lp-1" data-limit="0" data-val="1" >
                                                    <li class="ng-star-inserted"> 1</li>
                                                    <li class="ng-star-inserted"> 2</li>
                                                    <li class="ng-star-inserted"> 3</li>
                                                    <li class="ng-star-inserted"> 4</li>
                                                    <li class="ng-star-inserted"> 5</li>
                                                    <li class="ng-star-inserted"> 6</li>
                                                    <li class="ng-star-inserted"> 7</li>
                                                    <li class="ng-star-inserted"> 8</li>
                                                    <li class="ng-star-inserted"> 9</li>
                                                    <li class="ng-star-inserted"> 10</li>
                                                    <li class="ng-star-inserted"> 11</li>
                                                    <li class="ng-star-inserted"> 12</li>
                                                    <li class="ng-star-inserted"> 13</li>
                                                    <li class="ng-star-inserted"> 14</li>
                                                    <li class="ng-star-inserted"> 15</li>
                                                    <li class="ng-star-inserted"> 16</li>
                                                    <li class="ng-star-inserted"> 17</li>
                                                    <li class="ng-star-inserted"> 18</li>
                                                    <li class="ng-star-inserted"> 19</li>
                                                    <li class="ng-star-inserted"> 20</li>
                                                    <li class="ng-star-inserted"> 21</li>
                                                    <li class="ng-star-inserted"> 22</li>
                                                    <li class="ng-star-inserted"> 23</li>
                                                    <li class="ng-star-inserted"> 24</li>
                                                    <li class="ng-star-inserted"> 25</li>
                                                    <li class="ng-star-inserted"> 26</li>
                                                    <!---->
                                                </ul>
                                            </div>


                                            <div class="play-card-footer">
                                                <p class="play-card-footer-text">Selected Numbers:</p>
                                                <div style="display: inline-flex!important;">
                                                    <div class="selected-numbers cloner" id="total-selected-number-1"></div>
                                                    <div class=" a1 selected-numbers cloner" id="single-selected-number-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->

                            </div>
                        </div>
                        <div class="single-footer d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right d-flex justify-content-between">
                                <div class="content"></div>
                                <div class="card-cart-btn-area"><a id="paynow"> pay now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script>
$(document).ready(function() {

$("#paynow").click(function(event){
    // event.preventDefault();

    // let name = $("input[name=name]").val();
    // let email = $("input[name=email]").val();
    // let mobile_number = $("input[name=mobile_number]").val();
    // let message = $("input[name=message]").val();

    // var data = null;




    // var xhr = new XMLHttpRequest();
    // xhr.withCredentials = true;

    // xhr.addEventListener("readystatechange", function () {
    // if (this.readyState === this.DONE) {
    //      alert(this.responseText);
    //      var obj=JSON.parse(responseText);
    //      var drawdate=obj.result.date;
    //      alert(obj.result.date);
    // }
    // });

    // xhr.open("GET", "https://api.collectapi.com/chancegame/usaPowerball");
    // xhr.setRequestHeader("content-type", "application/json");
    // xhr.setRequestHeader("authorization", "");
    // xhr.withCredentials=false;

    // xhr.send(data);

   

    var str = "";
    var divs=document.getElementsByClassName('selected-numbers');
    var count = 0;
    for (let single_div of divs) {

            var spans=single_div.getElementsByTagName('span');
            count = count + 1;
            
            for (let span of spans) {
                str=str+span.textContent+" ";
                
            } 
            if(count == 2)
            {
                str+=",";
                count = 0;
            } 
            

        }
    str=str.slice(0, -1);
    let _token=$('meta[name="csrf-token"]').attr('content');

    // alert("Hello");
        $.ajax({
                                url: "/pay-now",
                                type:"POST",
                                data:{
                                    user_id:"ayesha",
                                    draw_date:"2021-9-10",
                                    tkt_no:str,
                                    // email:email,
                                    // mobile_number:mobile_number,
                                    // message:essage,
                                    _token: _token
                                },
                                success:function(response){
                                    // alert("success");
                                    console.log(response);
                                    if(response) {
                                        window.location.href = "/view-ticket";
                                    }
                                },
                                error: function(error) {
                                    // alert("error");
                                    console.log(error);
                                }
        });
    });
});

</script>
<!-- <script>
    

    function payNow()
    {
        var str = "";
        var divs=document.getElementsByClassName('selected-numbers');
        for (let single_div of divs) {

            var spans=single_div.getElementsByTagName('span');
            for (let span of spans) {
               
                str+=span.textContent;
                
            }
        }alert(str);
    }

    
</script> -->





<script>

    // var data = null;

    // var xhr = new XMLHttpRequest();
    // xhr.withCredentials = true;

    // xhr.addEventListener("readystatechange", function () {
    // if (this.readyState === this.DONE) {
    //     alert(this.responseText);
    // }
    // });

    // xhr.open("GET", "https://api.collectapi.com/chancegame/usaPowerball");
    // xhr.setRequestHeader("content-type", "application/json");
    // xhr.setRequestHeader("authorization", "");
    // xhr.withCredentials=false;

    // xhr.send(data);

    

    var responseText='{"success": true,"result": {"date": "Tomorrow, March 22, 2022"}}';

    var obj=JSON.parse(responseText);
    // alert(obj.result.date);
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById("timer").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BDYVJPDBNW');
</script>

<script>
var web3;
async function Connect(){
	await window.web3.currentProvider.enable();
	web3=new Web3(window.web3.currentProvider);
}
</script>
@endsection
