<?php
session_start();

//INCLUSES


if(!isset($_SESSION['id_usuario']))
    header('Location:index.php');

?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>

<meta charset="utf-8">
<title>Ensilar Web</title>
<meta name="description" content="Ensilar Web es parte de una plataforma desarrollada para la Cooperativa de Tamberos Unidos de Porteña Ltda. con el fin de cumplimentar el proyecto final de la carrera Ingeniería en Sistemas de Información de la UTN FRSFco">

<!--REVISAR-->
<meta name="author" content="pixelcave">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
<link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
<link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
<link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
<link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
<link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
<link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
<link rel="apple-touch-icon" href="img/icon180.png" sizes="152x180">
<!--/REVISAR-->

<!--------------------BOOTSTRAP-------------------->
<link rel="stylesheet" href="css/bootstrap.min-3.2.css">
<link rel="stylesheet" href="css/plugins-3.2.css">
<link rel="stylesheet" href="css/main-3.1.css">
<link rel="stylesheet" href="css/themes-3.1.css">
<!--------------------BOOTSTRAP-------------------->
<link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

<script src="js/vendor/modernizr-respond.min.js"></script>


<!---------------------  FILEINPUT ------------------------------>
<link href="librerias/fileinput/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
<link href="librerias/fileinput/css/fileinput.css" rel="stylesheet">
<script src="librerias/fileinput/js/jquery.min.js"></script>
<script src="librerias/fileinput/js/fileinput.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>


<script>
    $(document).ready(function(){
        
        //CARGA INICIAL DE LA APLICACIÓN
        $("#contenedor_unico").load("secciones/inicio.php");
        
        
        
        //
        //BOTONES DEL MENÚ SUPERIOR
        //
        $(".content-header a").click(function(){
            if($(this).attr("id")=="graficos") 
            {
                $("#contenedor_unico").load("secciones/graficos.php");
                quita_active();
                $("#menu_izquierdo_grafico").css("display","block");
                $("#li_graficos").addClass("active");

            }
            else if($(this).attr("id")=="informes"){
                $("#contenedor_unico").load("secciones/informes.php");
                quita_active();
                $("#menu_izquierdo_informes").css("display","block");
                $("#li_informes").addClass("active");
            }
            else if($(this).attr("id")=="indicadores"){
                $("#contenedor_unico").load("secciones/indicadores.php");
                quita_active();
                $("#menu_izquierdo_indicadores").css("display","block");
                $("#li_indicadores").addClass("active");
            }
            else if($(this).attr("id")=="historicos"){ 
                $("#contenedor_unico").load("secciones/historicos.php");
                quita_active();
                $("#menu_izquierdo_historicos").css("display", "block");
                $("#li_historiocos").addClass("active");
            }
            else if($(this).attr("id")=="configuracion"){
                $("#contenedor_unico").load("secciones/configuracion.php");
                quita_active();
                $("#menu_izquierdo_configuracion").css("display","block");
                $("#li_configuracion").addClass("active");
                quitar_active_menu_izquierda();
            }
            
            return false;
        });
        //
        //FIN MENÚ SUPERIOR
        //
        
        
        
        //
        //BOTONES DEL MENÚ IZQUIERDO
        //
        $(".sidebar-nav a").click(function(){
            if($(this).attr("id")=="nuevo_usuario"){
                $("#contenedor_unico").load("secciones/configuracion_nuevo_usuario.php");
                quitar_active_menu_izquierda();
                $("#nuevo_usuario").addClass("active");
            }
            else if($(this).attr("id")=="editar_perfil"){
                $("#contenedor_unico").load("secciones/configuracion_editar_perfil.php");
                quitar_active_menu_izquierda();
                $("#editar_perfil").addClass("active");
            }
           
           
        
            return false;
        });
        //
        //FIN DEL MENÚ IZQUIERDO
        //
        
        
        
        
        
        $("#a_perfil").click(function(){
            $("#contenedor_unico").load("secciones/configuracion_perfil.php");
            quitar_active();
            $("#li_configuracion").addClass("active");
            return false;
        });
        
        
        
    });
    
    function quita_active(){
        //quita la clase "active del menú superior
         $("#li_graficos").removeClass("active");
         $("#li_informes").removeClass("active");
         $("#li_indicadores").removeClass("active");
         $("#li_historicos").removeClass("active");
         $("#li_configuracion").removeClass("active");
         
         $("#menu_izquierdo_grafico").css("display","none");
         $("#menu_izquierdo_informes").css("display","none");
         $("#menu_izquierdo_indicadores").css("display","none");
         $("#menu_izquierdo_historicos").css("display","none");
         $("#menu_izquierdo_configuracion").css("display","none");
    }
    
    function quitar_active_menu_izquierda(){
        $("#menu_izquierdo a").removeClass("active");
    }
    
</script>



</head>
<body>
<div id="page-wrapper">
    <div class="preloader themed-background">
        <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
        <div class="inner">
            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
        </div>
    </div>
    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
        <div id="sidebar-alt">
            <div id="sidebar-alt-scroll">
                <div class="sidebar-content">
                    <a href="page_ready_chat.php" class="sidebar-title">
                        <i class="glyphicon glyphicon-grain pull-right"></i> <strong>Chat</strong>UI
                    </a>
                    <div class="chat-talk display-none">
                        <ul class="chat-talk-messages">
                            <li class="text-center"><small>Yesterday, 18:35</small></li>
                            <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                            <li class="chat-talk-msg animation-slideRight">How are you?</li>
                            <li class="text-center"><small>Today, 7:10</small></li>
                            <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine, thanks!</li>
                        </ul>
                        <form action="index.php" method="post" id="sidebar-chat-form" class="chat-form">
                            <input type="text" id="sidebar-chat-message" name="sidebar-chat-message" class="form-control form-control-borderless" placeholder="Type a message..">
                        </form>
                    </div>
                    <a href="javascript:void(0)" class="sidebar-title">
                        <i class="fa fa-globe pull-right"></i> <strong>Activity</strong>UI
                    </a>
                    <div class="sidebar-section">
                        <div class="alert alert-danger alert-alt">
                            <small>just now</small><br>
                            <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                        </div>
                        <div class="alert alert-info alert-alt">
                            <small>2 hours ago</small><br>
                            <i class="gi gi-coins fa-fw"></i> You had a new sale!
                        </div>
                        <div class="alert alert-success alert-alt">
                            <small>3 hours ago</small><br>
                            <i class="fa fa-plus fa-fw"></i> <a href="page_ready_user_profile.php"><strong>John Doe</strong></a> would like to become friends!<br>
                            <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Accept</a>
                            <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-times"></i> Ignore</a>
                        </div>
                        <div class="alert alert-warning alert-alt">
                            <small>2 days ago</small><br>
                            Running low on space<br><strong>18GB in use</strong> 2GB left<br>
                            <a href="page_ready_pricing_tables.php" class="btn btn-xs btn-primary"><i class="fa fa-arrow-up"></i> Upgrade Plan</a>
                        </div>
                    </div>
                    <a href="page_ready_inbox.php" class="sidebar-title">
                        <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                    </a>
                    <div class="sidebar-section">
                        <div class="alert alert-alt">
                            Debra Stanley<small class="pull-right">just now</small><br>
                            <a href="page_ready_inbox_message.php"><strong>New Follower</strong></a>
                        </div>
                        <div class="alert alert-alt">
                            Sarah Cole<small class="pull-right">2 min ago</small><br>
                            <a href="page_ready_inbox_message.php"><strong>Your subscription was updated</strong></a>
                        </div>
                        <div class="alert alert-alt">
                            Bryan Porter<small class="pull-right">10 min ago</small><br>
                            <a href="page_ready_inbox_message.php"><strong>A great opportunity</strong></a>
                        </div>
                        <div class="alert alert-alt">
                            Jose Duncan<small class="pull-right">30 min ago</small><br>
                            <a href="page_ready_inbox_message.php"><strong>Account Activation</strong></a>
                        </div>
                        <div class="alert alert-alt">
                            Henry Ellis<small class="pull-right">40 min ago</small><br>
                            <a href="page_ready_inbox_message.php"><strong>You reached 10.000 Followers!</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="sidebar">
            <div id="sidebar-scroll">
                <div class="sidebar-content">
                    <a href="sistema.php?me=co" class="sidebar-brand">
                        <i class="glyphicon glyphicon-home"></i>
                        <span class="sidebar-nav-mini-hide"><strong>Ensilar</strong> web</span>
                    </a>
                    <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                        <div class="sidebar-user-avatar">
                            <a href="page_ready_user_profile.php">
                                <?php
                                    echo '<img src="img/perfil/'.$_SESSION['rutaavatar_usuario'].'" alt="avatar">';
                                ?>
                            </a>
                        </div>
                        <div class="sidebar-user-name">
                            <?php 
                                echo $_SESSION['nombre_usuario']; 
                            ?>
                        </div>
                        <div class="sidebar-user-links">
                            <a id="a_perfil" href="#" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                                <i class="glyphicon glyphicon-wrench"></i>
                            </a>
                            <a id="logout" href="librerias/logout.php" data-toggle="tooltip" data-placement="bottom" title="Salir">
                                <i class="glyphicon glyphicon-log-out"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!--SELECCION DE COLOR-->
                    <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night-3.0.css" data-toggle="tooltip" title="Night"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst-3.0.css" data-toggle="tooltip" title="Amethyst"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern-3.0.css" data-toggle="tooltip" title="Modern"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn-3.0.css" data-toggle="tooltip" title="Autumn"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie-3.0.css" data-toggle="tooltip" title="Flatie"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring-3.0.css" data-toggle="tooltip" title="Spring"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy-3.0.css" data-toggle="tooltip" title="Fancy"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire-3.0.css" data-toggle="tooltip" title="Fire"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="css/themes/coral-3.0.css" data-toggle="tooltip" title="Coral"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="css/themes/lake-3.0.css" data-toggle="tooltip" title="Lake"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="css/themes/forest-3.0.css" data-toggle="tooltip" title="Forest"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="css/themes/waterlily-3.0.css" data-toggle="tooltip" title="Waterlily"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="css/themes/emerald-3.0.css" data-toggle="tooltip" title="Emerald"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="css/themes/blackberry-3.0.css" data-toggle="tooltip" title="Blackberry"></a>
                        </li>
                    </ul>
                    
                    
                    <!--MENU IZQUIERDO-->
                    <div id="menu_izquierdo">
                        <div id="menu_izquierdo_grafico" style="display: none">
                            <ul class="sidebar-nav" >
                                <li><a href="#" id="g1">gr1</a></li>
                                <li><a href="#" id="g2">gr2</a></li>
                            </ul>
                        </div>
                        <div id="menu_izquierdo_informes" style="display: none">
                            <ul class="sidebar-nav" >
                                <li><a href="#" id="in1">in1</a></li>
                                <li><a href="#" id="in2">in2</a></li>
                            </ul>
                        </div>
                        <div id="menu_izquierdo_indicadores" style="display: none">
                            <ul class="sidebar-nav" >
                                <li><a href="#" id="ind1">ind1</a></li>
                                <li><a href="#" id="ind2">ind2</a></li>
                            </ul>
                        </div>
                        <div id="menu_izquierdo_historicos" style="display: none">
                            <ul class="sidebar-nav" >
                                <li><a href="#" id="hi1">hi1</a></li>
                                <li><a href="#" id="hi2">hi2</a></li>
                            </ul>
                        </div>
                        <div id="menu_izquierdo_configuracion" style="display: none">
                            <ul class="sidebar-nav" >
                                <li><a href="#" id="nuevo_usuario"><i class="glyphicon glyphicon-triangle-right"></i>Nuevo usuario</a></li>
                                <li><a href="#" id="editar_perfil"><i class="glyphicon glyphicon-triangle-right"></i>Editar Prefil</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--FIN MENÚ IZQUIERDO-->
                </div>
            </div>
        </div>

        
        <div id="main-container">
            <header class="navbar navbar-default">
                <ul class="nav navbar-nav-custom">
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-options">
                            <li class="dropdown-header text-center">Header Style</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                </div>
                            </li>
                            <li class="dropdown-header text-center">Page Style</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                    <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form action="page_ready_search_results.php" method="post" class="navbar-form-custom" role="search">
                    <div class="form-group">
                        <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Buscar..">
                    </div>
                </form>
                <ul class="nav navbar-nav-custom pull-right">
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="label label-primary label-indicator animation-floating">4</span>
                        </a>
                    </li>
                    <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                    echo '<img src="img/perfil/'.$_SESSION['rutaavatar_usuario'].'" alt="avatar">';
                                ?>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>
                            <li>
                                <a href="page_ready_timeline.php">
                                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                                    <span class="badge pull-right">10</span>
                                    Updates
                                </a>
                                    <a href="page_ready_inbox.php">
                                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                    <span class="badge pull-right">5</span>
                                    Messages
                                    </a>
                                <a href="page_ready_pricing_tables.php"><i class="fa fa-magnet fa-fw pull-right"></i>
                                    <span class="badge pull-right">3</span>
                                    Subscriptions
                                </a>
                                <a href="page_ready_faq.php"><i class="fa fa-question fa-fw pull-right"></i>
                                    <span class="badge pull-right">11</span>
                                    FAQ
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_ready_user_profile.php">
                                    <i class="fa fa-user fa-fw pull-right"></i>
                                    Profile
                                </a>
                                <a href="#modal-user-settings" data-toggle="modal">
                                    <i class="fa fa-cog fa-fw pull-right"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_ready_lock_screen.php"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                <a href="login.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>
                            <li class="dropdown-header text-center">Activity</li>
                            <li>
                                <div class="alert alert-success alert-alt">
                                    <small>5 min ago</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>10 min ago</small><br>
                                    <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                </div>
                                <div class="alert alert-danger alert-alt">
                                    <small>Yesterday</small><br>
                                    <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <div id="page-content">
                <div class="content-header">
                    <ul class="nav-horizontal text-center">
                        <li id="li_graficos">
                            <a href="sistema.php" id="graficos"><i class="glyphicon glyphicon-blackboard"></i>Gráficos</a>
                        </li>
                        <li id="li_informes">
                            <a href="sistema.php" id="informes"><i class="glyphicon glyphicon-file"></i>Informes</a>
                        </li>
                        <li id="li_indicadores">
                            <a href="sistema.php" id="indicadores"><i class="glyphicon glyphicon-object-align-bottom"></i>Indicadores</a>
                        </li>
                        <li id="li_hostoricos">
                            <a href="sistema.php" id="historicos"><i class="glyphicon glyphicon-star"></i>Historicos</a>
                        </li>
                        <li id="li_configuracion">
                            <a href="sistema.php" id="configuracion"><i class="glyphicon glyphicon-cog"></i>Configuración</a>
                        </li>
                    </ul>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="row" id="contenedor_unico">
                    
                </div>
                
                
               
                
                
                
                
                
                
                
                
                
                
                
                
                <!--                
                <div class="row">
                    <div class="col-md-6">
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Superficie Trabajada</strong></h2>
                            </div>
                            <div id="dash-chart-live" class="chart">
                                <div id="gr_supreficie_trabajada" style="min-width: 100px; height: 350px; margin: 0 auto"></div>
                            </div>
                        </div>
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Web</strong> Server #1</h2>
                            </div>
                            <div id="dash-chart-live" class="chart">
                            </div>
                        </div>
                        <div class="block full">
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                            <li>
                                                <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> Esta semana</a>
                                                <a href="javascript:void(0)">Este maes</a>
                                                <a href="javascript:void(0)">Este año</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2><strong>Ventas</strong> esta semana</h2>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <span id="mini-sales1">55,5,6,7,10,16,18</span>
                                    <h4>WP Theme</h4>
                                </div>
                                <div class="col-sm-4">
                                    <span id="mini-sales2">5,6,8,3,11,15,35</span>
                                    <h4>Web App</h4>
                                </div>
                                <div class="col-sm-4">
                                    <span id="mini-sales3">7,8,9,8,8,10,12</span>
                                    <h4>Icon Setksdhbkvdbvdsv</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="glyphicon glyphicon-triangle-bottom"></i></a>
                                </div>
                                <h2><strong>Actividad</strong> Reciente</h2>
                            </div>
                            <div class="block-content-full">
                                <div class="timeline">
                                    <ul class="timeline-list">
                                        <li class="active">
                                            <div class="timeline-icon"><i class="glyphicon glyphicon-grain"></i></div>
                                            <div class="timeline-time"><small>23/10/2015</small></div>
                                            <div class="timeline-content">
                                                <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Siembra del cultivo</strong></a></p>
                                                <p class="push-bit">El cultivo fue sembrado el día 23/10/2015 bajo las condiciones optimas.</p>
                                                <p class="push-bit"><a href="page_ready_article.php" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-grain"></i> Ver detalles</a></p>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <div class="timeline-icon"><i class="glyphicon glyphicon-grain"></i></div>
                                            <div class="timeline-time"><small>21/12/2015</small></div>
                                            <div class="timeline-content">
                                                <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Contról de plagas</strong></a></p>
                                                Aplicación de Herbicida clase II
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="block full">
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                             <li>
                                                <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                                <a href="javascript:void(0)">This Month</a>
                                                <a href="javascript:void(0)">This Year</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2><strong>Sales</strong> This Week</h2>
                            </div>
                            <div id="gr2" style="min-width: 100px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
                -->
            </div>
            <footer class="clearfix">
                <div class="pull-right">
                    Pryecto Final Ostertag - Gorgni 
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> 2016 <a href="http://goo.gl/TDOSuC" target="_blank">Proyecto Ensilar</a>
                </div>
            </footer>
        </div>
    </div>
</div>
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
            </div>
            <div class="modal-body">
                <form action="sistema.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                    <fieldset>
                        <legend>Vital Info</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <p class="form-control-static">Admin</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                            <div class="col-md-8">
                                <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary">
                                    <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Password Update</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                <div class="col-md-8">
                                <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->





</body>
</html>

