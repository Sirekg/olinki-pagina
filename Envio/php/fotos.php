<?php

require "funciones.php";

$conexion = conexion("seda_bs", "root", "AdmonMySql");

if (!$conexion) {
    die();
}

$id = isset($_GET["id"]) ? (int)$_GET["id"] : false;


if (!$id) {
    header("Location: index.php");
}

$statement = $conexion->prepare("SELECT * FROM tablapartidaentradas WHERE IdPartidaEntrada=:IdPartidaEntrada");
$statement -> execute(array("IdPartidaEntrada"=>$id));
$pieza = $statement-> fetch();


if (!$pieza) {
    header("Location: tabla.php");
}


require "views/fotos.view.php";


?>