<?php
include ("conexion.php");
?>
<!doctype html>
<head>
<title>Perfiles</title>
<title>Perfiles</title>
<link href="stylo2.css" rel="stylesheet" type="text/css">   
<meta charset="utf-8">
</head>
<body>
<h1>&nbsp;</h1>
<form name="form1" method="post" action="">
  <div align="center">Listado de Perfiles
    <table  border: 2px solid black >
      <tr>        
        <th><div align="left">Nombre</div></th>
        <th><div align="left">Descripción</div></th>
        <th><div align="left">Alta</div></th>
        <th><div align="left">Modificación</div></th>
        <th><div align="left">
          <p>Baja        </p>
        </div></th>
      </tr>
      <?php
$sql= "select * from profiles";
$resultado = mysqli_query($conexion,$sql);
while ($mostrar = mysqli_fetch_array ($resultado)){
?>
      <tr>       
        <td><?php echo $mostrar['nombre']?></td>
        <td><?php echo $mostrar['descripcion']?></td>
        <td><img src="box-arrow-down-right.svg">
        <td><img src="brush.svg">
      <td><img src="calendar2-x.svg"></tr>
      <?php
     }
?>
</table>
  </div>
</form>
</body>
</html>