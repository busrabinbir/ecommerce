<!DOCTYPE html>
<html lang="tr">
<head>
    <title>eCommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div id="page-container">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <strong><span class="text-grey">e</span><span class="text-primary">Commerce</span><span
                        class="text-primary">.</span></strong>
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/home" class="nav-link waves-effect">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown" id="dropdown">
                        <a class="nav-link waves-effect" data-toggle="nav-item dropdown" href="#">Categories</a>
                        <ul class="dropdown-menu" role="menu">
                        @foreach($categories['data'] as $category) <!-- kategorileri burada listeliyoruz -->
                            <li>
                                <a class="dropdown-item" href="/category/{{$category['id']}}">
                                    {{$category['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#modalContactForm" class="nav-link waves-effect">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item pl-2 mb-2 mb-md-0">
                        <a href="#" class="nav-link waves-effect">
                            Sign up
                        </a>
                    </li>
                </ul>

            </div>
            <!-- Links -->
        </div>
    </nav>

    <div class="container" id="content-wrap" style="padding-top: 50px">
        @yield('content')
    </div>
    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; eCommerce 2021</p>
        </div>
        <!-- /.container -->
    </footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/js/pagination.js')}}"></script>

</body>
</html>
