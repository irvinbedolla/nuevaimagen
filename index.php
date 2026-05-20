<!doctype html>
<html lang="es">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=1" />
        <title>Centro de Conciliación Laboral | Michoacán</title>
        
        <meta property="og:title" content="Centro de Conciliación Laboral | Michoacán" />
        <meta property="og:image" content="https://michoacan.gob.mx/cdn/img/michog.jpg"/>
        <meta property="og:description" content="Portal del Centro de Conciliación Laboral del Estado de Michoacán" />

        <link rel="stylesheet" href="https://michoacan.gob.mx/cdn/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://michoacan.gob.mx/cdn/css/estilos.css">-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <!--<link rel="shortcut icon" href="https://michoacan.gob.mx/cdn/img/favicon/favicon.ico" type="image/x-icon" />-->
        <!--<link rel="apple-touch-icon" href="https://michoacan.gob.mx/cdn/img/favicon/apple-touch-icon.png" />-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <link href="assets/estilos/eslitos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/noticias.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <style>
            .servicios-section {
                background: linear-gradient(180deg, #f7f4f6 0%, #ffffff 70%);
                padding: 2.5rem 0 1rem;
            }

            .servicios-title {
                font-weight: 800;
                letter-spacing: 0.4px;
            }

            .servicio-card {
                background: #ffffff;
                border: 1px solid #eee2e8;
                border-radius: 18px;
                padding: 1.5rem;
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .servicio-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 18px 32px rgba(0, 0, 0, 0.12);
            }

            .servicio-icon {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background: transparent;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1rem;
            }

            .servicio-icon img {
                width: 100px;
                height: 100px;
                object-fit: contain;
                border-radius: 50%;
                background: #ffffff;
            }

            .btn-servicio {
                background: #911A3A;
                color: #ffffff;
                border: none;
                width: 100%;
            }

            .btn-servicio:hover {
                background: #7d1532;
                color: #ffffff;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar main-nav fixed-top navbar-expand-lg shadow-sm">
                <div class="container-fluid">
                    <div class="d-flex align-items-center"> 
                        <a class="navbar-brand" href="index.php">
                            <img src="imagenes/logo CCL horizontal.png" class="logo-dependencia" alt="Logo CCL">
                        </a>
                        <a class="navbar-brand border-start ps-3 d-none d-md-block" href="https://michoacan.gob.mx">
                            <img src="https://michoacan.gob.mx/cdn/img/logo.svg" class="logo-gobierno" alt="Logo Gobierno">
                        </a>
                    </div>

                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php"><b>INICIO</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sedes.html"><b>SEDES</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="noticias.html"><b>NOTICIAS</b></a>
                            </li>
                                
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b>EVENTOS</b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" target="_blank" href="https://foro-nacional.cclmichoacan.gob.mx/">Foro Nacional</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="https://cclmichoacan.gob.mx/tercer_encuentro/">3° Encuentro Internacional</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="https://cclmichoacan.gob.mx/encuentro_nacional_ccl2/index.html">2° Encuentro Nacional</a></li>
                                    <li><a class="dropdown-item" target="_blank" href="https://cclmichoacan.gob.mx/encuentro_nacional_ccl/index.html">1° Encuentro Nacional</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-lg-3 py-2 py-lg-0 d-flex flex-column align-items-start align-items-lg-center">
                                <div class="social-icons-container">
                                    <a href="https://www.facebook.com/conciliacionlaboralmich/?locale=es_LA" class="social-icon"><img src="imagenes/footer/FB1.png" alt="FB" ></a>
                                    <a href="https://www.instagram.com/cclmichoacan/" class="social-icon"><img src="imagenes/footer/IG1.png" alt="IG"></a>
                                    <a href="https://x.com/cclmichoacan?s=21" class="social-icon"><img src="imagenes/footer/X1.png" alt="X"></a>
                                    <a href="https://www.tiktok.com/@cclmichoacan0?_t=ZM-8uooi2eSI1V&_r=1" class="social-icon"><img src="imagenes/footer/TK1.png" alt="TK"></a>
                                    <a href="https://www.youtube.com/@CCLMichoacan" class="social-icon"><img src="imagenes/footer/Y1.png" alt="YouTube"></a>
                                </div>
                            </li>
                            <li class="nav-item">
                            
                                    <a class="nav-link btn btn-login-custom ms-lg-2 px-3" href="https://siconcilio.cclmichoacan.gob.mx/login" style="color: #ffffff !important;"><b>INICIA SESIÓN</b></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="contenedor-carrusel">
                <div id="sliderPrincipal" class="owl-carousel owl-theme owl-slider owl-loaded owl-drag">
                    
                    <div class="item">
                        <img src="imagenes/carrusel/ccl.png" alt="Centro de Conciliación">
                    </div>

                    <?php 
                        $content = @file_get_contents("https://michoacan.gob.mx/cdn/slider.php");
                        if($content) {
                            preg_match_all('/src="([^"]+)"/', $content, $matches);
                            if(!empty($matches[1])) {
                                foreach($matches[1] as $url) {
                                    echo '<div class="item"><img src="' . $url . '" alt="Comunicado Gobierno"></div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>

            <section class="servicios-section">
                <div class="container marketing">
                    <div class="row">
                        <div class="container">
                            <div class="text-center mb-4">
                                <h2 class="textoGuinda aos-init aos-animate servicios-title" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Nuestros<span class="" style="padding-top: 15px !important;color: #6D807F; font-size: .6em;"> servicios</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <div class="d-flex flex-column h-100 text-center servicio-card">
                                <div class="servicio-icon">
                                    <img src="imagenes/iconos/icono-solicitud.png" alt="Solicitud">
                                </div>
                                <h2 class="h5"><b>Solicitud de Conciliación</b></h2>
                                <p class="text-muted flex-grow-1">Personas trabajadoras y empleadoras pueden iniciar su solicitud para conciliar.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-servicio btn-block" href="https://siconcilio.cclmichoacan.gob.mx/inicioSolicitud">Generar Solicitud &raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="d-flex flex-column h-100 text-center servicio-card">
                                <div class="servicio-icon">
                                    <img src="imagenes/iconos/icono-ratificacion.png" alt="Ratificacion">
                                </div>
                                <h2 class="h5"><b>Solicitud de Ratificación</b></h2>
                                <p class="text-muted flex-grow-1">Acudir con previa cita ante el Centro de Conciliación Laboral a ratificar su acuerdo.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-servicio btn-block" href="https://siconcilio.cclmichoacan.gob.mx/citas">Generar Cita &raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="d-flex flex-column h-100 text-center servicio-card">
                                <div class="servicio-icon">
                                    <img src="imagenes/iconos/icono-representante-patronal.png" alt="Representante">
                                </div>
                                <h2 class="h5"><b>Representante Patronal</b></h2>
                                <p class="text-muted flex-grow-1">Registro de representantes legales de las personas empleadoras o patrones.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-servicio btn-block" href="https://siconcilio.cclmichoacan.gob.mx/poder-crear">Registrar Representante &raquo;</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="d-flex flex-column h-100 text-center servicio-card">
                                <div class="servicio-icon">
                                    <img src="imagenes/iconos/icono-calculadora.png" alt="Calculadora">
                                </div>
                                <h2 class="h5"><b>Calculadora de prestaciones</b></h2>
                                <p class="text-muted flex-grow-1">Realiza el cálculo aproximados de prestaciones laborales.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-servicio btn-block" href="calculadora.html">Calcular Prestaciones &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container my-5">
                <div class="layout-mosaico">
                    <div class="parte-grande">
                        <video class="w-100 h-100" controls>                    
                            <source src="imagenes/index/que-es-el-centro-de-conciliacion-laboral-michoacan.mp4" type="video/mp4">
                            Tu navegador no soporta videos HTML5.
                        </video>
                    </div>
                    <div class="parte-arriba">
                        <img src="imagenes/index/sedes-CCL-Michoacan.png" alt="Sede Morelia">
                    </div>

                    <div class="parte-abajo">
                        <img src="imagenes/index/resuelve-tus-dudas-ccl.png" alt="Sede Uruapan">
                    </div>
                </div>
            </div>
            
            <section style="background-color: #F6F6F6; background: url(https://michoacan.gob.mx/images/backgrounds/bg.png) fixed no-repeat;  background-size: cover; padding:20px; 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Entérate</h2>
                        </div>
                    </div>
                </div>
                <div id="banners">
                    <div class="owl-carousel owl-theme owl-banners" style="margin-top: 50px;">
                        <!-- MAYO 2026 -->
                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260513 Derechos laborales durante embarazo y lactancia.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260505 Reparto de utilidades - quién aplica- Parte 0 - Portada.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260505 Reparto de utilidades - quién aplica- Parte 1.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260505 Reparto de utilidades - quién aplica- Parte 2.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260505 Reparto de utilidades - quién aplica- Parte 3.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260505 Reparto de utilidades - quién aplica- Parte 4.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260504 Renuncia - 1 año para pagos.png">
                            </a>
                        </div>
                        <!-- ABRIL 2026 -->
                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260429 Requisitos para audiencia.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260424 Plazo conciliación ante despido injustificado.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260421 CONACENTROS Beneficios de Conciliación Prejudicial.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260420 Código de ética.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260417 Finiquito- lo que corresponde por ley.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260415 Montos convenidos 1er trimestre 2026.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260413 Ubicaciones CCL.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260410 personas optan por resolver conflictos.png">
                            </a>
                        </div>

                         <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260409 Empleadores - requisitos citatorios.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260408 PTU reparto de utilidades.png">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260407 CONACENTROS No tienes que pagar.jpg">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" onclick="return false;" target="_blank">
                                <img class="img-fluid" src="imagenes/carrusel_pie/260406 Plazo solicitud de conciliación.png">
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about section bg-2" id="noticias">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 mr-auto">
                            <a class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100"style="font-size: 36px; margin-bottom: 0 !important;text-decoration:none;color: #911A3A;" href="Noticias.html"><b>Noticias</b></a>
                        </div>

                    
                        <div class="col-lg-7"></div>
                        <div class="col-12"><hr></div>
                    </div>
                    <div class="grid-galeria-estilizada">
                        <!--Base para las tres noticias mas recientes-->
                        <a href="noticias\comunicadoCCL013-2026.html" class="galeria-item principal">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL013-2026-1.jpeg" alt="Noticia Principal">
                            </div>
                            <div class="fecha-badge">13 mayo, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Michoacán protege los derechos laborales de mujeres durante el embarazo y la lactancia</h3>
                            </div>
                        </a>
                        <a href="noticias\comunicadoCCL012-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL012-2026-1.jpeg" alt="Noticia Secundaria 6">
                            </div>
                            <div class="fecha-badge">01 mayo, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Centro de Conciliación Laboral asegura defensa a los derechos de las y los trabajadores</h3>
                            </div>
                        </a>
                        <a href="noticias\comunicadoCCL011-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL011-2026-1.jpeg" alt="Noticia Secundaria 5">
                            </div>
                            <div class="fecha-badge">21 abril, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Centro de Conciliación Laboral recupera más de 75 mdp en favor de las y los trabajadores</h3>
                            </div>
                        </a>
                        <!--<a href="noticias\comunicadoCCL010-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL010-2026-1.jpeg" alt="Noticia Secundaria 4">
                            </div>
                            <div class="fecha-badge">17 abril, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">¿Vas a renunciar? El Centro de Conciliación Laboral te orienta para obtener un finiquito justo</h3>
                            </div>
                        </a>
                        <a href="noticias\comunicadoCCL009-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL009-2026-1.jpeg" alt="Noticia Secundaria 3">
                            </div>
                            <div class="fecha-badge">14 marzo, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Destaca CCL efectividad del Mecanismo Laboral de Respuesta Rápida en Michoacán</h3>
                            </div>
                        </a>

                        <a href="noticias\comunicadoCCL008-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL008-2026-1.jpeg" alt="Noticia Secundaria 1">
                            </div>
                            <div class="fecha-badge">13 marzo, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Michoacán encabeza reunión de los Centros de Conciliación Laboral del país</h3>
                            </div>
                        </a>

                        <a href="noticias\comunicadoCCL007-2026.html" class="galeria-item">
                            <div class="img-contenedor">
                                <img src="imagenes/noticias/comunicadoCCL007-2026-1.jpeg" alt="Noticia Secundaria 2">
                            </div>
                            <div class="fecha-badge">6 marzo, 2026</div>
                            <div class="capa-oscura"></div>
                            <div class="info-noticia">
                                
                                <h3 class="titulo-noticia">Morelia será sede del Foro Nacional por la Consolidación de la Justicia Laboral</h3>
                            </div>
                        </a>-->

                    </div>

                    <!--div class="gridNoticias">
                            <a href="https://michoacan.gob.mx/noticias/en-su-recta-final-supervisa-bedolla-ultimos-detalles-del-puente-la-hielera-en-uruapan/" data-aos="zoom-in-up" data-aos-delay="100" class="noticias noticias1 aos-init aos-animate" style="background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 10%, rgba(0,0,0,0) 20%), url('https://michoacan.gob.mx/images/michog.jpg'); background-size: cover; background-position: center;">
                                <div class="textos">
                                    <p>24 marzo, 2026</p>
                                    <h5>¡En su recta final! Supervisa Bedolla últimos detalles del puente La Hielera, en Uruapan</h5>
                                </div>
                            </a>
                            <a href="https://michoacan.gob.mx/noticias/bedolla-revisa-con-empresarios-avances-en-seguridad-e-infraestructura-en-uruapan/" data-aos="zoom-in-up" data-aos-delay="200" class="noticias noticias2 aos-init aos-animate" style="background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 10%, rgba(0,0,0,0) 20%), url('https://michoacan.gob.mx/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-24-at-4.56.57 p.m.-1024x682.jpeg'); background-size: cover; background-position: center;">
                                <div class="textos">
                                    <p>24 marzo, 2026</p>
                                    <h5>Bedolla revisa con empresarios avances en seguridad e infraestructura en Uruapan</h5>
                                </div>
                            </a>
                            <a href="https://michoacan.gob.mx/noticias/primeros-viajes-en-el-teleferico-de-uruapan-seran-gratis-gladyz-butanda/" data-aos="zoom-in-up" data-aos-delay="300" class="noticias noticias3 aos-init aos-animate" style="background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 10%, rgba(0,0,0,0) 20%), url('https://michoacan.gob.mx/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-24-at-4.07.30 p.m.-1024x767.jpeg'); background-size: cover; background-position: center;">
                                <div class="textos">
                                    <p>24 marzo, 2026</p>
                                    <h5>Primeros viajes en el teleférico de Uruapan serán gratis: Gladyz Butanda</h5>
                                </div>
                            </a>
                    </div-->

                    
                    
                </div>
            </section>
            <hr class="featurette-divider">
        
            <div class="container my-5">
                <div class="text-center mb-5">
                    <h2 class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Menú<span class="" style="padding-top: 15px !important;color: #6D807F; font-size: .6em;"> ciudadano</span></h2>
                    <h6 class="text-muted">Selecciona alguna de las siguientes opciones para acceder a la información de tu interés.</h6>
                </div>

            <div class="grid-moderno">
                    <a href="normatividad.html" class="tramites-box">
                        <h2>Normativa</h2>
                        <span><i class="bi bi-journal-text"></i></span>
                    </a>

                    <a href="organigrama.html" class="tramites-box">
                        <h2>Organigrama</h2>
                        <span><i class="bi bi-diagram-3"></i></span>
                    </a>

                    <a href="https://cclmichoacan.gob.mx/documentos/ST/Comit%C3%A9s/CEtica/EF2024/Codigo.jpeg" class="tramites-box">
                        <h2>Código de Conducta CCL Michoacán</h2>
                        <span><i class="bi bi-person-check"></i></span>
                    </a>

                    <a href="junta.html" class="tramites-box">
                        <h2>Junta de Gobierno</h2>
                        <span><i class="bi bi-building-check"></i></span>               
                    </a>

                    <a href="comites.html" class="tramites-box">
                        <h2>Comités</h2>
                        <span><i class="bi bi-people"></i></span>  
                    </a>

                    <a href="rstadisticasCCL.html" class="tramites-box">
                        <h2>Estadísticas</h2>
                        <span><i class="bi bi-bar-chart-line"></i></span>                
                    </a>

                    <a href="transparencia.html" class="tramites-box">
                        <h2>Transparencia</h2>
                        <span><i class="bi bi-eye"></i></span>
                    </a>

                    <a href="directorioG.html" class="tramites-box">
                        <h2>Directorio General</h2>
                        <span><i class="bi bi-telephone-outbound"></i></span>
                    </a>

                    <a href="https://intra.secoem.michoacan.gob.mx/denuncias" class="tramites-box">
                        <h2>Buzón Naranja</h2>
                        <span><i class="bi bi-envelope-arrow-up"></i></span>
                    </a>
                </div>
            </div>

            <footer class="footer-site">
                <div class="container">
                    <div class="footer-container">
                        <div class="footer-section">
                            <img src="imagenes/3.png" alt="Logo Michoacán"  class="img-footer-ccl">
                            <!--<img src="https://michoacan.gob.mx/cdn/img/logo-gris.png" alt="Logo CCL" class="img-footer-ccl">-->
                        </div> 
                        <div class="footer-section">
                            <img src="imagenes/2.png" alt="Logo Michoacán" class="img-footer-main">
                        </div>
                        <div class="footer-section">
                            <img src="imagenes/1.png" alt="Logo CCL" class="img-footer-ccl">
                        </div> 
                        <div><p style="color: #911a3a;">#MichoacánEsMejor</p></div>
                    </div>

                    <div class="footer-info">
                        <div class="footer-copy">
                            &copy; 2026 Desarrollado por <b>CCL Michoacán</b> | Gobierno del Estado de Michoacán
                        </div>
                        <div class="footer-privacy"> 
                            <a href="documentos/AvisoPrivacidad/Aviso_de_Privacidad_Simplificado.pdf" target="_blank"><b>Aviso de privacidad</b></a> 
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <script src="https://www.michoacan.gob.mx/cdn/js/jquery-3.6.0.min.js"></script>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script> 
            $(document).ready(function(){
                $("#sliderPrincipal").owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    nav: true,
                    dots: true,
                    autoHeight: true, // Esto ajusta la altura según la imagen para no cortarla
                    smartSpeed: 1000,
                    navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"]
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $(".owl-banners").owlCarousel({
                    loop: true,
                    margin: 15,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 800,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 3 },
                        1000: { items: 5 }
                    },
                    /* Cambiamos fa por fas para FontAwesome 5 */
                    navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"]
                });
            });
        </script>
    </body>
</html>