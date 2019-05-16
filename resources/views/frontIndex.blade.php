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

                        <li>بانک اطلاعاتی پی پال در بردارنده تعدادی بیش از ۱۰۰۰ شرکت و متخصص می باشد !</li>
                        <li>بسیاری از کاربران با استفاده این بانک اطلاعاتی متخصص یا شرکت مورد نظر خود را یافته اند !</li>

                    </ul>
                </div>

            </div>


            <div class="col-sm-6 col-md-6 clo-lg-6">

                <ul class="list-inline text-left social-icon">

                    <header-social-component social-link=# my-data="{{asset('assets/img/telegram.png')}}"></header-social-component>
                    <header-social-component social-link=# my-data="{{asset('assets/img/instagram.png')}}"></header-social-component>
                    <header-social-component social-link=# my-data="{{asset('assets/img/google-plus.png')}}"></header-social-component>
                    <header-social-component social-link=# my-data="{{asset('assets/img/facebook.png')}}"></header-social-component>
                    <header-social-component social-link=# my-data="{{asset('assets/img/twitter.png')}}"></header-social-component>

                </ul>


            </div>



        </div>
    </div>


    <div class="container-fluid" id="topbar-link-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="#"><img src="{{asset('assets/img/logo.png')}}" height="50" width="120" alt="logo"/></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <ul class="list-inline text-left" id="topbar-link">
                        <li><i class="material-icons">perm_identity</i><a href="#">ورود</a> | <a href="#">عضویت</a></li>
                        <li><i class="material-icons">contact_mail</i> <a href="#">تماس با ما</a></li>
                        <li><i class="material-icons">phone</i>0910 542 20 29</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>
<script src="{{mix('/js/front.js')}}" type="text/javascript"></script>
</body>
</html>