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
           <li class="active"><span class="glyphicon glyphicon-cog">&nbsp;Editar</a></li>
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
          <div class="container">
             <div class="roll">
              <div class="col-md-6">
                 <form  method="POST">
                   <legend>Consulte el Producto</legend>
                    <label>Buscar</label>
                    <br>
                    <input class="text" name="busqueda"> </input>
                    <br>
                    <input type="submit" name="boton" value="buscar" type="button" class="btn btn-primary  btn-success">
                    <br>
                    <br>
                    <input type="submit" name="botonActualizar" value="ACTUALIZAR" type="button" class="btn btn-warning">
                    <input type="submit" name="botonEliminar" value="ELIMINAR" type="button" class="btn btn-danger">
                  </form>
             </div>
             <div class="well">
              <h1><span class="glyphicon glyphicon-star">&nbsp;INFORMACIÓN: </h1>
             <p>En esta sección podrá buscar un producto en específico, que usted como usuario agrego a la base de datos. Además podrá hacerle las modificaciones que usted crea pertinentes o como tal podrá gestionar la eliminación de cualquier producto </p>
             </div>
            </div>
          </div>
            <?php 
           include("conexon.php"); 
          ?>
          <?php  
           if(isset($_POST["boton"])){
             $boton=$_POST["boton"];
             $caja=$_POST["busqueda"];
             if ($boton=="buscar") {
              $consulata="SELECT * FROM inventario WHERE nombre_producto= '".$caja."'";
              $fila=mysql_query($consulata);
           
             while($columnas=mysql_fetch_array($fila))
             {
              echo '<div class="container">';
              echo '<div class="well">';
              echo '<form method="post" >';
              echo '<legend>EXISTE PRODUCTO ¡¡¡</legend>';
              echo '<label>Codigo:<p></label>';
              echo ' <input name ="ID" value="'.$columnas['id'].'"><br>';
              echo '<label>Nombre:<p></label>';
              echo ' <input name ="NOMBRE_PRODUCTO" value="'.$columnas['nombre_producto'].'"><br>';
              echo '<label>Cantidad:<p></label>';
              echo ' <input name="CANTIDAD" value="'.$columnas['cantidad'].'"><br>'; 
              echo '<label>Precio:<p></label>';   
              echo ' <input name="PRECIO" value="'.$columnas['precio'].'"><br>';   
              
              echo '</form>';
              echo '</div>';  
              echo '</div>';   
              }
             }  
           }
           ?>

           <?php 
           if(isset($_POST["botonActualizar"])){
             $boton=$_POST["botonActualizar"];
                   if($boton=="ACTUALIZAR"){
              echo "<script> alert('Se actualizo correctamente');</script>"; 
                   $id=$_POST["id"];
                   $producto=$_POST["nombre_roducto"];
                   $cantidad=$_POST["cantidad"];
                   $precio=$_POST["precio"];
                   $sql="update inventario set id='$id',nombre_producto='$producto',cantidad=''$cantidad',precio='$precio' where id='$id'";
                    
                    $cs=mysql_query($sql,$cn);
                    echo "<script> alert('Se actualizo correctamente');</script>";
                           } 
                         }
            ?>
         </body>
</html>