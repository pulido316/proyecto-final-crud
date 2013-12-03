<html>
<head>
	<title>INVENTARIO </title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" type="text/css" href="dist\css\bootstrap.css">
           <script type="text/javascript" src="dist\js\jquery.js"></script>
             <script type="text/javascript" src="dist\js\bootstrap.js"></script>
          <style type="text/css">
         /*para la resolucion de las pantallas de los distintos dispocotivos */
         /*pantallas grandes*/
           /* Small devices (tablets, 768px and up) */
             /* @media (min-width: 768px) { body{color: green} }

              /* Medium devices (desktops, 992px and up) */
            /*/ @media (min-width: 992px) {  body{color: blue}}

             /* Large devices (large desktops, 1200px and up) */
           /*/ @media (min-width: 1200px) {  body{color: gray}}*/
         </style>
</head>
<body>
   <div>
        <ol class="breadcrumb">
           <li><a href="inicio.php">Inicio</a></li>
           <li class="active"><span class="glyphicon glyphicon-book">&nbsp;Crear formulario</li>
           <li><a href="editar.php">Editar</a></li>
           <li><a href="ver.php">Ver</a></li>
           <li><a href="contacto.html">Contacto</a></li>
         </ol>
         </div>
         <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
           <img src="img\logo.png" alt="uno"class="img-rounded">
        </div>
      </nav>
      </div>
      <div class="container">
         <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
              <a class="navbar-brand"href="#">BIENVENIDO</a></li>
         </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav pull-right">
                <li class="active">
                     <a href="inicio.php">INICIO</a></li>
                <li ><a href="crear.php">CREAR FORMULARIO</a></li>
               <li ><a href="editar.php">EDITAR FORMULARIO</a></li>
               <li ><a href="ver.php"> VISUALIZACIÓN</a></li>
               <li ><a href="contacto.html"> CONTACTO</a></li>
             </ul>
           </div>
            </nav>
          </div>
	<?php 
	include("conexon.php"); 
	?>
	<?php  
	if(isset($_POST["nombre"])){

		$boton=$_POST["nombre"];
		if ($boton=="ENVIAR") {
		$id=$_POST["id"];
		$producto=$_POST["nombre_roducto"];
		$cantidad=$_POST["cantidad"];
		$precio=$_POST["precio"];
		$sql="insert into inventario values('$id','$producto','$cantidad','$precio')" or die(mysql_error());
		$consulta=mysql_query($sql,$conexion);
		}
	}
	?>
   <div class="container">
       <div class="well">
          <div class="row">
            <div class="col-md-6">
                     <form name="formulario" method="post" id="formulario" action="">
                <legend><span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>DATOS DEL INVENTARIO</legend>
                <label><span class="glyphicon glyphicon-barcode">&nbsp;</span>ID PRODUCTO</label>
                  <br>
                  <input type="text" name="id"> </input>
                  <br>
                   <label><span class="glyphicon glyphicon-glass">&nbsp;</span>NOMBRE DEL PRODUCTO</label>
                   <br>
                   <input type="text" name="nombre_roducto"> </input>
                  <br>
               
                  <label><span class="glyphicon glyphicon-th">&nbsp;</span>CANTIDAD</label>
                  <br>
                  <input type="text"  name="cantidad"> </input><span>&nbsp; <b>UND</b></span>
                  <br>
                  <div class="input-append">
                   <label>PRECIO</label>
                   <br>
                   <input type="text" name="precio"> </input><span class="glyphicon glyphicon-usd">&nbsp;</span>
                    </div>
                  <br>
       		      <input type="submit" name="nombre" value="ENVIAR" type="button" class="btn btn-primary  btn-success">         
               </form>
               <img src="img\imgedi.jpg" alt="uno" class="img-thumbnail">
            </div>
            <h1><span class="label label-success">REGISTRO EN EL SISTEMA !</span></h1>
                <p>Ahora, diligencie la información solicitada en el registro correspondiente a su negocio. 
                   Todos los campos son de información obligatoria. A continuación se 
                   indica como registrar la información. 
                </p>
            
            <h3><span class="glyphicon glyphicon-star"></span><span class="label label-success">Ejemplo</span></h3>
                <p><ul>
                  <li> La identificacion del producto es el número de serie del mismo  </li>
                  <li> Nombre del producto </li>
                  <li> Cantidad por unidad de producto</li>
                  <li> Precio por unidad de producto </li>
                </ul>
                  <img src="img\ejemplos.png" alt="uno" class="img-thumbnail">
                </p>
            </div>
        </div>                
     </div> 
</body>
</html>

