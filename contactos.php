<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEliNix</title>
    <!-- Bootstrap --> 
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/stilo.css" rel="stylesheet" type="text/css">
    <link href="js/mai.js" rel="stylesheet"> 
</head>
<body>
<? 
//Declaración de Variables y asignando valores
$Nombre_Completo=$_POST['Nombre_Completo'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Asunto=$_POST['Asunto'];
$Mensaje=$_POST['Mensaje'];
    
//Conexión con la base
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = contactos($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
    
//selección de la base de datos con la que vamos a trabajar 
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $Nombre = filtrado($_POST["Nombre_Completo"]);
    $Telefono = filtrado($_POST["Telefono"]);
    $Correo = filtrado($_POST["Correo"]);
    $asunto = filtrado($_POST["Asunto"]);
	$Mensaje = filtrado($_POST["Mensaje"]);
   
} 

// para mostrar datos
<?php if(isset($_POST["submit"])): ?>
	<h2>Mostrar datos enviados</h2>
	Nombre : <?php isset($nombre) ? print $nombre : ""; ?> <br>
	Telefono : <?php isset($Telefono) ? print $Telefono : ""; ?> <br>
	Correo : <?php isset($Correo) ? print $Correo : ""; ?> <br>
	Asunto : <?php isset($Asunto) ? print $Asunto : "";?> <br>
	Mensaje : <?php isset($Mensaje) ? print $Mensajeq : ""; ?> <br>
	
	<?php endif; ?>

	// subida de archivo

	<h2>Formulario subida de archivos</h2>
<html>
<body>
<form action="<?php echo contactos($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
    <input type="file" name="imagen" />
    <input type="submit" name="submit" />
</form>
</body>
</html>

    
//Ejecucion de la sentencia SQL
mysql_query("insert into contactos (Nombre_Completo, Telefono,Correo,Asunto,Mensaje) values ('$Nombre_Completo','$Telefono','$Correo','$Asunto','$Mensaje')",$con);
?>  
<!-- INICIO DEL MENU DE NAVEGACIÓN -->
<nav class="navbar navbar-default menu-fixed">
	       <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
	               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">PeliNix</a>
			     </div>
                 <!-- Collect the nav links, forms, and other content for toggling -->
	             <div class="collapse navbar-collapse" id="defaultNavbar1">
			         <ul class="nav navbar-nav navbar-right">
	                   <li class="active"><a href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
	                   <li><a href="Peliculas.html">Peliculas</a></li>
			           <li><a href="series.html">series</a></li>  
	                   <li><a href="Animes.html">Animes</a></li> 
			           <li><a href="Cuenta.html">Cuenta</a></li>    
					   <li><a href="Contactanos.html">Contactanos</a></li> 
			         </ul>
                </div>
            </div>
        </nav>
<!-- FIN DEL MENÚ DE NAVEGACIÓN -->	

<!--INICIO DEL SLIDER DEL BANNER-->	
<div id="carousel1" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
	
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	  <img src="img/likiacion-bnr-b-side.png" alt="First slide image" width="100%"  class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
	  
    <div class="item">
	  <img src="img/likiacion-bnr-b.jpg" alt="Second slide image" width="100%"  class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
	  
    <div class="item">
	  <img src="img/new-picanto__hero1.jpg" alt="Third slide image" width="100%"  class="center-block">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
	  
  </div>
	
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
  </a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span></a>
</div>
<!--FIN DEL SLIDER DEL BANNER-->
<!--INICIO DEL CONTENIDO DE LA PAGINA-->
<section class="container">
  <div class="row">
		<div class="col-md-12 col-md-offset-0 text-left">
		<h1 class="con_tit">
			<p>Registro de Contactos</p>
		</h1>
	
 	  </div>	
	</div>  
</section>

<!-- Registro de Contactos -->
<div id="contact" class="section">
<!-- container -->
	<div class="container">
		<div class="section-header text-left">
			<p align="left">SU MENSAJE HA SIDO ENVIADO</p>
		</div>
	</div>
</div>

<section class="container">
	<div class="row" >
		<div class="col-md-4" col-md-offset-0 align="left">
			<form role="form" action="contactenos.html">
  											
    				<button type="submit" class="btn btn-default btn btn-danger btn btn-block">Regresar</button>
				
			</form>
		</div>
	</div>  
	
</section>
<!-- /Fin de Sesión -->	  
<!-- FIN DEL CONTENIDO DE LA PAGINA-->
<!-- INICIO PIE DE PÁGINA -->
<footer>
	       <!--Seccion 01-->
	       <section class="pie01">
	           <div class="container">
		          <div class="row" text align="left"> <!--Inicio de la 1ra Fila-->
			         <!--Mapa del Sitio-->
			         <div class="col-md-6">
				        <h4>Mapa del Sitio</h4>
				        <dl>
					       <dl>
						      <dt><a href="index.html">Inicio</a></dt>
						      <dt><a href="Peliculas.html">Peliculas</a></dt>
						      <dt><a href="series.html">series</a></dt>
						      <dt><a href="Animes.html">Animes</a></dt>
						      <dt><a href="Cuenta.html">Cuenta</a></dt>
							  <dt><a href="Contactenos.html">Contactenos</a></dt>
					       </dl>
				        </dl>
			         </div>
			         <!--Datos de Contactos-->
			         <div class="col-md-6">
				        <h4>Datos de Contácto</h4>
				        <address>
				            Dirección: Masaya<br> 
				            <abbr title="phone">Teléfono:</abbr>(505)7754-1140<br> 
				            E-mail:<a href="mailto:info@kia.com.ni">peinix@gmail.com</a><br> 
				            Horario de atención: 8:00am-5:00pma<br> 
                            Facebook ׀ Twitter 
				        </address>
			         </div>
		          </div><!--Cierre de la Fila-->
		      </div>
	       </section>
	
	       <!--Seccion 02-->
	       <section class="pie02">
	           <div class="container">
			     &copy; copyright 2020 PeliNix-Nicargua - Desarrollado por: Ing. Marlon Daniel Garcia Marenco
		       </div>
	       </section>
</footer>
<!-- FIN PIE DE PÁGINA -->

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/bootstrap.js"></script>    

</body>
</html>