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
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
    <nav class="navbar main-nav fixed-top navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="index.html">
                    <img src="imagenes/logo-ccl-michoacan.png" class="logo-dependencia" alt="Logo CCL">
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
                        <a class="nav-link active" href="NUEVA.php"><b>INICIO</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sedes.html"><b>SEDES</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#noticias"><b>NOTICIAS</b></a>
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
                       
                            <a class="nav-link btn btn-login-custom ms-lg-2 px-3" href="https://siconcilio.cclmichoacan.gob.mx/login" style="color: #ffffff !important;"><b>INICIAR SESIÓN</b></a>
                        
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

    <div class="container marketing"><br>
            <div class="row">
                <div class="container">
                    <div class="text-center mb-4">
                        <h2 class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Nuestros<span class="" style="padding-top: 15px !important;color: #6D807F; font-size: .6em;"> servicios</span></h2>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="d-flex flex-column h-100 p-3 shadow-sm rounded text-center">
                        <img src="imagenes/iconos/icono-solicitud.png" class="mx-auto d-block mb-3" width="140" height="140">
                        <h2 class="h5"><b>Solicitud de Conciliación</b></h2>
                        <p class="text-muted flex-grow-1">Es un servicio rápido, eficiente que permite a las personas, tanto trabajadoras como empleadoras iniciar su solicitud para conciliar de forma digital.</p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary btn-block" style="background-color:#496163;" href="http://localhost/sistema-integral/levantar_solicitud">Generar Solicitud &raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="d-flex flex-column h-100 p-3 shadow-sm rounded text-center">
                        <img src="imagenes/iconos/icono-ratificacion.png" class="mx-auto d-block mb-3" width="140" height="140">
                        <h2 class="h5"><b>Solicitud de Ratificación</b></h2>
                        <p class="text-muted flex-grow-1">Es un servicio que permite a las partes, que terminan su relación laboral, acudir con previa cita ante el Centro de Conciliación Laboral a ratificar su acuerdo.</p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary btn-block text-white" href="https://siconcilio.cclmichoacan.gob.mx/citas">Generar Cita &raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="d-flex flex-column h-100 p-3 shadow-sm rounded text-center">
                        <img src="imagenes/iconos/icono-representante-patronal.png" class="mx-auto d-block mb-3" width="140" height="140">
                        <h2 class="h5"><b>Representante Patronal</b></h2>
                        <p class="text-muted flex-grow-1">Es una plataforma digital, que permite a las personas empleadoras registrar a sus representantes legales, agilizando el procedimiento.</p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary btn-block" href="https://siconcilio.cclmichoacan.gob.mx/poder-crear">Registrar Representante &raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="d-flex flex-column h-100 p-3 shadow-sm rounded text-center">
                        <img src="imagenes/iconos/icono-calculadora.png" class="mx-auto d-block mb-3" width="140" height="140">
                        <h2 class="h5"><b>Calculadora de prestaciones</b></h2>
                        <p class="text-muted flex-grow-1">Herramienta que permite conocer los cálculos aproximados de las prestaciones laborales dentro de la audiencia de conciliación.</p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary btn-block" href="https://cclmichoacan.gob.mx/Calculadora.html">Calcular Prestaciones &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                
                <div class="item">
                    <a href="https://visitmichoacan.com.mx/" target="_blank">
                        <img class="img-fluid" src="imagenes/carrusel_pie/2025-04-23_ptzU7.jpg">
                    </a>
                </div>

                <div class="item">
                    <a href="https://ssp.michoacan.gob.mx/" target="_blank">
                        <img class="img-fluid" src="imagenes/carrusel_pie/2025-06-18_s7EU1.jpg">
                    </a>
                </div>

                <div class="item">
                    <a href="https://sedeco.michoacan.gob.mx/" target="_blank">
                        <img class="img-fluid" src="imagenes/carrusel_pie/2026-03-02_nBMb6.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about section bg-2" id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto">
                    <h2 class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Noticias</h2>
                </div>
                <div class="col-lg-7"></div>
                <div class="col-12"><hr></div>
            </div>

            <div class="gridNoticias">
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
            </div><!-- gridNoticias -->

            <div class="col-12">
                <hr>
            </div>
            <div class="col-12 text-end">
                <a class="textoGuinda" href="categoria/noticias/">Ver todas las noticias</a>
            </div>
        </div>
    </section>
    <hr class="featurette-divider">
   
    <div class="container my-5">
        <div class="text-center mb-5">
            <h2 class="textoGuinda aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="100" style="margin-bottom: 0 !important; color: #911A3A;">Menú<span class="" style="padding-top: 15px !important;color: #6D807F; font-size: .6em;"> ciudadano</span></h2>
            <h6 class="text-muted">Selecciona alguna de las siguientes opciones para acceder a la información de tu interés.</h6>
        </div>

       <div class="grid-moderno">
            <a href="Normatividad.html" class="tramites-box">
                <h2>Normativa</h2>
                <span><i class="bi bi-journal-text"></i></span>
            </a>

            <a href="organigrama.html" class="tramites-box">
                <h2>Organigrama</h2>
                <span><i class="bi bi-diagram-3"></i></span>
            </a>

            <a href="https://cclmichoacan.gob.mx/documentos/ST/Comit%C3%A9s/CEtica/EF2024/Codigo.jpeg" class="tramites-box">
                <h2>Código de conducta CCLMichoacán</h2>
                <span><i class="bi bi-person-check"></i></span>
            </a>

            <a href="https://cclmichoacan.gob.mx/Junta.html" class="tramites-box">
                <h2>Junta de gobierno</h2>
                <span><i class="bi bi-building-check"></i></span>               
            </a>

            <a href="https://cclmichoacan.gob.mx/Comites.html" class="tramites-box">
                <h2>Comités</h2>
                <span><i class="bi bi-people"></i></span>  
            </a>

            <a href="https://cclmichoacan.gob.mx/EstadisticasCCL.html" class="tramites-box">
                <h2>Estadísticas</h2>
                <span><i class="bi bi-bar-chart-line"></i></span>                
            </a>

            <a href="https://cclmichoacan.gob.mx/Transparencia.html" class="tramites-box">
                <h2>Transparencia</h2>
                <span><i class="bi bi-eye"></i></span>
            </a>

            <a href="https://cclmichoacan.gob.mx/DirectorioG.html" class="tramites-box">
                <h2>Directorio General</h2>
                <span><i class="bi bi-telephone-outbound"></i></span>
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