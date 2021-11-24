<?php 
include("head.html");
require_once('crud_usuarios.php');
require_once('usuarios.php');
$crud=new crudUsuarios();
$usu= new usuarios();
$listar=$crud->listarUsu();
?>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="stylos/stilos.css">
</head>
<body>
	<table >
		<head>
			<th>Nombre</td>
			<th>Apellidos</td>
			<th>Correo</td>
			<th>Actualizar</td>
			<th>Eliminar</td>
		</head>
		<body>
            
			<?php foreach ($listar as $usu) {?>
			<tr>
				<td><?php echo $usu->getNombre() ?></td>
				<td><?php echo $usu->getApellidos() ?></td>
				<td><?php echo $usu ->getCorreo()?> </td>
                <td><a href="Actualizar.php?id=<?php echo $usu->getId()?>&accion=a">Actualizar</a>   </td>
				<td><a href="admiUsuarios.php?id=<?php echo $usu->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="registro.php">Registrar</a>
</body>
</html>


<?php 
include("foter.html");  
?>