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

    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar navbar-inverse">
          <div>
           <a href="menuAdministrador.html" ><img src="img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="width: 40%;"></a>
          </div>

          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:12%; left:1110px; top:0px;"></a>
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
        <a class="navbar-brand" href="#">MENÚ</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="menuAdministrador.html"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          <li><a href="ForAprendiz.html"><span class="glyphicon glyphicon-pencil"></span> Crear Aprendices</a></li> 
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
                    <li><a href="ARol.html"><span class="glyphicon glyphicon-book"></span> Asignar Rol</a></li>
                    <li><a href="perfil.html"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-question-sign "></span> Ayuda</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
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

  <form action=""  method="">   
    <div class="col-md-12">
      <div class="col-md-3 nov">
            <div class="col-md-12" >
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                 
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaIniD" class="sr-only" >Fecha Inicial Deserción</label> 
                      <div class="">
                      <input type="date" id="FechaIniD" name="FechaIniD" autocomplete="OFF" required="" placeholder="Fecha Inicial Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="FechaFinaD" class="sr-only" >Fecha Final Deserción</label> 
                      <div class="">
                      <input type="date" id="FechaFinaD" name="FechaFinaD" autocomplete="OFF" required="" placeholder="Fecha Final Deserción"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="TiempoDeser" class="sr-only" >Tiempo Deserción</label> 
                      <div class="">
                      <input type="time" id="TiempoDeser" name="TiempoDeser" autocomplete="OFF" required="" placeholder="Tiempo Deserción"  class="form-control">
                      </div>
                  </div>
              </div>  
            </div> 
      </div>
   
      <div class="col-md-6 clase">                             
          <div  class="titulo">
              Reintegro
          </div>          
            <div class="formulario form-group" >
              <div class="radio" style="padding-bottom: 30px;">                   
                <div class="col-md-4 col-sm-4 col-xs-4">               
                        <input type="radio" name="tdocumento" id="cedulac" value="C.C" required="" >
                        <label for="cedulac"  >Cédula Ciudadanía</label>
                </div>                                         
                <div class="col-md-4 col-sm-4 col-xs-4"> 
                        <input type="radio" name="tdocumento" id="tarjeta" value="T.I"  required="" >
                        <label for="tarjeta"  >Tarjeta Identidad</label>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">                
                        <input type="radio" name="tdocumento" id="cedulae" value="C.E" required="">
                        <label for="cedulae">Cédula Extranjería</label>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="documento" class="sr-only" >Documento Aprendiz</label> 
                      <div class="">
                      <input type="text" id="documento" name="documento" autocomplete="OFF" required="" placeholder="Documento"  class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">  
                  <div class="form-group">
                    <label  for="DesRein" class="sr-only" >Descripción</label> 
                      <div class="">
                      <textarea type="text" id="DesRein" name="DesRein" autocomplete="OFF" required="" placeholder="Descripción"  class="form-control" cols="10" rows="5"></textarea>
                      </div>
                  </div>
              </div>    
              <div class="aprobaciones form-group">
                <div class="radio">                   
                  <div class="col-md-4 col-sm-4 col-xs-4">               
                          <input type="radio" name="aprobaciones" id="aprobado" value="A" required="" >
                          <label for="aprobado" class="form-control" >Aprobado</label>
                  </div>                                         
                  <div class="col-md-4 col-sm-4 col-xs-4"> 
                          <input type="radio" name="aprobaciones" id="naprobado" value="N.A"  required="" >
                          <label for="naprobado" class="form-control">No aprobado</label>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">                
                          <input type="radio" name="aprobaciones" id="espera" value="E" required="">
                          <label for="espera" class="form-control">Espera</label>
                  </div>
                </div>
              </div>   
            </div>
           <div class="col-md-4 col-md-offset-4" style=" padding-top: 15px; padding-bottom: 25px;"> 
              <input type="submit" name="" id="" value="Guardar"  class="btn btn-primary btn-block" >
            </div>
      </div>         
      <div class="col-md-3" >
      </div> 
    </div>
  </form>

<!--TÉRMINO DE PÁGINA-->

        <section style=" margin-top: 20px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
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
     <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

            
 
  <form action=""  method="">  
    <div class="col-md-12">
      <div class="col-md-3"> 
      </div>

         
   

             

</form>

 <!--BOOTSTRAP JQUERY-->
     <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="/Newviesoft/Diseños/bootstrap/js/bootstrap.min.js"></script>

< /body></html>