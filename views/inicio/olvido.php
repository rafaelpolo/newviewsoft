<!DOCTYPE html>

<html lang="es">

  <head>

      <meta charset="utf-8">
      <meta name="viewpor" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minunum-scale=1.0">

      <!--BOOTSTRAP HOJAS DE ESTILO-->
      <link rel="stylesheet" href="/Newviesoft/Diseños/bootstrap/css/bootstrap.min.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/logeo.css">

      <!--CONEXIÓN HOJAS DE ESTILO-->
      <link rel="stylesheet" type="text/css" href="/Newviesoft/Diseños/css/formato.css">

      <title>NewViewSoft</title>

    </head>

  <body background="/Newviesoft/Diseños/img/imag7.jpg">

  <header>

    <!--INICIO IMAGENES LOGO Y SENA-->      
    <nav class="navbar" style="padding-top: 60px;">
        <div>
           <a href="/index.html" ><img src="/Newviesoft/Diseños/img/logo.png" alt="NewViewSoft" title="NewViewSoft" style="width: 40%;"></a>
          </div>

          <div>
           <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/Newviesoft/Diseños/img/intro.png" alt="NewViewSoft" title="NewViewSoft" style="position:absolute; width:12%; left:1110px; top:60px;"></a>
          </div>
        </div>
   </nav>
        

  <!--MENU PRINCIPAL--> 

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
            <li ><a href="/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li><a href="olvido_codigo"><span class="glyphicon glyphicon glyphicon-lock"></span> ¿Olvido Su código?</a></li>
            <li><a href="registro"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
 
</header>
 <!--INICIO CONTENIDO-->

  <section> 

    <div class="col-md-12">
      <div class="col-md-4">
      </div>

     <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>"  method="post">   
          <div class="col-md-4 clase">                             
              <div  class="titulo">
                  ¿Olvido su Código? 
              </div>          
                <div class="formulario form-group" >
                  <div class="radio" style="padding-bottom: 50px;">                   
                    <div class="col-md-4 col-sm-4 col-xs-4">               
                            <input type="radio" name="tdocumento" id="cedulac" value="1" required="" >
                            <label for="cedulac"  >Cédula Ciudadanía</label>
                    </div>                                         
                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                            <input type="radio" name="tdocumento" id="tarjeta" value="2"  required="" >
                            <label for="tarjeta"  >Tarjeta Identidad</label>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">                
                            <input type="radio" name="tdocumento" id="cedulae" value="3" required="">
                            <label for="cedulae">Cédula Extranjería</label>
                    </div>
                  </div>
                </div>
                  <div class="col-md-12">
                    <div class="col-md-6 col-sm-6 col-xs-6">  
                        <div class="form-group">
                          <label  for="docuUsu" class="sr-only" >Documento</label> 
                            <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" id="docuUsu" name="docuUsu" autocomplete="OFF"  onkeypress="return numeros(event)"  minlength="8" maxlength="15" placeholder="Documento"  class="form-control">
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-sm-6 col-xs-6">  
                        <div class="form-group">
                            <label  for="correo" class="sr-only" >Correo</label> 
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" id="correo" name="correo" autocomplete="OFF"  placeholder="example@correo"  class="form-control" maxlength="30">
                            </div>
                        </div>
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                      <div class="form-group ">
                       <label for="cargo"  class="sr-only">Cargo</label> 
                          <div class="input-group">
                          
                          </div>                    
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-md-offset-4" style="padding-bottom: 25px;"> 
                    <input type="submit" name="enviar" id="" value="Enviar"  class="btn btn-primary btn-block" >
                  </div>  
          </div>         
        </form>
 
        <div class="col-md-4"> 
        </div>
    </div>
  </section>

          <!-- IMAGENES -->

      <div class="col-md-12 container">
        <div class="col-md-12">
             
        </div>
      </div>
    
<!--TÉRMINO DE PÁGINA-->



        <section style="margin-top: 40px; padding-top: 20px; background-color: rgba(0, 0, 0, .9); color: #fff;" class="col-md-12">
          <div class="col-md-6">
            <article>
                  <ul>
                    <li><a href="">Ayuda</a></li>            
                    <li><a href="">Comentarios</a></li>
                    <li><a href="">Desarrolladores</a></li>
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
                    <li><a href="https://www.facebook.com/Newviewsoft-157249831764187/">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Correo</a></li>
                  </ul>
            </aside>
          </div>
        
        </section>

        <!--Script-->

        <script>

                function numeros(e){
                    key = e.keyCode || e.which;
                    tecla = String.fromCharCode(key).toLowerCase();
                    letras = " 0123456789";
                    especiales = [8,37,39,46];  
                 
                    tecla_especial = false
                    for(var i in especiales){
                 if(key == especiales[i]){
                     tecla_especial = true;
                     break;
                        } 
                    }
                 
                    if(letras.indexOf(tecla)==-1 && !tecla_especial)
                        return false;
                }    

         </script>


 <!--BOOTSTRAP JQUERY-->
     <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>
</html>
        