<!DOCTRYPE html>
<html>
    <head>
	  <title> INVENTARIO </title>
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
      <body>



       <div>
        <ol class="breadcrumb">
           <li><a href="inicio.php">Inicio</a></li>
           <li><a href="crear.php">Crear formulario</a></li>
           <li><a href="editar.php">Editar</a></li>
           <li class="active"><span class="glyphicon glyphicon-folder-open">&nbsp;Ver</a></li>
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
 
                $sql="select * from inventario" or die(mysql_error());
                $consulta=mysql_query($sql,$conexion);


        echo'<div class="container">';
          echo'<div class="row-fluid">';
          echo' <div class="col-md-12">';
            echo'<table class="table table-bordered table-hover table-condensed">';
             echo' <tr class="active">';
                echo'<td><span class="glyphicon glyphicon-th"> ID</td>';
               echo'<td><span class="glyphicon glyphicon-shopping-cart"> Nombre del Producto</td>';
                echo '<td><span class="glyphicon glyphicon-tasks"> Cantidad</td>';
                echo ' <td><span class="glyphicon glyphicon-usd"> Precio </td> ';

             echo '</tr>';
             while($columnas=mysql_fetch_array($consulta))
             {


             echo '<tr class="success">';
             echo ' <td>'.$columnas['id'].'</td>';
             echo '  <td>'.$columnas['nombre_producto'].'</td>';
             echo '   <td>'.$columnas['cantidad'].'</td>';            
             echo '    <td><span class="glyphicon glyphicon-usd"></span>'.$columnas['precio'].'</td> ';
             echo '</tr>';
              }
             
            echo'</table> ';    
          echo' </div>';
        echo'</div>';
        echo'</div>';

        ?>

        </div>
        
     </body>
</html>