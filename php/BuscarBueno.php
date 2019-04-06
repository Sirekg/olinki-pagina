<?php

require "funciones.php";

$records_per_page = 10  ;

$limit = 4;

$actual_page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;

$start = ($actual_page >1) ? ($actual_page * $records_per_page -  $records_per_page) : 0 ;

$conexion = conexion("seda_bs", "root", "AdmonMySql");
if(!$conexion) {
    die();
}

if ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET["search"])) {
    $search = limpiarDatos($_GET["search"]);


    // $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tablapartidaentradas WHERE IdPartidaEntrada LIKE :search OR NoFactura LIKE :search OR TipoDeCambio LIKE :search OR Fecha LIKE :search OR FechaIngreso LIKE :search LIMIT $start, $records_per_page");
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search LIMIT $start, $records_per_page");


    $statement -> execute(array(":search" => "%$search%"));


    $resultados = $statement->fetchAll();
    print_r($resultados);

    if (empty($resultados)) {
        $title = "No se encontraron coincidencias con: " . $search;
    } else {
        $title = "Resultados de búsqueda: " . $search;
    }
}
// } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET["search"]) && !empty($_GET["i"]) && empty($_GET["j"])) {
//     # code...
// } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET["search"]) && !empty($_GET["i"]) && !empty($_GET["j"])) {
//     # code...
// } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && empty($_GET["i"]) && !empty($_GET["j"])) {
//     # code...
// } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && !empty($_GET["i"]) && empty($_GET["j"])) {
//     # code...
// } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && empty($_GET["i"]) && !empty($_GET["j"])) {
//     # code...
// }



$statement = $conexion->prepare("SELECT FOUND_ROWS() AS total_records");
$statement->execute();
$total_post = $statement->fetch()["total_records"];

$total_pages = $total_post / $records_per_page;
$total_pages = ceil($total_pages);


require "views/buscar.view.php";

?>