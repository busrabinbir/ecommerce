<!DOCTYPE html>
<html lang="en">
<head>
  <title>eCommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container-fluid ecommerce top">
    <span>eCommerce</span>
</div>
<nav class="navbar navbar-expand-sm navbar-custom">
   <div class="container-fluid">
    <a class="navbar-button" href="/home">Home</a>
    <a href="#categories" class="navbar-button" data-toggle="collapse">Categories <span class="caret"></span></a>
    <div id="categories" class="collapse">
        <ul class="nav navbar-nav">
             @foreach($data['data'] as $category) <!-- kategorileri burada listeliyoruz -->
                <li><a class="nav-link" href="#">{{$category['name']}}</a></li>
             @endforeach
        </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
