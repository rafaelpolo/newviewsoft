<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

     <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviesoft/Diseños/bootstrap/css/bootstrap.min.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/novedad.css">

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
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post"> 
    <div class="col-md-12">
      <div class="col-md-4">
      </div>
   
      <div class="clase col-md-5">                               
          <div  class="titulo">
              Asignar Rol 
          </div>          
            <div class="formulario form-group" >
              <div class="radio" style="padding-bottom: 40px;">                   
                <div class="col-md-4 col-sm-4 col-xs-4">               
                        <input type="radio" name="tdocumento" id="cedulac" value="2" required="" >
                        <label for="cedulac"  >Cédula Ciudadanía</label>
                </div>                                         
                <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <input type="radio" name="tdocumento" id="tarjeta" value="1"  required="" >
                        <label for="tarjeta"  >Tarjeta Identidad</label>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                
                        <input type="radio" name="tdocumento" id="cedulae" value="3" required="">
                        <label for="cedulae">Cédula Extranjería</label>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="padding-bottom: 30px;">
                <div class="col-md-6 col-sm-6 col-xs-6">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento</label> 
                      <div class="input-group">
                      <span  class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" id="documento" name="documento" autocomplete="OFF"  placeholder="Documento"  class="form-control">
                      </div>
                  </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-6"> 
                  <div class="form-group ">
                   <label for="cargo"  class="sr-only">Cargo</label> 
                      <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>  
                      <select name="cargo" id="cargo" class="form-control">
                      <option value="0">Seleccione Cargo</option>
                      <option value="1">Administrador</option>
                      <option value="2">Apoyo Administrativo</option>
                      <option value="3">Instructor</option>
                      <option value="4">Invitado</option></select>
                      </div>                    
                  </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
              <input type="submit" name="enviar" id="enviar" value="Guardar"  class="btn btn-primary btn-block" >
            </div> 
      </div>
    </div>         
  </form>
      
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
            <h6><i>Autores: Rafael Polo Cucaita, Mónica Paola Murcia Bedoya, Daniel Fabian Castañeda, Danna Valeria Huertas</i></h6>
        </footer>
        </section>

 <!--BOOTSTRAP JQUERY-->
     <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

  
