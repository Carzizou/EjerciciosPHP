<?php
/**
 * Mi primer prgrama en php
 * Un pequeño programa en php
 * PHP version 5
 * @version 5
 * @author José Antonio Cano
 */
?>
<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>mi primer php</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">
<body>
  <?php
function prueba(){}
  ?>    
<h2>Manejando datos de formularios</h2>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="number" name="edad" /></p>
 <p><input type="submit" /></p>
</form> <?php
if(isset($_POST['nombre']) and isset($_POST['edad'])){
  echo'hola '. htmlspecialchars($_POST['nombre']).'<br>';
echo 'Usted tiene'.(int)$_POST['edad'].'años.';
}
?>
</div>
</body>
</html>
