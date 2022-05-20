<!DOCTYPE html>
<html lang="en">
<head>
    <title>Token Generation Web Application</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('edu/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('edu/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('edu/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('edu/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('edu/css/style-mob.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        .header{
            /*margin-bottom: 10%;*/
        }

        .body{
           margin-top:11%;
           margin-bottom: 10%

        }
        .footer{

        }
    </style>
</head>
<body class="app">
    <div class="header">
    @include('frontend.layout.header')
    </div>
    <div class="container body">
         @yield('content')
    </div>
    <div class="footer">
    @include('frontend.layout.footer')
    </div>
    <script src="{{asset('edu/js/main.min.js')}}"></script>
    <script src="{{asset('edu/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('edu/js/materialize.min.js')}}"></script>
    <script src="{{asset('edu/js/custom.js')}}"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('sweetalert::alert')
</body>
</html>