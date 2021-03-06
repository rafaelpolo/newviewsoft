<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

      <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviesoft/Diseños/bootstrap/css/bootstrap.min.css">
    

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/menu.css">

      <title>NewViewSoft</title>

    </head>

  <body>

  <header>

    <!--Nombre y Apellido usuario-->   

    <nav class="navbar navbar-fixed-top navbar-inverse"  >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
              <li>
                <a href="#"  role="button"  class="btn btn-link" ><span class="glyphicon glyphicon-user"></span><?php session_start(); echo " " . $_SESSION['Administrador'] ?></span></a>
              </li>  
          </ul>

            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
      </div>
  </nav>
    <!--INICIO IMAGENES LOGO Y SENA-->   

    <nav class="navbar navbar-inverse">
          <div>
           <a href="" ><img src="/Newviesoft/Diseños/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="position:relative; top:28px; width: 648px;"></a>
          </div>
          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/Newviesoft/Diseños/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:160px; left:1110px; top:55px;"></a>
          </div>
	 </nav>
        

  <!--MENU PRINCIPAL--> 


<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="">MENÚ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
        <li><a href="../controlador/aprendices"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li> 
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Novedades <span class="caret"></span></a>

                <ul class="dropdown-menu" >
                  <li><a href="Cjornada.html"> Cambios de jornada</a></li>
                  <li><a href="Rvoluntario.html"> Retiro voluntario</a></li>
                  <li><a href="Aplazamientos.html"> Aplazamientos</a></li>
                  <li><a href="Deserciones.html"> Deserciones</a></li>
                  <li><a href="Traslados.html"> Traslados</a></li>
                  <li><a href="Reintegro.html"> Reintegro</a></li>
                </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Opciones <span class="caret"></span></a>

                <ul class="dropdown-menu" >
                  <li><a href="../controlador/roles"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                  <li><a href="perfil.html"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-question-sign "></span> Ayuda</a></li>
                  <li><a href="../controlador/cerrar"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                </ul>
        </li> 
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="search" id="buscador" name="buscador" placeholder="Buscador" class="form-control">
        </div>
        <button type="sumit" class="btn btn-primary">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>

    </div>
  </div>
</nav>


</header>

 <!--INICIO CONTENIDO-->

  <section>
    <div class="container col-md-12">
        <div id="myCarousel" class="carousel slide col-md-9" data-ride="carousel">
          
          <!-- INDICADORES -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

          <!-- IMAGENES -->

        <div class="carousel-inner">
             <div class="item active">
                <img src="/Newviesoft/Diseños/img/imag6.jpg" alt="TÉCNOLOGIA" title="TÉCNOLOGIA" style="width: ; height:;" >
             </div>

             <div class="item">
                <img src="/Newviesoft/Diseños/img/imag4.png" alt="SEDE COLOMBIA" title="SEDE COLOMBIA" style="width: 100%; height: 50%;"  >
             </div>

              <div class="item">
                <img  src="/Newviesoft/Diseños/img/imag2.jpg" alt="BIENVENIDOS" title="BIENVENIDOS" style="width: 100%; height: 50%;" >
             </div>
             <div class="item">
                <img  src="/Newviesoft/Diseños/img/imag8.jpg" alt="SENA" title="SENA" style="width: 100%; height: 50%;" >
             </div>
             <div class="item">
                <img  src="/Newviesoft/Diseños/img/imag9.jpg" alt="FUTURO" title="FUTURO" style="width:; height: ;" >
             </div>
        </div>

  <!-- CONTROLES DE IZQUIERDA A DERECHA -->

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>

        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked navbar-inverse" style="margin: 10px;">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> BIENVENIDO</a></li>
            <li><a href="Formacion.html"> Formación</a></li>
            <li><a href="Trimestre.html"> Trimestre</a></li>
            <li><a href="Jornada.html"> Jornada</a></li>
            <li><a href="Grupo.html"> Grupo</a></li>
            <li><a href="Ficha.html"> Ficha</a></li>
            <li><a href="Sede.html"> Sede</a></li> 
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-close"></span> Carpetas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="TiDocu.html">Documento</a></li>
                  <li class="divider"></li>  
                  <li><a href="CarUsu.html">Cargo</a></li>                      
                </ul>
            </li>
          </ul>
        </div>

    </div>
  </section>

<!--TÉRMINO DE PÁGINA-->

        <section style="margin-top: 20px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
          <div class="col-md-6">
            <article>
                  <ul>
                    <li><a href="">Ayuda</a></li>            
                    <li><a href="">Comentarios</a></li>
                    <li><a href="">Aviso de privacidad</a></li>
                    <li><a href="">Términos y condiciones</a></li>
                    <li><a href="">Politica de cookies</a></li>
                  </ul>
            </article>
          </div>
          <div class="col-md-6">
            <aside>
                  <ul>
                    <li><p>SIGUENOS EN:</p></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Correo</a></li>
                  </ul>
            </aside>
          </div>
        <footer style="text-align: right;">  
        </footer>
        </section>


 <!--BOOTSTRAP JQUERY-->
     <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>