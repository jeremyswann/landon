<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Landon Hotel App</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}">
    <meta class="foundation-mq"></head>
<body>

<!-- Start Top Bar -->
<header>
    <div class="">
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/bootstrap-solid.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <i class="fa fa-bed" aria-hidden="true"></i>
                Landon Hotel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients') }}">Clients</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reservations
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Penthouse Suite</a>
                                <a class="dropdown-item" href="#">Premium Suite</a>
                                <a class="dropdown-item" href="#">Master Suite</a>
                            </div>
                    </li>
                </ul>
            </div>
            <div class="btn-group" role="group" aria-label="Login">
                <button type="button" class="border border-secondary text-light btn btn-secondary" disbaled><i class="fa fa-key" aria-hidden="true"></i></button>
                <button class="border border-secondary text-dark btn btn-secondary" type="button" aria-label="Login" aria-describedby="login-addon">Login</button>
            </div>
        </nav>
    </div>
</header>
<!-- End Top Bar -->


<section class="my-5">
    <div class="container">

            @yield('content')

    </div>
</section>


<footer>
    <div class="container">
        <hr>
        <div class="row">
            <hr>
            <ul class="navbar-nav">
                <li class="nav-item">Copyright 2017</li>
            </ul>
        </div>
    </div>
</footer>

<script>
    $(document).foundation();
</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>

<script src="{{ asset ('js/vendor/jquery.js') }}"></script>
<script src="{{ asset ('js/vendor/what-input.js') }}"></script>
<script src="{{ asset ('js/app.js') }}"></script>
<script src="{{ asset ('pickadate/lib/picker.js') }}"></script>
<script src="{{ asset ('pickadate/lib/picker.date.js') }}"></script>
<script>
    $('.datepicker').pickadate(
        {
            format: 'yyyy-mm-dd',
            formatSubmit: 'yyyy-mm-dd'
        }
    );
</script>
</body>
</html>