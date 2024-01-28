<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mauricio & Jennifer Invitación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/audio.css" rel="stylesheet">

    <!-- Para los iconos astetic -->
    <script src="https://kit.fontawesome.com/964c59f858.js" crossorigin="anonymous"></script>

    <!-- PARA EL COUNTER -->
    <link href="assets/flipContador/flip.min.css" rel="stylesheet">
    <link href="assets/css/styleContador.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ESTILOS PERSONALIZADOS -->
    <link href="assets/css/stylePersonalizadoFinal.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg navbar-dark py-3 py-lg-0 px-lg-5"
        style="background-color: #009d71;">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="font-secondary text-white mb-n2">Mauricio <span class="text-primary">&</span> Jennifer</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active" style="color:#efb810">Inicio</a>
                <a href="#CuentaRegresiva" class="nav-item nav-link">Cuenta Regresiva</a>
                <a href="#about" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="#story" class="nav-item nav-link">Historia</a>
            </div>
            <a href="#home" class="navbar-brand mx-lg-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2">Mauricio <span class="text-primary"
                        style="color:#efb810 !important">&</span> Jennifer</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#event" class="nav-item nav-link">Información</a>
                <a href="#rsvp" class="nav-item nav-link">Reservación</a>

            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    <!-- Carousel Start -->

    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel1.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel2.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel3.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel4.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel5.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel6.webp"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary mt-n3 mb-md-4" style="color: #efb810;">Mauricio &
                                Jennifer</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;color:#efb810 !important">Nos vamos a Casar!!</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" onclick="toggleAudio()"></button>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Controles del carrusel -->
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" role="button"
                data-slide="prev">
                <div class="btn btn px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" role="button"
                data-slide="next">
                <div class="btn btn px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>



    <!-- End Carousel -->

    <!-- Contenedor del reproductor de audio sin modal -->
    <div class="audio-container">
        <audio id="audioPlayer" loop>
            <source src="assets/img/John Legend - All of Me (Lyrics).mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>


    <!-- Count Down -->
    <div class="container-fluid py-5" id="CuentaRegresiva">
        <div class="container py-5">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: #009d71 !important;">Esta es
                la cuenta regresiva para el gran día</h6>
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="tick" data-did-init="handleTickInit">
                        <div data-repeat="true" data-layout="horizontal fit"
                            data-transform="preset(d, h, m, s) -> delay">
                            <div class="tick-group">
                                <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                                    <span data-view="flip"></span>
                                </div>
                                <span data-key="label" data-view="text" class="tick-label"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="container py-5">
                <div class="section-title position-relative text-center">
                    <h6 class="text-uppercase text-primary mb-3"
                        style="letter-spacing: 3px; color: #009d71 !important;">Sobre Nosotros</h6>
                    <h1 class="font-secondary display-4" style="color:#efb810">Novio y Novia</h1>
                    <i class="far fa-heart text-dark"></i>
                </div>
            </div>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">El Novio</h3>
                        <p>"Gracias por acompañarnos en este dia tan especial para nosotros. Infinitas gracias a la vida por permitirme vivir toda esta experiencia al lado de la mujer de mis sueños
                            y al lado de personas tan importantes como lo son cada uno de ustedes. Gracias por todo y esperamos verlos bien guapotes y guapotas para ese dia"</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3">
                            <i class="fa fa-male text-success pr-3"></i>Mauricio
                        </h3>

                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/Mau1.webp" style="object-fit: cover;">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/Jenny1.webp" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">La Novia</h3>
                        <p>"Y ya casi llega uno de los días que más le he pedido a Dios que pudiera cumplir, no saben lo
                            feliz que me hace estar al lado de una persona tan especial como lo es Mauricio, que se
                            convirtió en mi media mitad y a la cual le pido mucho a Diosito que nos dé muchos años para
                            seguir creciendo de la mano. Gracias a ustedes por ser parte de nuestra historia de amor y
                            estar cuando los hemos necesitado, los esperamos en nuestro gran día".</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"> <i
                                class="fa fa-male text-success pr-3"></i>Jennifer</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-4" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: #009d71 !important;">
                    Historia</h6>
                <h1 class="font-secondary display-4 " style="color:#efb810">Nuestra Historia de Amor</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="container timeline position-relative p-0">
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="assets/img/PrimeraCita.webp" style="height:300px">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">Donde todo comenzo</h4>
                            <p class="text-uppercase mb-2">12 Diciembre 2017</p>
                            <p class="m-0">“Todo comenzó en el último año de colegio donde éramos compañeros y al final
                                de ese año fuimos mejores amigos, y así duramos muuucho tiempo siendo solo amigos,
                                a pesar de que todos nuestros amigos nos decían que éramos algo más hasta tal punto que
                                una excompañera se enojó con ambos.” Jenny </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Primera Cita</h4>
                            <p class="text-uppercase mb-2">14 Agosto 2019</p>
                            <p class="m-0">“Nuestra primera cita fue un día que íbamos a matricular el cuatrimestre de
                                la universidad y como no duramos mucho, decidimos ir a comer,
                                así que la lleve a mi lugar favorito de ese entonces que era Casa Manga en San Pedro.
                                Ese día casi me muero porque por primera vez en mi vida vi a una persona comiéndose una
                                hamburguesa con cubiertos, WTF” Mau</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="assets/img/Dondetodocomenzo.webp" style="width:325px "
                            alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="assets/img/Propuesta1.webp" style="height:300px" alt="">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">Propuesta de Matrimonio

                            </h4>
                            <p class="text-uppercase mb-2">24 Marzo 2023</p>
                            <p class="m-0"> “Ese día me hizo manejar enojada hasta el lugar sin yo saber a dónde íbamos.
                                Cuando
                                llegamos era un lugar que siempre había querido ir, e hicimos uno de los tours en las
                                cavernas y por <b> “suerte”</b> nos ganamos una cena privada, la cual incluía unas
                                fotos, pero
                                Mauricio como siempre tenía ganas de ir al baño me toco hacerla sola, cuando lo fui a
                                buscar tenía toda una sorpresa preparada para mí. Convirtiéndose en el día más especial
                                de mi vida.” Jenny</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Compromiso</h4>
                            <p class="text-uppercase mb-2">27 Abril 2024</p>
                            <p class="m-0">
                                “Ya luego de la propuesta vino todo el proceso de la boda, cosa que nunca se me hubiera
                                ocurrido que fuera taaaan complejo, pero ha sido un proceso demasiado lindo siempre de
                                la mano del amor de mi vida, y que literalmente cada día que despierto le doy gracias a
                                Dios por la mujer que tengo al lado y que espero poder tener el resto de mi vida." Mau
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="assets/img/Compromiso.webp" style="width:325px " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Story End -->



    <!-- Event Start -->
    <div class="container-fluid py-4" id="event">
        <div class="container py-4">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: #009d71 !important;">
                    Información Importante</h6>
                <h1 class="font-secondary display-4" style="color:#efb810">Nuestra Boda</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p>¡Es un honor para nosotros invitarlos a unirnos en un momento lleno de amor y alegría!
                        Estamos emocionados de compartir nuestro día especial y nos encantaría tenerlos a ustedes,
                        nuestros seres queridos, presentes en nuestra boda. Será un día de celebración, risas y momentos
                        inolvidables.
                        Su presencia hará que este día sea aún más memorable. ¡Los esperamos para compartir juntos este
                        hermoso capítulo en nuestras vidas!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="assets/img/iglesia-San-Rafael.webp" alt="">
                        <h4 class="mb-3">Lugar de la Boda</h4>
                        <p class="mb-2">Parroquia San Rafael Arcángel, </br>Oreamuno</p>
                        <p class="mb-0">13:30 - 15:00</p>
                        <button class="btn btn-info botonBonitoWaze font-weight-bold py-2 px-4"
                            onclick="window.open('https://waze.com/ul?ll=9.869312997791363,-83.90360220749368&navigate=yes', '_blank')">
                            ¡Vamos! <i class="fa-brands fa-waze fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="assets/img/salon la toscana.webp" style="height:240px">
                        <h4 class="mb-3">Fiesta de Bodas</h4>
                        <p class="mb-2">Centro de convenciones y eventos La Toscana</p>
                        <p class="mb-0">15:30 - 21:00</p>
                        <button class="btn btn-info botonBonitoWaze font-weight-bold py-2 px-4"
                            onclick="window.open('https://waze.com/ul?ll=9.87084786059474,-83.89019706281915&navigate=yes', '_blank')">
                            ¡Vamos! <i class="fa-brands fa-waze fa-2xl" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->

    <!-- Importan Information -->
    <div class="container-fluid py-4" id="event">
        <div class="container py-4">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: #009d71 !important;">
                    Información Importante</h6>
                <h1 class="font-secondary display-4" style="color:#efb810">Nuestra Boda</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="font-weight-normal text-muted mb-3 pb-3">Acá hay información importante para nuestro dia
                        especial.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="assets/img/formalIcono.webp" alt="">
                        <h4 class="mb-3">Tipo de vestimenta</h4>
                        <p class="mb-2">Para garantizar que este día sea tan especial como lo imaginamos, les pedimos
                            que nos acompañen vistiendo atuendo formal de gala. Su presencia y elegancia serán el
                            complemento perfecto para nuestra celebración.
                            ¡Esperamos ansiosos por verlos lucir espectaculares en este día tan importante para
                            nosotros!</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="assets/img/regaloIcono.webp" alt=""
                            style="padding-bottom: 15px;"></br>
                        <h4 class="mb-3">Sobre los regalos</h4>
                        <p class="mb-2">Tu presencia es el mejor regalo que podemos recibir, sin embargo, si deseas
                            contribuir
                            de alguna manera agradeceriamos dinero en efectivo para poder comenzar nuestra vida juntos.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->



    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: #009d71 !important;">
                    Confirmación</h6>
                <h1 class="font-secondary display-4" style="color:#efb810">Unete a nuestra fiesta</h1>
                <p> Su presencia es fundamental para hacer este día aún más especial. Por favor,
                    confirmen su asistencia antes del <b> 20 de Marzo </b> dando click a cualquier de los dos enlaces
                    siguientes.
                    Estamos emocionados de compartir este momento mágico con todos ustedes y crear recuerdos
                    inolvidables juntos.
                </p>
                <i class="far fa-heart text-gold"></i>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <a href="https://wa.me/50688174868?text=Quiero acompañarlos en este dia tan especial"
                            target="_blank">
                            <button class="btn btn-success botonBonito font-weight-bold py-2 px-4">
                                Confirmar con la novia
                                <i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i>
                            </button>
                        </a>
                        <br>
                        <br>
                        <a href="https://wa.me/50662109591?text=Quiero acompañarlos en este dia tan especial"
                            target="_blank">
                            <button class="btn btn-success botonBonito font-weight-bold py-2 px-4">
                                Confirmar con el novio
                                <i class="fa-brands fa-whatsapp fa-2xl" style="color: #ffffff;"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->



    <!-- Footer Start -->
    <div class="container-fluid" style="background-color: #026842; color: #efb810; padding: 5rem 0;">
        <div class="container text-center">
            <h1 class="font-secondary display-3" style="color: #efb810;">Muchas Gracias</h1>
            <i class="far fa-heart"></i>


            <div class="d-flex justify-content-center py-2">
                <p>La futura familia Vargas Rojas los espera</p>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->

    <a href="#" class="btn btn-lg btn-outline-success btn-lg-square back-to-top"><i class="fa fa-angle-double-up"
            style="color: green;"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- SCRIPT DEL CONTADOR -->
    <script src="assets/flipContador/flip.min.js"></script>
    <script src="assets/js/scriptContador.js"></script>

    <script src="assets/js/audio.js"></script>

</body>

</html>