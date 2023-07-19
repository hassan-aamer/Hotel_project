<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <meta name="keywords" content="hotel, project, Utrecht">
    <meta name="description" content="This is my first project">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>@yield('title')</title>

</head>
<body>
    <nav id="navbar">
        <div class="container">
            <h1 class="logo">
                &nbsp;&nbsp;
                <a href="index.html">HOTEL X</a>
            </h1>
            <ul>
                <li><a class="current" href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    @yield('body')
    <!-- start footer -->
    <footer id="main-footer">
        <div class="social-icons">
                &nbsp;
                <a href=""> <img src="images/8instagram.png" alt="" width="30px" height="30px"></a>
                &nbsp;&nbsp;
                <a href=""> <img src="images/8facebook.png" alt="" width="30px" height="30px"></a>
                &nbsp;&nbsp;
                <a href="" > <img src="images/whatsapp.png"alt="" width="30px" height="30px"></a>
            </div>
            &nbsp;&nbsp;
        <p>HOTEL X &copy; 2020, All Rights Resvered</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
