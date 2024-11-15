<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Codelium</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="assets/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">
    
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Theme mode--><!-- Agregado por Mary-->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
      
      
    </script>
    <!-- Scroll down animated button-->
    <style>
      .scroll-down-btn {
        display: inline-block;
        text-decoration: none;
      }
      .scroll-down-btn p {
        margin-top: 1.25rem;
        color: white;
        font-size: .875rem;
        font-weight: 500;
        letter-spacing: .375rem;
        text-indent: .375rem;
        animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
      }
      .mouse {
        background: #2c333e linear-gradient(transparent 0%, transparent 50%, white 50%, white 100%);
        position: relative;
        width: 38px;
        height: 65px;
        margin: 0 auto;
        border-radius: 6rem;
        background-size: 100% 200%;
        animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
      }
      .mouse:before, .mouse:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
      }
      .mouse:before {
        width: 34px;
        height: 61px;
        background-color: #121519;
        border-radius: 6rem;
      }
      .mouse:after {
        background-color: white;
        width: .375rem;
        height: .375rem;
        border-radius: 100%;
        animation: trackBallSlide 5s linear infinite;
      }
      .fa {
      padding: 20px;
      font-size: 30px;
      width: 30px;
      text-align: center;
      text-decoration: none;
      border-radius: 50%;
    }
      @keyframes colorSlide {
        0% { background-position: 0% 100%; }
        20% { background-position: 0% 0%; }
        21% { background-color: #2c333e; }
        29.99% {
          background-color: white;
          background-position: 0% 0%;
        }
        30% {
          background-color: #2c333e;
          background-position: 0% 100%;
        }
        50% { background-position: 0% 0%; }
        51% { background-color: #2c333e; }
        59% {
          background-color: white;
          background-position: 0% 0%;
        }
        60% {
          background-color: #2c333e;
          background-position: 0% 100%;
        }
        80% { background-position: 0% 0%; }
        81% { background-color: #2c333e; }
        90%, 100% {
          background-color: white;
        }
      }
      @keyframes trackBallSlide {
        0% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
        6% {
          opacity: 1;
          transform: scale(0.9) translateY(5px);
        }
        14% {
          opacity: 0;
          transform: scale(0.4) translateY(40px);
        }
        15%, 19% {
          opacity: 0;
          transform: scale(0.4) translateY(-20px);
        }
        28%, 29.99% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
        30% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
        36% {
          opacity: 1;
          transform: scale(0.9) translateY(5px);
        }
        44% {
          opacity: 0;
          transform: scale(0.4) translateY(40px);
        }
        45%, 49% {
          opacity: 0;
          transform: scale(0.4) translateY(-20px);
        }
        58%, 59.99% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
        60% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
        66% {
          opacity: 1;
          transform: scale(0.9) translateY(5px);
        }
        74% {
          opacity: 0;
          transform: scale(0.4) translateY(40px);
        }
        75%, 79% {
          opacity: 0;
          transform: scale(0.4) translateY(-20px);
        }
        88%, 100% {
          opacity: 1;
          transform: scale(1) translateY(-20px);
        }
      }
      @keyframes nudgeMouse {
        0%, 30%, 60%, 90% { transform: translateY(0); }
        20%, 50%, 80% { transform: translateY(8px); }
      }
      @keyframes nudgeText {
        0%, 30%, 60%, 90% { transform: translateY(0); }
        20%, 50%, 80% { transform: translateY(2px); }
      }
      @keyframes colorText {
        21%, 51%, 81% { color: #2c333e; }
        30%, 60%, 90% { color: white; }
      }
      
    </style>
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #121519;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        background-color: rgba(255,255,255,.25);
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
        };
      })();
      
    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <link rel="stylesheet" media="screen" href="assets/vendor/aos/dist/aos.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/img-comparison-slider/dist/styles.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">
    <link rel="stylesheet" media="screen" href="assets/css/theme.css">
  </head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Cargando...</span>
      </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <div class="dark-mode">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        <header class="navbar navbar-expand-lg fixed-top">
          <div class="container"><a class="navbar-brand pe-sm-3" href="index.html"><span class="text-primary flex-shrink-0 me-2">
                <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                </svg></span>Codelium</a>
            
             
            </nav>
          </div>
        </header>
      </div>
      <section class="bg-faded-primary d-flex min-vh-100 overflow-hidden py-5">
        <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
          <div class="row align-items-center pt-5 mt-4 mt-xxl-0">
            <!-- Video + Parallax-->
            <div class="col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0">
              <div class="parallax mx-auto mx-lg-0" style="max-width: 582px;">
                <div class="parallax-layer zindex-3" data-depth="0.1">
                  <div class="position-relative mx-auto" style="max-width: 61%; padding: .3125rem; margin-bottom: 9.9%; background-color: #121519; border-radius: calc(var(--ar-border-radius) * 2.125);">
                    <div class="position-absolute start-50 translate-middle-x" style="top: 4.4%; width: 85%;">
                      <div class="row row-cols-4 gx-2 mb-3">
                        <div class="col">
                          <div class="border-white border opacity-80"></div>
                        </div>
                        <div class="col">
                          <div class="border-white border opacity-80"></div>
                        </div>
                        <div class="col">
                          <div class="border-white border opacity-80"></div>
                        </div>
                        <div class="col position-relative">
                          <div class="position-absolute top-0 start-0 w-100 border-white border opacity-30"></div>
                          <div class="position-absolute top-0 start-0 w-50 border-white border opacity-80"></div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center"><img class="rounded-circle" src="assets/img/landing/marketing-agency/hero/faviconcodelium.png" width="35" alt="Avatar">
                        <div class="ignore-dark-mode fs-xs ps-2"><span class="text-nav fw-bold me-1">Codelium</span><span class="text-muted">12 min</span></div>
                      </div>
                    </div>
                    <video class="d-block w-100" autoplay loop muted style="border-radius: calc(var(--ar-border-radius) * 1.875);">
                      <source src="assets/img/landing/marketing-agency/hero/video.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>
                <div class="parallax-layer" data-depth="0.3"><img src="assets/img/landing/marketing-agency/hero/shape01.svg" alt="Background shape"></div>
                <div class="parallax-layer zindex-2" data-depth="-0.1"><img src="assets/img/landing/marketing-agency/hero/shape02.svg" alt="Background shape"></div>
                <div class="parallax-layer" data-depth="-0.15"><img src="assets/img/landing/marketing-agency/hero/shape03.svg" alt="Background shape"></div>
                <div class="parallax-layer zindex-2" data-depth="-0.25"><img src="assets/img/landing/marketing-agency/hero/shape04.svg" alt="Background shape"></div>
              </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
              <h1 class="display-2 pb-3 mb-4"><span class='fw-normal'>Codelium</span> <br>Tu socio en el desarrollo digital</h1>
              <div class="row row-cols-3 text-center">
                <div class="col">
                  <img src="assets/img/landing/marketing-agency/hero/apps.png" class="img-fluid icon-size" alt="Aplicaciones">
                  <p class="mb-0">Aplicaciones</p>
                </div>
                <div class="col">
                  <img src="assets/img/landing/marketing-agency/hero/webdevelopment.png" class="img-fluid icon-size" alt="Desarrollo Web">
                  <p class="mb-0">Desarrollo Web</p>
                </div>
                <div class="col">
                  <img src="assets/img/landing/marketing-agency/hero/datanalysis.png" class="img-fluid icon-size" alt="Análisis de datos">
                  <p class="mb-0">Análisis de datos</p>
                </div>
              </div>
              
              <div class="d-sm-flex justify-content-center justify-content-lg-start pt-5 mt-lg-2"><a class="btn btn-lg btn-primary w-100 w-sm-auto mb-2 mb-sm-0 me-sm-1" href="index.php#formulario">Contáctanos</a></div>
            </div>
          </div>
        </div>
      </section>
<!-- Services-->
<section class="container py-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">
  <div class="row align-items-center py-1 py-sm-3 py-md-4 my-lg-2">
    <div class="col-lg-4 offset-xl-1">
      <h2 class="h1 text-center text-lg-start pb-3 pb-lg-1">Nuestros Servicios</h2>
      <!-- Show on screens > 992px-->
      <ul class="list-unstyled d-none d-lg-block pb-3 mb-3 mb-lg-4">
        <li class="d-flex pt-2"><i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>Representan velocidad, agilidad y presición.</li>
        <li class="d-flex pt-2"><i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>Construimos soluciones sólidas y escalables.</li>
        <li class="d-flex pt-2"><i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>Nuestro motor es la innovación y con ello impulsamos el éxito de nuestros clientes.</li>
      </ul><a class="btn btn-primary d-none d-lg-inline-flex" href="index.php#formulario">Comunicate con nosotros</a>
    </div>
    <div class="col-lg-8 col-xl-7 col-xxl-6">
      <div class="row row-cols-1 row-cols-sm-2">
        <div class="col">
          <div class="card border-0 bg-faded-primary">
            <div class="card-body"><i class="ai-search-settings fs-1 text-primary d-block mb-3"></i>
              <h3 class="h4">Servicios UX - UI</h3>
              <p class="fs-sm">Realizamos estudios detallados sobre los usuarios para entender sus necesidades, comportamientos y motivaciones.</p>
            </div>
          </div>
          <div class="card border-0 bg-faded-info mt-4">
            <div class="card-body"><i class="ai-bulb-alt fs-1 text-info d-block mb-3"></i>
              <h3 class="h4">Desarrollo Web</h3>
              <p class="fs-sm">Construimos sitios web dinámicos y responsivos a medida de tus necesidades.</p>
            </div>
          </div>
        </div>
        <div class="col pt-lg-3">
          <div class="card border-0 bg-faded-warning mt-4 mt-sm-0 mt-lg-4">
            <div class="card-body"><i class="ai-mail-filled fs-1 text-warning d-block mb-3"></i>
              <h3 class="h4">Inteligencia de Negocios</h3>
              <p class="fs-sm">Transformamos datos en desiciones estratégicas para tu empresa.</p>
            </div>
          </div>
          <div class="card border-0 bg-faded-danger mt-4">
            <div class="card-body"><i class="ai-telegram fs-2 text-danger d-block mb-3"></i>
              <h3 class="h4">Análisis de Datos</h3>
              <p class="fs-sm">Analizamos grandes volúmenes de datos para descubrir patrones y oportunidades.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
            <!-- Show button on screens < 992px-->
            <div class="d-lg-none text-center pt-3 mt-3 mt-sm-4"><a class="btn btn-primary" href="#">See all servises</a></div>
          </div>
        </div>
      </section>
      <!-- Tools-->
      
<!-- Pricing plans-->
<section class="container py-5 mt-5 mb-lg-3 mb-xl-4 mb-xxl-5">
  <!-- Page title-->
  <div class="text-center pb-3 pt-lg-2 pt-xl-4 my-1 my-sm-3 my-lg-4">
    <h1 class="display-2">Planes Codelium</h1>
    <p class="fs-lg mb-0">Seleccione el plan de servicio que mejor se adapte a las necesidades de su negocio</p>
  </div>
  <!-- Plans-->
  <div class="row row-cols-3 flex-nowrap pb-4 overflow-auto">
    <!-- Plan-->
    <div class="col" style="min-width: 19rem;">
      <div class="card h-100 py-lg-4">
        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
          <h4>Mi 1° Página Web</h4>
          <div class="display-3 text-primary">$129.990</div>
          <div class="mb-4">Pago único</div>
          <p class="mb-4 pb-4">Buscas desarrollar tu identidad corporativa o la de tu negocio.</p>
          <button class="btn btn-primary w-100" type="button"data-toggle="modal" data-target="#modalId3" data-plan="plan3">Detalles del Plan</button>
        </div>
      </div>
    </div>
    <!-- Plan-->
    <div class="col" style="min-width: 19rem;">
      <div class="card border-primary bg-primary h-100 py-lg-4">
        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
          <h3 class="text-light">Canal de Denuncias</h3>
          <div class="display-2 text-light">2,20 UF/mes</div>
          <div class="text-light opacity-70 mb-4">en Plan Anual</div>
          <p class="text-light opacity-70 mb-4 pb-4">Cumpla con la Ley N° 21.643 (Ley Karin)</p>
          <button class="btn btn-light w-100" type="button"data-toggle="modal" data-target="#modalId2" data-plan="plan2">Detalles del Plan</button>
        </div>
      </div>
    </div>
    <!-- Plan-->
    <div class="col" style="min-width: 19rem;">
      <div class="card h-100 py-lg-4">
        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
          <h4>Mi 1° E-commerce</h4>
          <div class="display-4 text-primary">$229.990</div>
          <div class="mb-4">Pago único</div>
          <p class="mb-4 pb-4">Deja de vender por redes sociales, escala tu negocio al siguiente nivel.</p>
          <button class="btn btn-primary w-100" type="button"data-toggle="modal" data-target="#modalId3" data-plan="plan3">Detalles del Plan</button>
        </div>
      </div>
    </div>
    <!-- Plan-->
    <div class="col" style="min-width: 19rem;">
      <div class="card border-primary bg-primary h-100 py-lg-4">
        <div class="card-body w-100 mx-auto text-center" style="max-width: 23rem;">
          <h3 class="text-light">Hosting Codelium</h3>
          <div class="display-2 text-light">$1.250</div>
          <div class="text-light opacity-70 mb-4">por mes</div>
          <p class="text-light opacity-70 mb-4 pb-4">Somos Resellers de un robusto servicio con garantía de uptime de 99,9%</p>
          <button class="btn btn-light w-100" type="button"data-toggle="modal" data-target="#modalId4" data-plan="plan4">Detalles del Plan</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Team-->
    <section class="pt-5 mt-2 mt-xl-4 mt-xxl-5">
      <div class="container pt-3 pt-sm-4 pt-lg-5 mt-xl-2 mt-xxl-3">
        <div class="fs-sm text-uppercase mb-3">Our team</div>
        <h2 class="display-6 pb-3 mb-lg-4">Team of professionals</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/aliciavento624x624.png" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Alicia Vento</h3>
                  <p class="mb-3">Founder and Designer UX - UI</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/SebastianAraya624x624.png" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Sebastián Araya A</h3>
                  <p class="mb-3">CEO and Founder</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-twitter rounded-circle mx-2" href="#"><i class="ai-twitter"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/JeanWoodleyBolivard624x624.png" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Jean Woodley</h3>
                  <p class="mb-3">Founder and Developers</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/landing/corporate/team/05.jpg" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Robert Fox</h3>
                  <p class="mb-3">CTO</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-twitter rounded-circle mx-2" href="#"><i class="ai-twitter"></i></a><a class="btn btn-icon btn-sm btn-light btn-stack-overflow rounded-circle mx-2" href="#"><i class="ai-stack-overflow"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/landing/corporate/team/06.jpg" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Michelle Yang</h3>
                  <p class="mb-3">CEO, Founder</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-instagram rounded-circle mx-2" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-linkedin rounded-circle mx-2" href="#"><i class="ai-linkedin"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-hover border-0 rounded-5 overflow-hidden"><img src="assets/img/landing/corporate/team/04.jpg" alt="Image">
              <div class="position-absolute top-0 start-0 w-100 h-100 opacity-0">
                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="card-body d-flex flex-column justify-content-end dark-mode h-100 position-relative zindex-2 text-center">
                  <h3 class="h5 mb-1">Albert Flores</h3>
                  <p class="mb-3">Art director</p>
                  <div class="d-flex justify-content-center"><a class="btn btn-icon btn-sm btn-light btn-facebook rounded-circle mx-2" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-light btn-behance rounded-circle mx-2" href="#"><i class="ai-behance"></i></a><a class="btn btn-icon btn-sm btn-light btn-dribbble rounded-circle mx-2" href="#"><i class="ai-dribbble"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact form-->
	<a href="#formulario"></a>
    <section class="container dark-mode" style="margin-top: 5rem;">
      <div class="card border-0 bg-primary position-relative py-lg-4 py-xl-5">
        <!-- Decorative shapes-->
        <svg class="position-absolute end-0 mt-n2" width="242" height="331" viewBox="0 0 242 331" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M172.014 250.127C137.236 227.74 112.349 192.144 144.586 153.591C157.686 137.932 176.759 127.973 196.524 122.046C234.647 110.639 277.027 113.361 313.349 129.576C338.19 140.666 361.129 159.183 369.934 184.502C383.476 223.496 359.75 260.161 321.569 273.118C288.832 284.223 247.685 279.513 214.885 269.837C201.003 265.743 185.745 258.966 172.014 250.127Z" fill="#121519" fill-opacity=".07"></path>
          <path d="M20.3265 69.264C19.7064 43.0736 29.8071 17.1878 62.3851 19.8622C75.6229 20.9505 87.9525 27.2066 98.3563 35.3132C118.426 50.9253 132.424 73.896 136.952 98.6413C140.044 115.562 138.424 134.218 127.978 148C111.901 169.236 83.4531 170.283 62.5246 155.209C44.5807 142.281 32.0983 119.217 25.3391 98.6799C22.4836 89.9885 20.5616 79.6021 20.3265 69.264Z" fill="#121519" fill-opacity=".07"></path>
        </svg>
        <svg class="position-absolute start-0 bottom-0 ms-3" width="169" height="217" viewBox="0 0 169 217" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M34.2574 90.0177C29.666 97.6253 26.6254 106.591 24.9502 114.96C19.9522 140.043 26.4112 168.792 49.6162 181.885C66.0705 191.17 91.0017 189.904 108.062 183.692C125.725 177.266 135.045 168.04 142.29 150.389C151.409 128.174 150.912 99.6904 125.93 91.6429C115.423 88.254 104.723 86.5065 94.2249 82.5889C84.6622 79.0248 74.8545 72.1766 64.4411 71.6149C50.8011 70.8777 40.9122 79.0146 34.2574 90.0177Z" fill="#121519" fill-opacity="0.07"></path>
          <path d="M147.005 75.6331C152.135 70.7783 156.106 64.2374 159.153 57.9073C166.014 43.6372 174.127 22.1368 160.207 9.68505C152.924 3.17188 139.243 3.86644 130.324 5.29774C118.428 7.20428 107.295 8.85077 96.5031 14.783C85.8056 20.6599 79.0155 33.6997 77.0014 45.6686C75.4978 54.5776 79.63 63.6672 84.7391 70.7453C91.8208 80.5571 103.503 84.2003 114.817 84.3975C121.101 84.5081 127.716 84.0527 133.89 82.8121C138.932 81.7962 143.273 79.1597 147.005 75.6331Z" fill="#121519" fill-opacity="0.07"></path>
        </svg>
        <div class="card-body position-relative zindex-2 py-5">
          <form class="mx-auto" style="max-width: 800px;" action="guardar.php" method="post" onsubmit="return valida_envia();return false;" id="formulario" name="formulario">
            <h2 class="h1 card-title text-center pb-4">Formulario de contacto</h2>
            <div class="row g-4">
              <div class="col-sm-6">
                <label class="form-label fs-base" for="name">Nombre</label>
                <input class="form-control form-control-lg" type="text" placeholder="Tu nombre completo" id="nombre" name="nombre">
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="company">Empresa</label>
                <input class="form-control form-control-lg" type="text" placeholder="Empresa" id="empresa" name="empresa">
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="email">Email</label>
                <input class="form-control form-control-lg" type="email" placeholder="correo electrónico"  id="email" name="email">
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="phone">Celular</label>
                <input class="form-control form-control-lg" type="text" placeholder="Celular de contacto" id="telefono" name="telefono">
              </div>
              <div class="col-sm-12">
                <label class="form-label fs-base" for="phone">Sitio web</label>
                <input class="form-control form-control-lg" type="text" placeholder="Opcional" id="web" name="web">
              </div>

              <label class="form-label fs-base" for="message">Tipo de proyecto</label>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox"  name="tipo[]" id="tipo" value="1">
                  <label class="form-check-label fs-base" for="seo">Diseño UX/UI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox"  name="tipo[]" id="tipo" value="2" >
                  <label class="form-check-label fs-base" for="email-marketing">Desarrollo Web</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tipo[]" id="tipo" value="3" >
                  <label class="form-check-label fs-base" for="email-marketing">Inteligencia de Negocios</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tipo[]" id="tipo" value="4">
                  <label class="form-check-label fs-base" for="social">Análisis de Datos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tipo[]" id="tipo" value="5">
                  <label class="form-check-label fs-base" for="social">Consultoría Técnica</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="tipo[]" id="tipo" value="6">
                  <label class="form-check-label fs-base" for="content-marketing">Otro</label>
                </div>
              </div>
              <div class="col-sm-12">
                <label class="form-label fs-base" for="message">Describa su proyecto</label>
                <textarea class="form-control form-control-lg" rows="6" placeholder="Indiquenos detalles de su proyecto" id="mensaje" name="mensaje"></textarea>
              </div>
              
              <div class="col-sm-12 text-center pt-4">
                <button class="btn btn-lg btn-light" type="submit">Enviar la solicitud</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    </main>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js"></script>
    <script src="assets/vendor/img-comparison-slider/dist/index.js"></script>
    <!-- Main theme script-->
    <script src="assets/js/theme.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
<!-- Extra large modal Primer Modal-->
<div class="modal fade" id="modalId1" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Detalles del Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Aquí se llenará con el contenido específico del plan seleccionado -->
        <p id="modalContent">
<!-- Benefits-->
      <section class="container pb-5 mb-md-3 mb-lg-4 mb-xxl-5">
        <div class="row pb-md-4 pb-xl-5">
          <div class="col-md-6 mb-2 mb-md-0">
            <div class="card border-0 h-100 bg-size-cover bg-position-center" style="background-image: url(assets/img/services/v1/01.jpg);">
              <div class="d-none d-sm-block d-md-none" style="height: 450px;"></div>
              <div class="d-sm-none" style="height: 350px;"></div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="pt-4 pb-sm-4 ps-md-4 ps-xl-0">
              <h2 class="h1 pb-2 pb-sm-3 pb-xl-4">Beneficios <br> de Codelium</h2>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">01</div>
                <div class="ps-3">
                  <h3 class="h5">SEO base</h3>
                  <p class="mb-0"><li>SEO mejora la visibilidad web en motores de búsqueda.</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">02</div>
                <div class="ps-3">
                  <h3 class="h5">Página escalable a tu 1° E-commerce</h3>
                  <p class="mb-0"><li>Si formas parte de nuestra comunidad de clientes podrás escalar de forma sencilla tu web a un robusto e-commerce.</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">03</div>
                <div class="ps-3">
                  <h3 class="h5">Indispensables en tu proyecto</h3>
                  <p class="mb-0"><li>Incluye hasta 5 CTA según tu estrategia.</li></p>
                  <p class="mb-0"><li>Incluye hasta 5 Secciones o páginas + Blog y/o Newlesster.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">04</div>
                <div class="ps-3">
                  <h3 class="h5">Por cuenta de Codelium</h3>
                  <p class="mb-0"><li>Poderoso Hosting por 1 año.</li></p>
                  <p class="mb-0"><li>Dominio Incluido por 1 año.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">05</div>
                <div class="ps-3">
                  <h3 class="h5">Plus y Adicionales</h3>
                  <p class="mb-0"><li>Integramos botón de WhatsApp.</li></p>
                  <p class="mb-0"><li>Botones a RRSS.</li></p>
                  <p class="mb-0"><li>Hasta 5 cuentas de correo corporativas.</li></p>
                  <p class="mb-0"><li>Renovación de hosting a un precio preferencial.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">06</div>
                <div class="ps-3">
                  <h3 class="h5">Precios</h3>
                  <p class="mb-0"><li>$ 129.990 (Precio prelanzamiento, solo 10 cupos)</li></p>
                  <p class="mb-0"><li>$ 149.990 (Precio Lanzamiento Septiembre)</li></p>
                  <p class="mb-0"><li>$ 189.990 (Precio Normal Octubre)</li></p>
                  <p class="mb-0"><li>Valores sin IVA</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">07</div>
                <div class="ps-3">
                  <h3 class="h5">Plan de actualizaciones mensuales.</h3>
                  <p class="mb-0"><li>$ 15.000 FEE mensual por actualizaciones</p>
                  <p class="mb-0"><li>El plan considera 1 actualización mensual en la sección elegida (Cliente debe entregar los contenidos, Narrativas o Imágenes)</li></p>
                  <p class="mb-0"><li>$ 150.000 por 12 meses (Si pagas el plan anual te ahorras $30.000)</li></p>
                  <p class="mb-0"><li>$ 80.000 pago semestral (Si pagas el semestre te ahorras $10.000)</li></p>
                  <p class="mb-0"><li>Valores sin IVA</li></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="index.php#formulario"><button type="button" class="btn btn-secondary" data-dismiss="modal">Contratar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal 2do Modal -->
<div class="modal fade" id="modalId2" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Detalles del Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí se llenará con el contenido específico del plan seleccionado -->
        <p id="modalContent">
          <!-- Benefits-->
      <section class="container pb-5 mb-md-3 mb-lg-4 mb-xxl-5">
        <div class="row pb-md-4 pb-xl-5">
          <div class="col-md-6 mb-2 mb-md-0">
            <div class="card border-0 h-100 bg-size-cover bg-position-center" style="background-image: url(assets/img/services/v1/01.jpg);">
              <div class="d-none d-sm-block d-md-none" style="height: 450px;"></div>
              <div class="d-sm-none" style="height: 350px;"></div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="pt-4 pb-sm-4 ps-md-4 ps-xl-0">
              <h2 class="h1 pb-2 pb-sm-3 pb-xl-4">Beneficios <br> de Codelium</h2>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">01</div>
                <div class="ps-3">
                  <h3 class="h5">Para organizaciones en crecimiento</h3>
                  <p class="mb-0"><li>Diseñado para que colaboradores, clientes, proveedores y otros grupos de interés puedan realizar sus denuncias. Mejora el ambiente laboral creando una cultura más ética y transparente con nuestra solución.</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">02</div>
                <div class="ps-3">
                  <h3 class="h5">Servicio de hospedaje externo a su empresa.</h3>
                  <p class="mb-0"><li>Personalización de URL- Subsitio.</li></p>
                  <p class="mb-0"><li>Certificado SSL Gratis: Incluido.</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">03</div>
                <div class="ps-3">
                  <h3 class="h5">Listo para usar, sin complicaciones</h3>
                  <p class="mb-0"><li>Cuenta de Email: para recibir notificaciones.</li></p>
                  <p class="mb-0"><li>Bases de Datos MySQL: Incluido.</li></p>
                  <p class="mb-0"><li>Copias de Seguridad: Incluido.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">04</div>
                <div class="ps-3">
                  <h3 class="h5">Precios</h3>
                  <p class="mb-0"><li>Valores para organizaciones de 1 a 50 colaboradores.</li></p>
                  <p class="mb-0"><li>2,20 UF al mes (Contratando plan anual en 1 pago).</li></p>
                  <p class="mb-0"><li>2,50 UF (Arriendo en forma mensual)</li></p>
                  <br>
                  <p class="mb-0"><li>Valores para organizaciones de 51 o + colaboradores.</li></p>
                  <p class="mb-0"><li>2,80 UF al mes (Contratando plan anual en 1 pago)</li></p>
                  <p class="mb-0"><li>3,0 UF  (Arriendo en forma mensual)</li></p>
                  <p class="mb-0"><li>Valores sin IVA</li></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Contratar</button>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal 3er Modal -->
<div class="modal fade" id="modalId3" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Detalles del Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí se llenará con el contenido específico del plan seleccionado -->
        <p id="modalContent">
          <!-- Benefits-->
      <section class="container pb-5 mb-md-3 mb-lg-4 mb-xxl-5">
        <div class="row pb-md-4 pb-xl-5">
          <div class="col-md-6 mb-2 mb-md-0">
            <div class="card border-0 h-100 bg-size-cover bg-position-center" style="background-image: url(assets/img/services/v1/01.jpg);">
              <div class="d-none d-sm-block d-md-none" style="height: 450px;"></div>
              <div class="d-sm-none" style="height: 350px;"></div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="pt-4 pb-sm-4 ps-md-4 ps-xl-0">
              <h2 class="h1 pb-2 pb-sm-3 pb-xl-4">Beneficios <br> de Codelium</h2>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">01</div>
                <div class="ps-3">
                  <h3 class="h5">Buscas tener una tienda en línea</h3>
                  <p class="mb-0"><li>Puedes comprar el proyecto de cero o implementar el módulo e-commerce a tu actual página web (Para quienes tienen el producto mi 1° web).</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">02</div>
                <div class="ps-3">
                  <h3 class="h5">Si ya tienes Mi 1° Web por $ 229.900 (integramos la tienda en tu web)</h3>
                  <p class="mb-0"><li>Implementamos 50 productos (Puedes habilitar más adelante).</li></p>
                  <p class="mb-0"><li>Implementación de botón para transferencias.</li></p>
                  <p class="mb-0"><li>Implementación pasarelas de pago Transbank (*Considera costo adicional, según el metodo de pago).</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">03</div>
                <div class="ps-3">
                  <h3 class="h5">Quieres adquirir solo Mi 1° <br> E-commerce.</h3>
                  <p class="mb-0"><li>$ 239.900 (Precio prelanzamiento, solo 10 cupos).</li></p>
                  <p class="mb-0"><li>$ 289.990 (Precio Septiembre).</li></p>
                  <p class="mb-0"><li>$ 339.900 (Precio Normal Octubre).</li></p>
                  <p class="mb-0"><li>Valores sin IVA.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">04</div>
                <div class="ps-3">
                  <h3 class="h5">Pack de adicionales</h3>
                  <p class="mb-0"><li>Agrega pack hosting + dominio por $27.000 Anuales (Hasta agotar Stock).</li></p>
                  <p class="mb-0"><li>Agrega pack de actualizaciones por 1 UF Mensual (2 por cada mes).</li></p>
                  <p class="mb-0"><li>Contratando plan anual de actualizaciones (Ahorras 1 mes)</li></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Contratar</button>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal 4to Modal -->
<div class="modal fade" id="modalId4" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Detalles del Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aquí se llenará con el contenido específico del plan seleccionado -->
        <p id="modalContent">
          <!-- Benefits-->
      <section class="container pb-5 mb-md-3 mb-lg-4 mb-xxl-5">
        <div class="row pb-md-4 pb-xl-5">
          <div class="col-md-6 mb-2 mb-md-0">
            <div class="card border-0 h-100 bg-size-cover bg-position-center" style="background-image: url(assets/img/services/v1/01.jpg);">
              <div class="d-none d-sm-block d-md-none" style="height: 450px;"></div>
              <div class="d-sm-none" style="height: 350px;"></div>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="pt-4 pb-sm-4 ps-md-4 ps-xl-0">
              <h2 class="h1 pb-2 pb-sm-3 pb-xl-4">Beneficios <br> de Codelium</h2>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">01</div>
                <div class="ps-3">
                  <h3 class="h5">Robusto Hosting para sus proyectos</h3>
                  <p class="mb-0"><li>Servicio con garantía de uptime de 99,9%</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">02</div>
                <div class="ps-3">
                  <h3 class="h5">Tu proyecto en el mejor servidor</h3>
                  <p class="mb-0"><li>Espacio en disco: 5 GB.</li></p>
                  <p class="mb-0"><li>Cuenta Cpanel: 1.</li></p>
                  <p class="mb-0"><li>Transferencia Mensual: Ilimitada.</li></p>
                  <p class="mb-0"><li>Cuentas de Email: Ilimitadas.</li></p>
                </div>
              </div>
              <div class="d-flex pb-3 mb-2 mb-xl-3">
                <div class="text-muted pt-1">03</div>
                <div class="ps-3">
                  <h3 class="h5">Adicionales incluidos.</h3>
                  <p class="mb-0"><li>Certificado SSL Gratis: Incluido.</li></p>
                  <p class="mb-0"><li>Bases de Datos MySQL: Incluido.</li></p>
                  <p class="mb-0"><li>Soporte Técnico: 24/7 en español.</li></p>
                  <p class="mb-0"><li>Copias de Seguridad: Incluido.</li></p>
                  <p class="mb-0"><li>Instalador de Aplicaciones: 1-Click Installer para aplicaciones como Wordpress.</li></p>
                  <p class="mb-0"><li>Renovación de hosting a un precio preferencial.</li></p>
                  <p class="mb-0"><li>Certificación de centros de Datos: Certificado Tier 3.</li></p>
                </div>
              </div>
              <div class="d-flex mb-2 mb-xl-3">
                <div class="text-muted pt-1">04</div>
                <div class="ps-3">
                  <h3 class="h5">Precios Planes anuales</h3>
                  <p class="mb-0"><li>$ 15.000 (Precio Lanzamiento Septiembre).</li></p>
                  <p class="mb-0"><li>$ 19.990 (Precio Normal Octubre).</li></p>
                  <p class="mb-0"><li>Valores sin IVA</li></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Contratar</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer-->
<footer class="footer bg-dark position-relative py-4 py-md-5">
	<div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
      style="background-color: rgba(255,255,255, .02);"></div>
    <div class="dark-mode container position-relative zindex-2 pt-4 pt-md-2 pt-xl-4 pt-xxl-5">
      <div class="row py-md-3 mb-4 mb-md-5">
        <div class="col-md-7 col-lg-6 col-xxl-5 mb-sm-4 mb-md-0">
          <h2 class="display-6 mb-4 mb-md-5">Permítenos acompañarte en tus desafíos tecnológicos</h2>
          <div class="d-sm-flex align-items-center">
            <a class="btn btn-lg btn-primary me-sm-3 me-lg-4" href="index.php#formulario">¡Trabajemos!</a>
            <p class="fs-sm py-3 py-sm-0 ps-sm-2 mb-0">Nuestro Project Manager se pondrá en contacto contigo para
              discutir el proyecto y ofrecerte una solución efectiva.</p>
          </div>
        </div>
        <div class="col-md-5 offset-lg-1 offset-xxl-2 d-flex flex-column">
          <div class="nav mx-n2 mx-lg-n4 mb-2 mb-sm-3 d-flex flex-column fs-4">
            <a class="nav-link px-0 justify-content-center" href="mailto:contacto@codelium.cl">contacto@codelium.cl</a>
            <a class="nav-link px-0 justify-content-center" href="tel:+56983907880">+56 9 8390 7880</a>
          </div>
          <div class="nav mx-n2 mt-auto d-flex justify-content-center">
            <a href="#" ><i class="ai-linkedin fa-2x" style="margin-left: 20px; margin-right: 20px;"></i></a>
			  <a href="#" ><i class="ai-facebook fa-2x" style="margin-left: 20px; margin-right: 20px;"></i></a>
			  <a href="#" ><i class="ai-instagram fa-2x" style="margin-left: 20px; margin-right: 20px;"></i></a>
			    <a href="#" ><i class="ai-youtube fa-2x" style="margin-left: 20px; margin-right: 20px;"></i></a>

          </div>          
        </div>
      </div>
        <p class="fs-sm pt-3 pb-2 pb-lg-0 mb-0 text-center">
          <span>© Todos derechos reservados. Desarrollado con <span style="color: red;">❤️</span> Por </span>
          <a class="nav-link d-inline fw-normal p-0" href="https://Codelium.cl/" target="_blank" rel="noopener">
            <img src="assets/img/logoverdehorizo_800px-min.png" alt="Codelium" style="width: 80px; height: 20px;">
          </a>
        </p>
    </div>
    </footer>
    <!-- /Footer -->
<script language="javascript">
function valida_envia(){
				
				

				//valido el nombre
				if (document.formulario.nombre.value.length==0){
						Swal.fire({
						  width: 600,
						  icon: 'error',
						  title: 'Debe ingresar un nombre.',
						  showConfirmButton: false,
						  timer: 2000,
						})
						return false;
				}
				if (document.formulario.email.value.length==0){
						Swal.fire({
						  width: 600,
						  icon: 'error',
						  title: 'Debe ingresar un correo electrónico',
						  showConfirmButton: false,
						  timer: 2000,
						})
						return false;
				}
			// Seleccionar todos los checkboxes del formulario
				const checkboxes = document.querySelectorAll('input[id="tipo"]:checked');

				// Contar la cantidad de checkboxes seleccionados
				const selectedCount = checkboxes.length;

				// Definir el número mínimo y máximo permitido
				const min = 1;

				// Realizar la validación
				if (selectedCount < min) {
					Swal.fire({
						  width: 600,
						  icon: 'error',
						  title: 'Debe seleccionar un tipo de proyecto.',
						  showConfirmButton: false,
						  timer: 2000,
						})
						return false;
				
				}

				if (document.formulario.mensaje.value.length==0){
						Swal.fire({
						  width: 600,
						  icon: 'error',
						  title: 'Debe ingresar un mensaje',
						  showConfirmButton: false,
						  timer: 2000,
						})
						return false;
				}

				document.formulario.submit();
			}
	
<?php if ($_SESSION["op"] == 1) {?>	
		Swal.fire({
						  width: 600,
						  icon: 'success',
						  title: 'Gracias por Contactarnos<BR>Pronto lo contactaremos',
						  showConfirmButton: false,
						  timer: 4000,
						})<?php $_SESSION["op"] = 0 ;};?>	
</script>
</html>