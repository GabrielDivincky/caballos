<?php 



if (isset($_POST)) {
	

	require_once 'conexion.php';

	if (!isset($_SESSION)) {
		session_start();
}
	
	
	// Recoger los valores del formulario 

	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']) : false;
	$email = isset($_POST['correo']) ? mysqli_real_escape_string($conexion,$_POST['correo']) : false;
	$mensaje = isset($_POST['mensaje']) ? mysqli_real_escape_string($conexion,$_POST['mensaje']) : false;


	// Array de errores

	$errores = array();

	// Validar datos 

	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
		} else {
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";

	}


	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
		} else {
		$email_validado = false;
		$errores['correo'] = "El email no es válido";

	}

	if (!empty($mensaje)) {
		$nombre_validado = true;
	} else {
		$nombre_validado = false;
		$errores['mensaje'] = "El campo no es válido";

	}


	$guardar_usuario = false;

	if (count($errores) == 0) {
		$guardar_usuario = true;



		// INSERTAR USUARIO EN BASE DE DATOS

	$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$email', '$mensaje')";	

	$guardar = mysqli_query($conexion, $sql);

	// var_dump(mysqli_error($conexion)); CHEQUEO EL ERROR
	// die();

	if ($guardar) {
		$_SESSION['completado'] = "El registro se ha completado con exito";
	} else {
		$_SESSION['errores'] ['general'] = "Fallo al guardar el usuario";
	}
	


	} else {
		$_SESSION['errores'] = $errores;
		
	}
	
}

header('Location:index.php');

 ?>