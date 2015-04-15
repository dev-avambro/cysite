<?php require_once "config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="cyware">
    <link rel="icon" type="image/png" href="favicon.png"/>
    <title>CYWARE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <?php if(ENVIRONMENT=="production"): include_once("config/analyticstracking.php"); endif; ?>
      <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-home fa-1x"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Acerca de</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenid&#64; a nuestra empresa!</div>
                <div class="intro-heading">CYWARE</div>
                <a href="#services" class="page-scroll btn btn-xl">Cuentame m&aacute;s</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <!--<h3 class="section-subheading text-muted"></h3>-->
                </div>
            </div>
            <div class="row text-center">
                 <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">M&oacute;vil</h4>
                    <p class="text-muted">Desarrollamos aplicaciones m&oacute;viles.</p>
                    <ul class="list-inline">
                      <li><img src="img/services/android.png" class="img-responsive" alt=""></li>
                      <li><img src="img/services/iOS.png" class="img-responsive" alt=""></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-server fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Servidores</h4>
                    <p class="text-muted">Configuraci&oacute;n, mantenimiento y actualizaci&oacute;n.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Sitio Web</h4>
                    <p class="text-muted">Dise&ntilde;amos sitios personalizados a la medida.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>

                    </span>
                    <h4 class="service-heading">Seguridad Web</h4>
                    <p class="text-muted">La seguridad est&aacute; primero y aprovechamos las herramientas para el aseguramiento de su aplicaci&oacute;n</p>
                </div>  
               
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Empresas que han confiado en CYWare.</h3>
                </div>
            </div>
            <div class="row">
                <!--
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div><!--
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/lifebook.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>LIFEBOOK</h4>
                        <p class="text-muted">Backend &#43; RESTful Api Server</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fundal.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>FUNDAL</h4>
                        <p class="text-muted">Servidores,Redes,ERP y Soporte T&eacute;cnico</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/mya.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Servicios M&amp;A</h4>
                        <p class="text-muted">Sitio Web &#43; Backend</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nosotros</h2>
                    <p class="section-subheading text-muted">CYWARE es una empresa de servicios informáticos que se dedica al diseño y desarrollo web, desarrollo de aplicaciones móviles Android e IOS, mantenimiento informático para empresas con soporte personalizado, implementación y administración de servidores, resolución de incidencias, copias de seguridad, además del marketing online y posicionamiento web.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Misi&oacute;n</h4>
                           
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Somos una empresa comprometida con proporcionar las tecnologías más innovadoras a la medida de las necesidades empresariales, con el objetivo de incrementar en nuestros clientes la competitividad y productividad.  Nos satisface ser importantes colaboradores en la implementación de soluciones prácticas y creativas, que ayuden al crecimiento de nuestros clientes. .</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/22.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Visi&oacute;n</h4>
                                    <!--<h4 class="subheading">Visi&oacute;n</h4>-->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Nuestro deseo es posicionarnos como una empresa reconocida que brinda servicios tecnológicos para contribuir a la gestión de negocios de nuestros clientes, generando valor en sus procesos administrativos y en la toma de decisiones a través del uso de tecnología de alto nivel. Nuestro compromiso y experiencia nos permite desarrollar, comercializar e implementar exitosamente soluciones de gestión empresarial y servicios tecnológicos.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/32.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Valores</h4>
                                </div>
                                <div class="timeline-body">
                                    <ul class="list-unstyled">
                                        <li>Atenci&oacute;n personalizada.</li>
                                        <li>Tiempo de respuesta inmediata.</li>
                                        <li>Monitorización de sus servicios.</li>
                                        <li>Asistencia remota on-line a través de nuestros técnicos.</li>
                                        <li>Análisis de su infraestructura para sostener una base fiable y estable en su informática.</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Se Parte
                                    <br>de nuestra
                                    <br>historia!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="http://portaldace.mineco.gob.gt/">
                        <img src="img/logos/dace.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://simecgt.com/">
                        <img src="img/logos/simec.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="http://www.csuca.org/">
                        <img src="img/logos/fundal.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div><!--
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>-->
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted">Env&iacute;anos un mensaje.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="por favor ingresa tu nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo *" id="email" required data-validation-required-message="por favor ingresa tu correo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Tel&eacute;fono *" id="phone" required data-validation-required-message="por favor ingresa tu n&uacute;mero de tel&eacute;fono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu mensaje *" id="message" required data-validation-required-message="por favor ingresa un mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; CYWARE 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>LIFEBOOK</h2>
                            <p class="item-intro text-muted">Por una vida mejor...</p>
                            <img class="img-responsive img-centered" src="img/portfolio/lifebook.jpeg" alt="">
                            <p class="item-intro text-muted">El proyecto fue desarrollado utilizando <a href="http://www.codeigniter.com/">Codeigniter</a> and <a href="http://getbootstrap.com/">Twitter Bootstrap</a> </p>
                            <p class="item-intro text-muted">Adem&aactue; se desarrollo un <a href="http://es.wikipedia.org/wiki/Representational_State_Transfer" target="_blank">RESTful API Server</a> para el consumo de informaci&oacute;n entre la aplicaci&oacute;n web y dispositivos m&oacute;viles.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Proyecto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>FUNDAL</h2>
                            <p class="item-intro text-muted">Por un mundo m&aacute;s humano.</p>
                            <p class="item-intro text-muted">FUNDAL es una fundaci&oacute;n que atiende a ni&ntilde;os con Sordoceguera, a esta instituci&oacute;n se le brinda soporte t&eacute;cnico en el &aacute;rea de inform&aacute;tica y telecomunicaciones, somos los responsables del servidor proxy/red, ademas del desarrollo de una aplicaci&oacute;n web para el control de procesos internos de las sedes, donde se lleva el control de los estudiantes, padrinos (socios aportadores), empleados, proyectos, eventos, actividades internas, entre otras cosas.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/fundal.jpg" alt="">
                            <p class="item-intro text-muted">El Proyecto se esta desarrollando en PHP,MySQL y jQuery.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Proyecto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Servicios M&amp;A</h2>
                            <p class="item-intro text-muted">M&amp;A es una empresa que se dedica a la fabricaci&oacute;n y venta de muebles finos, ademas de la elaboraci&oacute;n de parques tem&aacute;ticos, a M&amp;A se le desarrollo un portal web en el cual pudiera ofrecer sus productos con una galer&iacute;a de fotograf&iacute;as muy atractivas.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/mya.jpg" alt="">
                            <p class="item-intro text-muted">El sitio fue trabajado en joomla, donde se le agreraron modulos de desarrolladores externos.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Proyecto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
