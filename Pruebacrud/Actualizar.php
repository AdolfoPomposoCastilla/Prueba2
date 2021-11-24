<?php 
include("head.html");
require_once('crud_usuarios.php');
require_once('usuarios.php');
$crud=new crudUsuarios();
$usu= new usuarios();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$usu=$crud->obtenerUsua($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admiUsuarios.php" method='post'>
    <input type='hidden' name='id' value='<?php echo $usu->getId()?>'>
    <p>Nombre:<input type="text" name="nombre" value='<?php echo $usu->getNombre()?>'></p>
    <p>Apellidos:<input type="text" name="apellidos" value='<?php echo $usu->getApellidos()?>'></p>
    <p>Correo:<input type="text" name="correo" value='<?php echo $usu->getCorreo()?>'></p>
    <input type='submit' name='actualizar' value'actualizar' > 
    </form>
</body>
</html>


<?php 
include("foter.html");  
?>

