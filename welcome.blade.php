<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 10px;
            font-size: 18px;
        }

        .owl-carousel {
            margin-top: 50px;
            text-align: center;
        }

        .owl-carousel .item img {
            width: 80%;
            height: auto;
            margin: 0 auto;
        }

        .content {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        .content h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #333;
        padding: 20px;
        }
        .navbar .logo img {
        width: 100px; /* Ajusta el tamaño del logo según tus necesidades */
        height: auto;
        }

        .content p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 40px;
        }
        .navbar .logo img {
        width: 20px; /* Ajusta el tamaño del logo según tus necesidades */
        height: auto;
        }

            .navbar .menu {
                display: flex;
                align-items: center;
            }

            .navbar .menu a {
                color: #fff;
                text-decoration: none;
                margin: 10px;
                font-size: 18px;
            }
            .content{
                margin-top: 120px;
            }
        .owl-carousel{
            margin-top: 180px;
        }
        .footer {
            margin-top: 0%;
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
        
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Owl Carousel Initialization -->
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                dots: true,
                nav: false
            });
        });
    </script>
</head>
<body>

    {{-- modifiicar el disenio del navbar --}}
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Descripción de la imagen">
        </div>
    {{-- NO TOCAR LOS URL NI LAS RUTAS  DE LOS a href (se puede modificar el estilo de los <a>) --}}
        <div class="menu">

            
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
    {{-- modificar el carousel es una seccion de noticias como el del campus virtual  --}}

    <div class="content">
        <h1>Bienvenida/o al Gestor de Archivos!</h1>
        <p>Gestiona cada uno de tus documentos.</p>
    </div>
    
    <div class="owl-carousel">
        <div class="item">
            <img src="images/anuciopower.jpg" alt="Descripción de la imagen">
        </div>
        <div class="item">
            < <img src="images/imagenprueba.png" alt="Descripción de la imagen">
        </div>
        <div class="item">
            <img src="images/anunciodocumento.png" alt="Descripción de la imagen">
        </div>
    </div>

    <footer class="footer">
        <p>© 2023 DataDocument_. Todos los derechos reservados.</p>
    </footer>
    
</body>
</html>
