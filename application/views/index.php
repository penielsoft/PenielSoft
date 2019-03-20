<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PenielSoft</title>
    <!-- Materialize.css -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Tema CSS de la pagina-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/index.css"); ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body id="inicio">
    <!-- Menú principal Navbar -->
    <div class="navbar-fixed">
        <nav role="navigation">
            <div class="nav-wrapper container">
                <a href="#inicio" class="brand-logo right">
                    <span class="logo">Peniel</span>
                    <span class="logo2">Soft</span>
                </a> 
                <a href="" class="sidenav-trigger" data-target="nav-mobile">
                    <i class="fas fa-bars"></i>
                </a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#" class="dropdown-trigger" data-target="dropdown1">
                            ¿Quienes Somos?
                    </a></li>
                    <li><a href="#" class="dropdown-trigger" data-target="dropdown2">
                        Planes de Desarrollo
                    </a></li>
                    <li><a href="#contactanos">Contáctanos</a></li>
                </ul>        
            </div>
            <!-- Dropdowns -->
            <ul class="dropdown-content" id="dropdown1">
                <li><a href="#nosotros" class="black-text">¿Quienes Somos?</a></li>
                <li><a href="#equipo" class="black-text">Conoce al equipo</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#escogenos" class="black-text">¿Porque debería escogernos?</a></li>
            </ul>
            <ul class="dropdown-content" id="dropdown2">
                    <li><a href="#planes" class="black-text">Planes de desarrollo</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#" class="black-text">Casa de software</a></li>
                </ul>
        </nav>
    </div>
    <!-- Menú responsive -->
    <ul class="sidenav" id="nav-mobile">
        <li><a href="#servicios" class="white-text">Servicios</a></li>
        <li><a href="#nosotros" class="white-text">¿Quienes Somos?</a></li>
        <li><a href="#planes" class="white-text">Planes de Desarrollo</a></li>
        <li><a href="#contactanos" class="white-text">Contáctanos</a></li>
    </ul>
     <!--Slider-->
     <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?php echo base_url("assets/img/hackers-1569744_1920.jpg"); ?>" alt="hacker">
                    <div class="caption center-align">
                        <h3>PenielSoft</h3>
                        <h5 class="light grey-text text-lighten-3">"Tu mejor opcion para tu negocio"</h5>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url("assets/img/computadoras-1209641_1920.jpg"); ?>" alt="computer">
                    <div class="caption left-align">
                        <h3>Desarrollo Web</h3>
                        <h5 class="light grey-text text-lighten-3">
                            Implementamos desarrollo de aplicaciones web responsivas
                        </h5>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url("assets/img/Java.jpg"); ?>" alt="java">
                    <div class="caption right-align">
                        <h3>Desarrollo de Aplicaciones</h3>
                        <h5 class="light grey-text text-lighten-3">
                            Diseñamos aplicaciones de escritorio para pequeñas y grandes empresas
                        </h5>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url("assets/img/equipos-3509891_1920.jpg"); ?>" alt="hardware">
                    <div class="caption left-align">
                        <h3>Soporte Tecnológico</h3>
                        <h5>
                            Proveemos soporte tecnologico, mantenimiento preventivo 
                            y correctivo de equipos
                        </h5>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url("assets/img/negocios-582912_1920.jpg"); ?>" alt="business">
                    <div class="caption center-align">
                        <h3 class="center">Proximamente</h3>
                        <h5 class="light grey-text text-lighten-3">Casa de software.</h5>
                    </div>
                </li>
            </ul>
    </div>
    <!-- floating button -->
    <div class="fixed-action-btn">
        <a class="btn-floating blue">
            <i class="fas fa-plus"></i>
        </a>
        <ul>
            <li>
                <a class="btn-floating blue" href="#">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a class="btn-floating blue" href="#">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li>
                <a class="btn-floating blue" href="#">
                    <i class="fab fa-telegram"></i>
                </a>
            </li>   
        </ul>
    </div>
    <!-- Sección de servicios -->
    <section id="servicios" class="scrollspy">
        <div class="container section">
            <h2 class="center">Servicios</h2>
            <div class="row">
                <!--Titulos -->
                <div class="col s12 m4">
                    <div class="icon-block">
                        <center>
                            <i class="fas fa-laptop"></i>
                        </center>
                    </div> 
                    <h5>Aplicaciones de Escritorio</h5>  
                    <div class="row">
                        <div class="col s12 m12">
                            <p>
                                Contribuimos con el desarrollo de aplicaciones de escritorio,
                                destinado a personas y organizaciones pequeñas.
                            </p> 
                        </div>
                    </div>   
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <center>
                            <i class="fas fa-code center"></i>
                        </center>
                    </div>
                    <h5>Desarrollo de Aplicaciones web</h5>
                    <div class="row">
                        <div class="col s12 m12">
                            <p>
                                Promovemos proyectos de páginas web y aplicaciones para dar a conocer tu negocio
                                por Internet.
                            </p> 
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                       <center>
                           <i class="fas fa-code-branch"></i>
                       </center>
                    </div>
                    <h5>Soporte Tecnológico</h5>
                    <div class="row">
                        <div class="col s12 m12">
                            <p>
                                Incluimos el soporte y chequeo de equipos, formateos, 
                                mantenimiento correctivo y preventivo a nivel individual y empresarial.
                            </p> 
                        </div>
                    </div>
                </div>     
            </div>
            <div class="row" id="boton1">
                <div class="col s12 m12">
                    <center>
                        <a href="#escogenos" class="btn waves-effect waves-light">
                            <i class="fas fa-plus left"></i>Ver más información
                        </a>
                    </center>
                </div>
            </div>
        </div>  
    </section>
    <!--Contenedor Parallax-->
    <div class="parallax-container">
        <div class="paralax">
            <img src="<?php echo base_url("assets/img/hardware-3509891_1920.jpg") ?>" class="responsive-img" alt="Paralax">
        </div>
    </div>
    <!-- Seccion de nosotros --> 
    <section id="nosotros" class="scrollspy">
        <div class="container section">
            <h2>¿Quienes somos?</h2>
            <p id="intro">
                <span class="logo3">Peniel</span><span class="logo4">Soft</span> 
                es una organización de análistas y desarrolladores de software
                que ponen a tu disposición proyectos informáticos y de soporte
                para mejorar la productividad dentro de tu empresa.
            </p>
            <div class="row">
                <div class="col s12 m6">
                    <div class="imagen-fondo"></div>
                    <!--<img src="./img/business-582912_1920.jpg" alt="imagen" class="responsive-img img1"> -->
                </div>
                <div class="col s12 m6">
                    <h4>Misión</h4>
                    <p>
                        Crear, vender, distribuir software y ofrecer soporte tecnológico
                        de calidad a un precio accesible a nuestros clientes.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <h4>Visión</h4>
                    <p>
                        Ser reconocida como una organización de desarrollo e innovación
                        que ofrezca soluciones tecnológicas de alto nivel de confianza y 
                        seguridad a nivel nacional e internacional.
                    </p>
                   
                </div>
                <!-- Imagen -->
                <div class="col s12 m6">
                    <div class="imagen-fondo2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m10 offset-m1">
                    <h4>Valores</h4>
                    <ul>
                        <li>
                            <p>
                                <span>Empatía:</span> Buscamos entender y buscar soluciones que permitan
                                la snergía con los clientes y el equipo de trabajo.
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>Pasión:</span> Sentimos gran dedicación por lo hacemos y realmente
                                nos gusta.
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>Respeto:</span> Mantenemos la cordialidad entre el cliente y el equipo
                                en todo momento.
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>Equidad:</span> tratamos a todos por igual, sin distinción de su raza, religión o preferencia
                                sexual.
                            </p>
                        </li>
                    </ul>
                </div>
            </div><br>
        </div>
    </section>
    <!-- seccion equipo -->
    <section id="equipo" class="scrollspy">
        <div class="container section">
            <h2>Conoce al equipo</h2>
            <div class="row">
                <div class="col s12 m10 offset-m1">
                    <p class="center">
                        Sabemos que tu privacidad de la información es 
                        muy importante para nosotros por ello trabajamos respetando la: 
                        <br><br>

                        <span class="span-text">Confidencialidad:</span> los datos que manejamos de nuestros clientes
                        es estrictamente confidencial, no revelamos información sensible 
                        de nuestros clientes. <br><br>
                        
                        <span class="span-text">Disponibilidad:</span> la información estará disponible el 99% del tiempo,
                        a menos que diga lo contrario. <br><br>

                        <span class="span-text">Integridad:</span> nuestra prioridad es mantener tu información en perfecto
                        estado durante y despues de nuestros servicios.
                    </p>
                </div>
            </div>
            <div class="row">
                <h4>El equipo</h4>
                <br>
                <div class="col s12 m4">
                    <!--Card1-->
                    <div class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                           <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="activator" alt="">
                       </div> 
                       <div class="card-content">
                           <span class="card-title activator white-text">
                                <i class="right fas fa-ellipsis-v"></i>   
                                Gabriel Martínez
                           </span>
                           <p class="white-text center">Analista de sistemas de información.</p>
                           <center>
                                <a class="waves-effect waves-light btn sidenav-trigger" 
                                data-target="menu_gabriel" href="#">
                                    <i class="fas fa-info-circle left"></i>
                                    Info
                                </a>
                           </center>
                       </div>
                       <div class="card-reveal">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="right fas fa-times"></i>   
                                Gabriel Martínez
                            </span>
                            <p class="italic-text">
                                "Buscamos dar con soluciones que permitan mejorar la productividad
                                de tu negocio"
                            </p>
                       </div>
                    </div> <!--/ fin de la clase card-->
                </div>
                <div class="col s12 m4">
                    <!--Card2-->
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="activator" alt="">
                        </div> 
                        <div class="card-content">
                            <span class="card-title activator white-text">
                                <i class="right fas fa-ellipsis-v"></i>   
                                Jhonathan Tovar
                            </span>
                            <p class="white-text center">Lider y fundador de PenielSoft.</p>
                            <center>
                                <a class="waves-effect waves-light btn sidenav-trigger" 
                                data-target="menu_jhonathan" href="#">
                                    <i class="fas fa-info-circle left"></i>
                                    Info
                                </a>
                            </center>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="right fas fa-times"></i>   
                                Jhonathan Tovar
                            </span>
                            <p class="italic-text">
                                "Ofrecemos alternativas de solución para adaptarte a las
                                necesidades del mercado"
                            </p>
                        </div>
                    </div> <!--/ fin de la clase card-->
                </div>
                <div class="col s12 m4">
                    <!--Card3-->
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="activator" alt="">
                        </div> 
                        <div class="card-content">
                            <span class="card-title activator white-text">
                                <i class="right fas fa-ellipsis-v"></i>   
                                Samuel Olarte
                            </span>
                            <p class="white-text center">Programador de aplicaciones.</p>
                            <center>
                                <a class="waves-effect waves-light btn sidenav-trigger" data-target="menu_samuel">
                                    <i class="fas fa-info-circle left"></i>
                                    Info
                                </a>
                            </center>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title activator grey-text text-darken-4">
                                <i class="right fas fa-times"></i>   
                                Samuel Olarte
                            </span>
                            <p class="italic-text">
                                "Si se puede imaginar se puede programar"
                            </p>
                        </div>
                    </div> <!--/ fin de la clase card-->
                </div>
            </div>
        </div>
    </section>
    <!--SideNavs-->
    <ul id="menu_gabriel" class="sidenav">
        <li> 
            <div class="user-view">
                <!--Imagen de fondo -->
                <div class="background">
                    <img src="<?php echo base_url("assets/img/business-582912_1920.jpg"); ?>" alt="" class="responsive-img">
                </div>
                <a href="#">
                    <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="circle" alt="">
                </a>
                <a href="#">
                    <span class="white-text name">Gabriel Martínez</span>
                </a>
                <a href="">
                    <span class="white-text email">gabmart1995@gmail.com</span>
                </a>
            </div>
        </li>
        <li><a href="#"><i class="fab fa-telegram left"></i>+584129101803</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#"><i class="fab fa-github left"></i>gabmart1995@github.com</a></li>
    </ul>
    <ul id="menu_jhonathan" class="sidenav">
        <li> 
            <div class="user-view">
                <!--Imagen de fondo -->
                <div class="background">
                    <img src="<?php echo base_url("assets/img/business-582912_1920.jpg"); ?>" alt="" class="responsive-img">
                </div>
                <a href="#">
                    <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="circle" alt="">
                </a>
                <a href="#">
                    <span class="white-text name">Jhonathan Tovar</span>
                </a>
                <a href="">
                    <span class="white-text email">correo electronico</span>
                </a>
            </div>
        </li>
        <li><a href="#"><i class="fab fa-telegram left"></i>+584125640559</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#"><i class="fab fa-github left"></i>usuario</a></li>
    </ul>
    <ul id="menu_samuel" class="sidenav">
        <li> 
            <div class="user-view">
            <!--Imagen de fondo -->
                <div class="background">
                    <img src="<?php echo base_url("assets/img/business-582912_1920.jpg"); ?>" alt="" class="responsive-img">
                </div>
                <a href="#">
                    <img src="<?php echo base_url("assets/img/tie-690084_1920.jpg"); ?>" class="circle" alt="">
                </a>
                <a href="#">
                    <span class="white-text name">Samuel Olarte</span>
                </a>
                <a href="">
                    <span class="white-text email">correo electronico</span>
                </a>
            </div>
        </li>
        <li><a href="#"><i class="fab fa-telegram left"></i>+584125640559</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#"><i class="fab fa-github left"></i>usuario</a></li>  
    </ul> 
    <!--Contenedor Parallax-->
    <div class="parallax-container">
        <div class="paralax">
            <img src="<?php echo base_url("assets/img/computer-1209641_1920.jpg"); ?>" class="responsive-img" alt="Paralax">
        </div>
    </div>
    <section id="escogenos" class="scrollspy">
        <div class="container section">
            <h2>¿Porque debería escogernos?</h2>
            <div class="row">  <!--Desarrollo de Aplicaciones-->
                <div class="col s12 m12">
                    <h4>Desarrollo de Aplicaciones de Escritorio</h4>
                    <p>
                        Puede parecer una locura, pero todavía existe personas que solicitan
                        aplicaciones de escritorio que corran en diversas plataformas, debido 
                        a que algunos clientes no cuentan para gestionar un servidor web. Por está 
                        razón buscamos llegar a esas personas y darles soluciones tecnológicas a buen precio. <br><br>

                        En el servicio de desarrollo de aplicaciones, ofrecemos un catálogo de 
                        software junto con su respectiva documentación que les permita seleccionar 
                        a cuál de ellos se adapta a sus necesidades reales. O si lo prefiere puede 
                        solicitar el desarrollo de una aplicación totalmente nueva personalizada a 
                        gusto del cliente. <br><br>
                    </p>
                </div>
                 <!-- tabs de contenido -->
                 <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#ven_aplic">Ventajas</a></li>
                        <li class="tab col s6"><a href="#ben_aplic">Beneficios</a></li>
                </ul>
                <div class="col s12 m12 color" id="ven_aplic">
                    <ol>
                        <li>
                            <p>
                                Cuentas con un catálogo de software. Listo para usar, solo sigue los
                                pasos y listo.
                            </p>
                        </li>
                        <li>
                            <p>
                                Corren en multiplataformas (Windows, Linux, Mac).
                            </p>
                        </li>
                        <li>
                            <p>
                                Ofrecemos servicio de mantenimiento y soporte dentro de la aplicación
                            </p>
                        </li>
                        <li>
                            <p>
                                Ofrecemos su respectiva documentación y cursos para el uso correcto del 
                                software.
                            </p>
                        </li>
                        <li>
                            <p>
                                Aplicamos buenas prácticas de programación y de seguridad en cada una de 
                                nuestras aplicaciones.
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="col s12 color" id="ben_aplic">
                    <ol>
                        <li>
                            <p>Muy útil sino cuentas con conexión a Internet.</p>
                        </li>
                        <li>
                            <p>Permitimos automatizar procesos de pequeñas y medianas empresas</p>
                        </li>
                        <li>
                            <p>Aplicaciones con altos estándares de calidad.</p>
                        </li>
                        <li>
                            <p>
                                Tienes la documentación y cursos actualizados para tu aplicación,
                                para guiarte durante todo el proceso de instalacion y configuracion del 
                                software. 
                            </p>
                        </li>
                        <li>
                            <p>
                                Amigo programador si ya tienes una aplicación ya desarrollada pero
                                tienes problemas para distribuirlo podemos darte toda la asesoría
                                necesaria para colocarlo en producción junto con PenielSoft. 
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row"> <!--Desarrollo Web-->
                <div class="col s12 m12">
                    <h4>Desarrollo de Páginas y Aplicaciones Web</h4>
                    <p>
                        En el mundo actual el 90% de los negocios se manejan gracias a la Internet y 
                        personalmente creemos que no te quieras quedar átras. En el servicio de desarrollo web
                        nos enfocamos en la creación de las páginas y aplicaciones responsivas adaptándose 
                        a las necesidades de tu negocio.<br><br>

                        Incluimos un catálogo para el desarrollo web con su respectiva documentación en caso 
                        de que necesites trabajar de manera muy ágil al levantar tu negocio en el mundo de la 
                        Internet. Podemos actualizar y mejorar el contenido, si
                        ya tienes una en funcionamiento. <br><br>
                    </p>
                    <!--Tabulador de contenido-->
                    <ul class="tabs">
                            <li class="tab col s6"><a class="active" href="#ven_web">Ventajas</a></li>
                            <li class="tab col s6"><a href="#ben_web">Beneficios</a></li>
                    </ul>
                    <div class="col s12 m12 color" id="ven_web">
                        <ol>
                            <li>
                                <p>Cuentas con un catálogo de desarrollo web.</p>
                            </li>
                            <li>
                                <p>
                                    Ofrecemos servicio de mantenimiento y soporte dentro de la 
                                    página o aplicación.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Igual que las aplicaciones ofrecemos su respectiva documentación y cursos para el uso correcto del 
                                    software.  
                                </p>
                            </li>
                            <li>
                                <p>
                                    Aplicamos buenas prácticas de programación y de seguridad en cada una de 
                                    nuestras aplicaciones.
                                </p>
                            </li>
                        </ol>
                    </div>
                    <div class="col s12 m12 color" id="ben_web">
                        <ol>
                            <li>
                                <p>
                                    Las aplicaciones y páginas web desarrolladas por PenielSoft se adaptan a 
                                    cualquier dispositivo tecnológico.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Aplicaciones con altos estándares de calidad.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Tienes la documentación y cursos actualizados para tu aplicación
                                    para guiarte durante todo el proceso del instalacion y configuracion 
                                    del software.
                                </p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <h4>Soporte Tecnológico</h4>
                    <p>
                        Actualmente cualquier persona o empresa necesita soporte tecnológico para mantener en 
                        funcionamiento sus activos de información. En el servicio de Soporte Tecnológico nos enfocamos en mantener 
                        operativos los equipos informáticos del cliente, realizando una inspección completa acerca del  
                        dispositivo.<br><br> 
                        
                        Dependiendo de la solicitud, aplicamos un proceso de respaldo y recuperación donde se mantiene segura su 
                        información al momento de realizar cualquier servicio de soporte.  <br><br>
                    </p>
                    <!--Tabulador de contenido-->
                    <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#ven_sop">Ventajas</a></li>
                        <li class="tab col s6"><a href="#ben_sop">Beneficios</a></li>
                    </ul>
                </div>
                <div class="col s12 m12 color" id="ven_sop">
                    <ol>
                        <li>
                            <p>
                                Incluye servicio a domicilio, los fines de semana (Solo en algunas 
                                zonas de Caracas).
                            </p>
                        </li>
                        <li>
                            <p>
                                Realizamos inspecciones a los equipos a nivel de hardware y software.
                                Según las especificaciones del fabricante. 
                            </p>
                        </li>
                        <li>
                            <p>Cuidamos la información suministrada por el cliente.</p>
                        </li>
                    </ol>
                </div>
                <div class="col s12 m12 color" id="ben_sop">
                    <ol>
                        <li>
                            <p>
                                El cliente conoce acerca del estado del equipo durante y después del 
                                servicio.
                            </p>
                        </li>
                        <li>
                            <p>
                                Ofrecemos recomendaciones para el mejoramiento de la vida útil del equipo.
                            </p>
                        </li>
                        <li>
                            <p>
                                Incluimos capacitaciones o cursos para el uso correcto del equipo.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div><br><br>
    </section>
    <!-- Planes de trabajo-->
    <section id="planes" class="scrollspy">
        <div class="container section">
            <h2 class="center">Planes de Desarrollo</h2>
            <p class="center">
                No estas conforme con la aplicación que manejas o necesitas una nueva. 
                Tranquilo, puedes solicitar un proyecto totalmente 
                personalizado de acuerdo a tus necesidades. 
            </p>
            <div class="row">
                <div class="col s12">
                    <!--Menú colapsable-->
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="fas fa-laptop"></i>
                                Desarrollo de aplicaciones.
                            </div>
                            <div class="collapsible-body">
                                <!--Contenido-->
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Incluye:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Resumen ejecutivo</td>
                                            <td>
                                                <i class="fas fa-check color"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo de aplicación</td>
                                            <td>
                                                <i class="fas fa-check color"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo de documentación</td>
                                            <td>
                                                <i class="fas fa-check color"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Asistencia tecnológica</td>
                                            <td>
                                                <i class="fas fa-check color"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="fas fa-code"></i>
                                Desarrollo web.
                            </div>
                            <div class="collapsible-body">
                                <!--Contenido-->
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Incluye:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Resumen ejecutivo</td>
                                            <td> <i class="fas fa-check color"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo de la página o aplicación</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo de documentación</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Asistencia tecnológica</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <i class="fas fa-code-branch"></i>
                                Soporte tecnológico
                            </div>
                            <div class="collapsible-body">
                                <!--Contenido-->
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Incluye:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Diagnostico del problema:</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Mantenimiento de preventivo y correctivo</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Asistencia tecnológica</td>
                                            <td><i class="fas fa-check color"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
     <!--Intro contactanos -->
     <section>
        <div class="content">
            <h4>Contáctanos</h4>
        </div>
    </section>
    <!--formulario de contacto-->
    <section id="contactanos"  class="scrollspy">
        <div class="container section">
            <div class="row">
                <p class="center">
                    Para contactarnos solamente tiene que completar el formulario
                    y nos pondremos en contacto teléfonico o través de nuestro 
                    correo.
                </p>
                <form action="" method="POST" class="col s12" onsubmit="mensaje()" 
                autocomplete="off">
                    <div class="row card-panel">
                        <div class="input-field col s12 m6">
                            <i class="fas fa-user-circle prefix"></i>
                            <input type="text" placeholder="ingresa tu nombre ..."
                            id="nombre" class="validate" pattern="[A-Z a-z]+" 
                            maxlength="20" minlength="5" required>
                            <label for="">Nombre:</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="prefix fas fa-user-circle"></i>
                            <input type="text" placeholder="ingresa tu apellido ..."
                            id="apellido" class="validate" pattern="[A-Z a-z]+" 
                            maxlength="20" minlength="5" required>
                            <label for="apellido">Apellido:</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="email" placeholder="ingresa tu correo ..."
                            id="email" class="validate" required>
                            <label for="email">Correo electrónico</label>
                        </div>
                        <div class="input-field col s12 m6">
                           <i class="fas fa-phone-square prefix"></i>
                           <select required>
                                <option value="" selected>Seleccione ...</option>
                               <option value="58">+58 Venezuela</option>
                               <option value="57">+57 Colombia</option>
                           </select>
                           <label>Código teléfonico</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <i class="fas fa-mobile-alt prefix"></i>
                            <input type="tel" placeholder="ingresa tu numero telefonico"
                            id="telefono" class="validate" pattern="[0-9]+"
                            minlength="9" maxlength="10" required>
                            <label for="telefono">Telefono de contacto:</label>
                        </div>
                        <button type="submit" class="btn waves-light waves-effect blue">
                            <i class="fas fa-envelope left"></i>
                            Enviar
                        </button>
                        <button type="reset" class="btn blue waves-light waves-effect">
                            <i class="fas fa-times left"></i>
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php echo base_url("assets/js/init.js"); ?>" type="text/javascript"></script>     
    <script src="<?php echo base_url("assets/js/functions.js"); ?>" type="text/javascript"></script>
</body>
<footer>
    <!--Ventana modal-->
    <div class="modal" id="modal1">
        <div class="modal-content">
            <h4>Condiciones del servicio:</h4>
            <ol>
                <li>
                    No se permite la utilización de este servicio a los menores 
                    de 18 años.
                </li> <br>
                <li>
                    Todos los servicios que se ofrecen incluyen un presupuesto de trabajo, que 
                    se cancela el 50% al iniciar y el otro 50% al concluir el servicio.
                </li><br>
                <li>
                    Para el pago del servicio se realizará por transferencia al banco 
                    seleccionado una vez acordado y aceptar los términos de inicio del servicio.
                </li> <br>
                <li>
                    Puedes incluir tu software dentro de nuestro casa de software pero 
                    será cuidadosamente revisado por el equipo para observar, si cumple 
                    con las especificaciones minimas para la venta al público.  
                </li>
            </ol>
        </div>
        <!-- footer -->
        <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn-flat">
                Aceptar
            </a>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
           <div class="row">
               <div class="col s12">
                    <span class="logo">Peniel</span>
                    <span class="logo2">Soft</span>
                    <a href="#modal1" class="right modal-trigger">Condiciones del servicio</a>
               </div>
           </div>
        </div>
    </div>
</footer>
</html>