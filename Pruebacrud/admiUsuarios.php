<?php
require_once('usuarios.php');
require_once('crud_usuarios.php');
$crud= new  crudUsuarios();
$usu= new usuarios();
if (isset($_POST['insertar'])) {
		$usu->setNombre($_POST['nombre']);
		$usu->setApellidos($_POST['apellidos']);
        $usu->setCorreo($_POST['correo']);
		$crud->insertar($usu);
		header('Location: index.php');
    } else if(isset($_POST['actualizar'])){
        $usu->setId($_POST['id']);
		$usu->setNombre($_POST['nombre']);
		$usu->setApellidos($_POST['apellidos']);
        $usu->setCorreo($_POST['correo']);
		$crud->actualizar($usu);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}else if ($_GET['accion']=='e') {
        header('Location: index.php');	
		$crud->eliminar($_GET['id']);
			
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}else if($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
    ?>