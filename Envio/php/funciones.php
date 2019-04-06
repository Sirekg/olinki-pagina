<?php

function conexion($tabla, $usuario, $pass)
{
    try {
		$conexion = new PDO("mysql:host=olinki1.dyndns.info; port=3306; dbname=$tabla; charset=UTF8", $usuario, $pass);
		echo "conetado a olinki.dyndns";
		return $conexion;
    } catch (PDOException $e) {
	}
    try {
        $conexion = new PDO("mysql:host=olinki.dyndns.info; port=3306; dbname=$tabla", $usuario, $pass);
		echo "conectado a olinki1.dyndns";
		return $conexion;
    } catch (PDOException $e) {
    }
}

function limpiarDatos($datos){
	// Eliminamos los espacios en blanco al inicio y final de la cadena
	$datos = trim($datos);

	// Quitamos las barras / escapandolas con comillas
	$datos = stripslashes($datos);

	// Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
	$datos = htmlspecialchars($datos);
	return $datos;
}

?>