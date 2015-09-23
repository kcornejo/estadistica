<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>New World</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/portfolio.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="/assets/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content  page-footer-fixed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo url_for('pae/index') ?>">
                        <img src="/images/New World/logoPae.png" alt="logo" style="width:100px;margin-top:6px" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <br/><br/><br/>
                        <li class="">
                            <a href="<?php echo url_for('pae/index') ?>">
                                <i class="icon-home"></i>
                                <span class="title">Inicio</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo url_for('pae/mision') ?>">
                                <i class="icon-flag"></i>
                                <span class="title">Misión</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo url_for('pae/vision') ?>">
                                <i class="icon-eye"></i>
                                <span class="title">Visión</span>
                            </a>
                        </li>
                        <li class="start active open">
                            <a href="javascript:;">
                                <i class="fa fa-briefcase"></i>
                                <span class="title">Portafolio</span>
                                <span class=""></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo url_for('pae/iberoamericano') ?>">
                                        <i class="fa fa-building-o"></i>
                                        Grupo Financiero Iberoamericano .S.A.</a>
                                </li>
                                <li>
                                    <a href="<?php echo url_for('pae/credito') ?>">
                                        <i class="fa fa-money"></i>
                                        Casa de Créditos Future–Credit</a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo url_for('pae/paseo') ?>">
                                        <i class="fa fa-star"></i>
                                        Paseo Futu-Live</a>
                                </li>
                                <li>
                                    <a href="<?php echo url_for('pae/residencial') ?>">
                                        <i class="fa fa-home"></i>
                                        Residenciales Futu-Live</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">

                    <!-- END STYLE CUSTOMIZER -->
                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        Corporación New World <small>¡Cambiando Vidas, mejorando tu futuro!</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="<?php echo url_for('pae/index') ?>">New World</a>
                                <i class="fa fa-arrow-right"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <a href="javascript:;">Paseo Futu-Live</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Inversiones Futu-Live</h3>
                            <hr/>
                            <div class="col-md-6">
                                <center><img src="/images/New World/paseo.png" style="width:50%"/></center>
                            </div>
                            <div class="col-md-5">
                                <br/>
                                <span>
                                    <font size="3">
                                    <p align="justify">
                                        La idea de este nuevo proyecto llamado “Futu-Live” surgió del deseo de ir un paso adelante sobre lo que va a venir en el futuro. Es por ello que surgió este nombre, “Futu” haciendo referencia al futuro y “Live” que en español significa vivir; para llegar a un concepto que significa “Vivir en el Futuro”.
                                    Queremos hacer que los residenciales tengan un nuevo concepto quitando lo rutinario o común. Tener un tipo residencial y paseo en conjunto enfocado en las nuevas tendencias tecnológicas del futuro junto con diversas técnicas de reciclaje ambientalistas.
                                    Está ubicado en el Km. 19 Carretera al Pacífico.
                                    </p>
                                    </font>
                                </span>
                            </div>
                        </div>
                        <br/>

                        <div class="col-md-6">
                            <h3><i class="fa fa-flag"></i> Misión</h3>
                            <hr/>
                            <div class="col-md-8">
                                <font size="3">
                                <p align="justify">
                                    Somos un paseo y residencial que brinda la mejor comodidad, seguridad y tranquilidad a las personas que en él se encuentran o lo frecuentan. Les ofrecemos a las personas un lugar donde pueden encontrar todo sin tener que ir tan lejos. 
                                </p>
                                </font>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h3><i class="fa fa-eye"></i> Visión</h3>
                            <hr/>
                            <div class="col-md-8">
                                <font size="3">
                                <p align="justify">
                                    Ser un sitio que pueda ser frecuentado por diferentes personas y al hacerlo encontrar todo lo que ellos necesitan. Y al mismo tiempo ser el residencial en el que todos desean vivir, así como también caracterizarnos por la serie de beneficios que solo nosotros ofrecemos.
                                </p>
                                </font>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h3><i class="fa fa-tree"></i> Empresa Sustentable</h3>
                                <hr/>
                                <font size="3">
                                <p align="justify">
                                    Somos un tipo de empresa que no tiene impacto negativo en el ambiente global. Implementamos políticas progresistas en cuanto a el ambiente esto quiere decir que somos una corporación donde una de sus bases principales es la práctica del reciclaje, en cada una de nuestras empresas ya sea el banco, casa de créditos y en el paseo residencial se contara con basureros especiales y modernos para poder depositar la basura en el lugar donde corresponde.

                                </p>
                                </font>
                            </div>
                            <div class="col-md-12">
                                <h3><i class="fa fa-money"></i> Centro Comercial</h3>
                                <hr/>
                                <div class="col-md-3">
                                    <img src="/images/New World/cc.png" width="100%"/>
                                </div>
                                <div class="col-md-9">
                                    <div class="margin-top-10">
                                        <ul class="mix-filter">
                                            <li id="ups" class="filter active" data-filter="category_1">
                                                Accesorios y Regalos
                                            </li>
                                            <li class="filter" data-filter="category_2">
                                                Heladerias y Cafeterias
                                            </li>
                                            <li class="filter" data-filter="category_3">
                                                Financiera
                                            </li>
                                            <li class="filter" data-filter="category_4">
                                                Belleza y Estetica
                                            </li>
                                            <li class="filter" data-filter="category_5">
                                                Veterinaria
                                            </li>
                                            <li class="filter" data-filter="category_6">
                                                Gimnasio
                                            </li>
                                            <li class="filter" data-filter="category_7">
                                                Hogar y Electronicos
                                            </li>
                                            <li class="filter" data-filter="category_8">
                                                Panaderia y Pasteleria
                                            </li>
                                            <li class="filter" data-filter="category_9">
                                                Restaurantes
                                            </li>
                                            <li class="filter" data-filter="category_10">
                                                Ropa y Calzado
                                            </li>
                                            <li class="filter" data-filter="category_11">
                                                Telefonia
                                            </li>
                                            <li class="filter" data-filter="category_12">
                                                Salud
                                            </li>
                                        </ul>
                                        <div class="row mix-grid">
                                            <div class="col-md-3 col-sm-4 mix category_1">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image012.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_1">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image013.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_1">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image014.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_1">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image016.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_1">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image015.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_2">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image022.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_2">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image023.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_2">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image026.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_2">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image027.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_2">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image028.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image033.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image038.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image034.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image035.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image036.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_3">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image045.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_4">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image050.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_4">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image051.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_4">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image052.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_4">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image053.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_5">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image053.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_5">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image057.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_5">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image058.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_6">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image061.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_6">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image062.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_6">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image063.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_7">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image066.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_7">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image067.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_7">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image068.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_7">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image069.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_8">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image080.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_8">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image081.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image088.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image090.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image091.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image089.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image093.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_9">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image109.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_10">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image113.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_10">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image117.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_10">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image118.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_11">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image125.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_11">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image127.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_11">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image129.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_12">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image131.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_12">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image132.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4 mix category_12">
                                                <div class="mix-inner">
                                                    <img class="img-responsive" src="/images/New World/archivos/image133.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3><i class="fa fa-tree"></i> Sitio Común Futu-Live</h3>
                                <hr/>
                                <font size="3">
                                <p align="justify">
                                    Contamos son Sitio Comun: Es un lugar exlusivo para personas que vivien en el residencial donde se encuentran pequeños locales donde esta ubicados negocios que son necesarios  para  el diario vivir de una persona como por ejemplo un expendio de gas, una tortillería, una tienda, una sastrería entre otros.
                                </p>
                                </font>
                                <img src="/images/comun.png"/>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <?php echo date('Y') ?> &copy; New World
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="/assets/plugins/respond.min.js"></script>
        <script src="/assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="/assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="/assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="/assets/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/assets/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/assets/scripts/metronic.js" type="text/javascript"></script>
        <script src="/assets/scripts/layout.js" type="text/javascript"></script>
        <script src="/assets/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="/assets/scripts/demo.js" type="text/javascript"></script>
        <script src="/assets/scripts/index.js" type="text/javascript"></script>
        <script src="/assets/scripts/tasks.js" type="text/javascript"></script>
        <script src="/assets/scripts/portfolio.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
                QuickSidebar.init(); // init quick sidebar
                Demo.init(); // init demo features
                Index.init();
                Index.initDashboardDaterange();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                Tasks.initDashboardWidget();
                Portfolio.init();
                jQuery("#ups").click();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>