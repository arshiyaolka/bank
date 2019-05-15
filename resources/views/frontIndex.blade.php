<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">

    <title>Document</title>

</head>
<body>
<div id="body">


    <div class="container-fluid" id="social-container">
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">

                <div id="ticker-fade" class="ticker">
                    <ul>
                        <li>آيا مي دانيد بهترین منبع برای یافتن بهریتن متخصص ها در هر زمینه ای سایت ما میباشد!</li>
                        {{--<li>آيا مي دانيد ميانگين رضايت دانشجويان سون لرن از دوره ها، بيش از ۹۳% مي باشد!</li>--}}

                    </ul>
                </div>

            </div>

            <div class="col-sm-6 col-md-6 clo-lg-6">

                <ul class="list-inline text-left social-icon">
                    <li><a href="#"><img src="{{asset('assets/img/telegram.png')}}" height="30" width="30"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/instagram.png')}}" height="30" width="30"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/google-plus.png')}}" height="30" width="30"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/facebook.png')}}" height="30" width="30"/></a></li>
                    <li><a href="#"><img src="{{asset('assets/img/twitter.png')}}" height="30" width="30"/></a></li>
                </ul>


            </div>
        </div>
    </div>


</div>
<script src="{{mix('/js/front.js')}}" type="text/javascript"></script>
</body>
</html>