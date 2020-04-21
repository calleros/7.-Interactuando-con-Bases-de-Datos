<?php

  	require_once('conector.php');

  	$datos = array(
      'nombre' => 'Marco Antonio Calleros',
      'email' => 'marco.calleros@gmail.com',
      'clave' => password_hash("123456", PASSWORD_DEFAULT),
      'nacimiento' => '1980-02-14');

    $con = new ConectorBD('localhost','c0examen','C@113r0$');
  	$respuesta = $con->iniciarConexion('c0examen');

  	if ($respuesta == 'OK') {
    	if($con->insertarRegistro('usuarios', $datos)){
      		$respuesta = "exito en la inserción";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>
