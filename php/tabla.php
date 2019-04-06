<?php

require "funciones.php";


$start_timer = microtime(true);

$records_per_page = 10  ;

$limit = 6;

$actual_page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;

$start = ($actual_page >1) ? ($actual_page * $records_per_page -  $records_per_page) : 0 ;

$conexion = conexion("seda_bs", "root", "AdmonMySql");

$end_timer = microtime(true);

$execute_time = ($end_timer - $start_timer);

echo "<p>El tiempo de ejecución de la conexión es de " . $execute_time . " segundos</p>";

if(!$conexion) {
    die();
    header("Location: ../error.html");
}

//$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS tablapartidaentradas.IdPartidaEntrada, tablaproductos.IdFamilia, tablaproductos.NumParte, tablaproductos.DescripcionProducto, tablaproductos.PrecioCliente  FROM (tablapartidaentradas LEFT JOIN tablaproductos ON tablapartidaentradas.IdProducto=tablaproductos.IdProducto) LEFT JOIN tablapartidasalidas ON tablapartidaentradas.IdPartidaEntrada=tablapartidasalidas.IdPartidaEntrada WHERE (((tablaproductos.IdFamilia)=46) AND ((tablapartidasalidas.IdPartidaEntrada) Is Null)) LIMIT $start, $records_per_page");
//$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tablapartidaentradas LIMIT $start, $records_per_page");
//$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM clientes13 LIMIT $start, $records_per_page");
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados LIMIT $start, $records_per_page");
$statement->execute();
$piezas = $statement->fetchAll();


$statement = $conexion->prepare("SELECT FOUND_ROWS() AS total_records");
$statement->execute();
$total_post = $statement->fetch()["total_records"];

$total_pages = $total_post / $records_per_page;
$total_pages = ceil($total_pages);

if (!$piezas) {
    header("Location: tabla.php");
}

$statement1 = $conexion->prepare("SELECT * FROM tablaunidadescopiadoras");
$statement1->execute();
$unidades = $statement1->fetchAll();

$statement2 = $conexion->prepare("SELECT IdModelo, Modelo FROM tablamodelos");
$statement2->execute();
$modelos = $statement2->fetchAll();

require "views/tabla.view.php";
?>