<!DOCTYPE html>
<html>
<head>
    <title>ButarFreeBook</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>
<body>
  <div class="main">
    <section class="sec1">
        <div class="container">
            @yield('content')
        </div>
        <div class="bg-wrapper">
            <a onclick="bgcolor('lightblue')" id="lightblue">lightblue</a>
            <a onclick="bgcolor('salmon')" id="salmon">salmon</a>
            <a onclick="bgcolor('burlywood')" id="burlywood">burlywood</a>
        </div>
    </section>
</div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
    <script src="{{ asset('asset/js/script.js')}}"></script>
</body>
</html>