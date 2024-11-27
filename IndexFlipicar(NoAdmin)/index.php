<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Alquiler de Coches de Lujo en Toda España - GT Rentals</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Agregar Font Awesome -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Serif:ital,wght@1,700&family=Rubik+Doodle+Shadow&family=Saira+Extra+Condensed:wght@100&family=Spline+Sans+Mono:ital,wght@0,300..700;1,300..700&display=swap');
        /*Fuentes*/ 
        #ofrecemos h2,p{
            font-family: "Montserrat", sans-serif;

        }
        #ofrecemos h2{
            font-size:35px
        }
        #ofrecemos p{
            font-size:24px
        }
        .carousel-item {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 2;
            background-color: transparent;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .navbar-nav .nav-link {
            color: white;
            font-size: 1.5em;
            margin-top: 1rem;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #ccc;
        }

        .navbar .navbar-brand img {
            height: 80px;
        }
        @media (max-width: 576px) {
            .navbar {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            footer {
                padding: 30px 0;
            }

            footer .social-icons {
                flex-direction: column;
                gap: 10px;
            }
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 1;
        }

        .navbar-toggler {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1001;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 24px;
            height: 2px;
            background-color: white;
            position: relative;
            transition: all 0.3s ease-in-out;
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            width: 24px;
            height: 2px;
            background-color: white;
            position: absolute;
            left: 0;
            transition: all 0.3s ease-in-out;
        }

        .navbar-toggler-icon::before {
            top: -8px;
        }

        .navbar-toggler-icon::after {
            top: 8px;
        }

        .navbar-toggler.collapsed .navbar-toggler-icon {
            background-color: white;
        }

        .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
            background-color: transparent;
        }

        .navbar-toggler:not(.collapsed) .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 0;
        }

        .navbar-toggler:not(.collapsed) .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            top: 0;
        }

        /* Menú de pantalla completa y fondo negro en móviles */
        .navbar-collapse {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #000;
            z-index: 1000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        .navbar-collapse.show {
            opacity: 1;
            visibility: visible;
        }

        .navbar-nav {
            flex-direction: column;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.5rem;
            margin: 10px 0;
            text-align: center;
        }

        .navbar-nav .nav-link:hover {
            color: #ccc;
        }

        /* Estructura de la barra de navegación en pantallas grandes */
        @media (min-width: 992px) {
            .navbar-collapse {
                position: static;
                background-color: transparent;
                height: auto;
                justify-content: flex-end;
                opacity: 1 ;
                visibility: visible ;
            }

            .navbar-nav {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .navbar-nav .nav-link {
                font-size: 1rem;
                margin: 0 10px;
                text-align: left;
            }
        }

        /* Estilo de los divs de marcas de coches */
        .brand-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .brand-item:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .brand-item img {
            width: 100%;
            height: auto;
            max-height: 100px;
            object-fit: contain;
        }

        .brand-item h3 {
            margin-top: 10px;
            font-size: 1.2rem;
        }
        /*Pie*/
        footer {
            background-color: #222;
            color: white;
            padding: 40px 0;
            margin-top: 40px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            color: #ccc;
        }

        footer .social-icons {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        footer .social-icons li {
            display: inline-block;
        }

        footer .social-icons li a {
            font-size: 2rem;
            color: white;
            transition: color 0.3s;
        }

        footer .social-icons li a:hover {
            color: #ccc;
        }

        footer p {
            font-size: 1rem;
        }

        
    </style>
</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/flipicar.png" alt="Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobreNosotros">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modelos">Modelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel de videos -->
    <div id="videoCarousel" class="carousel slide background-header" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Video 1 -->
            <div class="carousel-item active">
                <video autoplay muted loop playsinline class="video-background">
                    <source src="img/invideo-ai-1080 Experience Luxury with Flipicar_ Your Ul 2024-11-11.mp4"
                        type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h1 class="display-4">Alquila tu deportivo</h1>
                    <p class="lead">Experiencias de conducción de lujo en toda España.</p>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="carousel-item">
                <video autoplay muted loop playsinline class="video-background">
                    <source src="https://gtrentals.es/wp-content/uploads/2023/02/otro-video.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h1 class="display-4">Vive la velocidad</h1>
                    <p class="lead">Conduce los mejores coches en los mejores lugares.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
        
    <!-- Sección "Ofrecemos" -->
    <section id="ofrecemos" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <h2>Nuestras Marcas <strong>Exclusivas</strong></h2>
<p>Descubre nuestra excepcional selección de <strong>coches de lujo</strong>. Alquila el vehículo de tus sueños y experimenta el máximo placer de conducción.</p>

                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/RR.png" alt="Marca Rolls Royce" class="img-fluid">
                        <h3>Rolls Royce</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/ferrari.png" alt="Marca Ferrari" class="img-fluid">
                        <h3>Ferrari</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/mercedes.png" alt="Marca Maybach" class="img-fluid">
                        <h3>Maybach</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/porsche.png" alt="Marca Porsche" class="img-fluid">
                        <h3>Porsche</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/spyker.png" alt="Marca Spyker" class="img-fluid">
                        <h3>Spyker</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/Koenigsegg.png" alt="Marca Koenigsegg" class="img-fluid">
                        <h3>Koenigsegg</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/Pagani.png" alt="Marca Pagani" class="img-fluid">
                        <h3>Pagani</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/Maserati.png" alt="Marca Maserati" class="img-fluid">
                        <h3>Maserati</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand-item">
                        <img src="img/Lamborghini.png" alt="Marca Lamborghini" class="img-fluid">
                        <h3>Lamborghini</h3>
                        <a href="modelos.php" class="btn btn-primary btn-lg">Explorar Modelos</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-center text-light py-4" id="contacto">
        <div class="container">
            <p> GT Rentals. Todos los derechos reservados.</p>
            <a href="mailto:info@gtrentals.es">info@gtrentals.es</a>
            <div class="social-icons mt-3">
                <ul>
                    <li><a href="https://www.facebook.com/GTRentals" target="_blank" class="fab fa-facebook"></a></li>
                    <li><a href="https://twitter.com/GT_Rentals" target="_blank" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/GT_Rentals" target="_blank" class="fab fa-instagram"></a></li>
                    <li><a href="https://www.linkedin.com/company/gt-rentals" target="_blank" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
