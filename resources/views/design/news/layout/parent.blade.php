<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>news  |  @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('design/news/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('design/news/css/modern-business.css')}}" rel="stylesheet">
@yield('style')
</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('news')}}">news</a>

        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news')}}">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.all')}}">local news</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.all')}}">International news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.all')}}">sport news</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.detailes')}}">detailes news</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.contact')}}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Momen Sisalem 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('design/news/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('design/news/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('script')
</body>

</html>
