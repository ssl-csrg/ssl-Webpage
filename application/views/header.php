<!doctype html>
<html lang="es">
  <head>
    <!-- metadata -->
    <meta charset="utf-8">
    <title>ssl &ndash; Sansanos por el Software Libre</title>
    <meta name="description" content="Sansanos por el Software Libre es una iniciativa de Computer Systems Research Group orientada al desarrollo y difusión del Software Libre. ">
    <meta name="author" content="Computer Systems Research Group Santiago">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- estilos -->
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/estilos.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800,400' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    
  </head>
  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--<a class="brand hidden-desktop" href="#"><span class="logo azul">{s</span><span class="logo rojo">s</span><span class="logo amarillo">l} </span></a>-->
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php echo $nav['inicio'] ?>><a href="index.html">Inicio</a></li>
              <li <?php echo $nav['manifiesto'] ?>><a href="manifiesto.html">Manifiesto</a></li>
              <li <?php echo $nav['gente'] ?>><a href="gente.html">Gente</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Proyectos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="difusion.html">Difusion</a></li>
                  <li><a href="desarrollo.html">Desarrollo</a></li>
                </ul>
              </li>
              <li class="divider-vertical"></li>
              <li><a data-toggle="modal" href="#unete-modal" style="font-weight: bold;">Únete</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>