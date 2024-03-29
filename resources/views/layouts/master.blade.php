<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','My Blog | Home')</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('blog')}}">MyBlog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    @if(! Auth::check())
                    <li class="login"><a href="{{url('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                    @else
                        <li><a href="{{route('home')}}">My account</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>

    @yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="copyright">&copy; tahmid-ni7 {{date('Y')}}</p>
            </div>
            <div class="col-md-4">
                <nav>
                    <ul class="social-icons">
                        <li><a href="#" class="i fa fa-facebook"></a></li>
                        <li><a href="#" class="i fa fa-twitter"></a></li>
                        <li><a href="#" class="i fa fa-google-plus"></a></li>
                        <li><a href="#" class="i fa fa-github"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
