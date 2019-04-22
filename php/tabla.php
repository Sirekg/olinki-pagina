<?php

require "funciones.php";

$records_per_page = 10  ;

$limit = 5;

$actual_page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;

$start = ($actual_page >1) ? ($actual_page * $records_per_page -  $records_per_page) : 0 ;

$conexion = conexion("seda_bs", "root", "AdmonMySql");


if(!$conexion) {
    die();
    header("Location: http://www.olinki.com.mx");
}

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