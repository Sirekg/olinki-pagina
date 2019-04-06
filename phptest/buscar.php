<?php

require "funciones.php";

$search = "";
$modelo = "";
$j = "";

$records_per_page = 10  ;

$limit = 4;

$actual_page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;

$start = ($actual_page >1) ? ($actual_page * $records_per_page -  $records_per_page) : 0 ;

$conexion = conexion("seda_bs", "root", "AdmonMySql");
if(!$conexion) {
    die();
}

// if ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET["search"])) {
//     $search = limpiarDatos($_GET["search"]);
//     // $clauses .= " (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search)";
// }  

// if ($_SERVER["REQUEST_METHOD"]=="GET" && (!empty($_GET["modelo"]))) {
//     $modelo = limpiarDatos($_GET["modelo"]);
//     //  if (!empty($clauses)) {
//     //      $clauses .= " (AND IdModelo LIKE :modelo)";
//     //  } else {
//     //      $clauses .= " (IdModelo LIKE :modelo)";
//     //  }
//     //  $array[":modelo"]="$modelo";
// }

// if ($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET["j"])) {
//     $j = limpiarDatos($_GET["j"]);
    // if (!empty($clauses)) {
    //     $clauses .= " AND IdModulo LIKE :j";
    // } else {
    //     $clauses .= " (IdModulo LIKE :j)";
    // }
    // $array[":j"]="$j";
// }   

    // $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tablapartidaentradas WHERE IdPartidaEntrada LIKE :search OR NoFactura LIKE :search OR TipoDeCambio LIKE :search OR Fecha LIKE :search OR FechaIngreso LIKE :search LIMIT $start, $records_per_page");

    
   
    if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["search"]) && isset($_GET["modelo"]) && isset($_GET["j"])) {
        $search = limpiarDatos($_GET["search"]);
        $modelo = limpiarDatos($_GET["modelo"]);
        $j = limpiarDatos($_GET["j"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search) AND IdModelo LIKE :modelo AND IdModulo LIKE :j LIMIT $start, $records_per_page");
        $statement->execute(array(":search" => "%$search%",":modelo" => "%$modelo%", ":j" => "%$j%"));
        echo "set s set m set j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && isset($_GET["modelo"]) && isset($_GET["j"])) {
        $modelo = limpiarDatos($_GET["modelo"]);
        $j = limpiarDatos($_GET["j"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE IdModelo LIKE :modelo AND IdModulo LIKE :j LIMIT $start, $records_per_page");
        $statement->execute(array(":modelo" => "%$modelo%", ":j" => "%$j%"));
        echo "empt s set m set j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["modelo"]) && isset($_GET["search"]) && isset($_GET["j"])) {
        $search = limpiarDatos($_GET["search"]);
        $j = limpiarDatos($_GET["j"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search) AND IdModulo LIKE :j LIMIT $start, $records_per_page");
        $statement->execute(array(":search" => "%$search%", ":j" => "%$j%"));
        echo "set s empt m set j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["j"]) && isset($_GET["modelo"]) && isset($_GET["search"])) {
        $search = limpiarDatos($_GET["search"]);
        $modelo = limpiarDatos($_GET["modelo"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search) AND IdModelo LIKE :modelo LIMIT $start, $records_per_page");
        $statement->execute(array(":search" => "%$search%", ":modelo" => "%$modelo%"));
        echo "set s set m empt j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && empty($_GET["modelo"])) {
        $j = limpiarDatos($_GET["j"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE IdModulo LIKE :j LIMIT $start, $records_per_page");
        $statement->execute(array( ":j" => "%$j%"));
        echo "empt s empt m set j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["search"]) && empty($_GET["j"])) {
        $modelo = limpiarDatos($_GET["modelo"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE IdModelo LIKE :modelo LIMIT $start, $records_per_page");
        $statement->execute(array( ":modelo" => "%$modelo%"));
        echo "empt s set m empt j";

    } elseif ($_SERVER["REQUEST_METHOD"]=="GET" && empty($_GET["j"]) && empty($_GET["modelo"])) {
        $search = limpiarDatos($_GET["search"]);
        $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search) LIMIT $start, $records_per_page");
        $statement->execute(array( ":search" => "%$search%"));
        echo "set s empt m empt j";

    } 

    $resultados = $statement->fetchAll();

    // if (empty($resultados)) {
    //     $title = "No se encontraron coincidencias con: " . $search;
    // } else {
    //     $title = "Resultados de búsqueda: " . $search;
    // }



$statement = $conexion->prepare("SELECT FOUND_ROWS() AS total_records");
$statement->execute();
$total_post = $statement->fetch()["total_records"];

$total_pages = $total_post / $records_per_page;
$total_pages = ceil($total_pages);

$statement1 = $conexion->prepare("SELECT * FROM tablaunidadescopiadoras");
$statement1->execute();
$unidades = $statement1->fetchAll();

$statement2 = $conexion->prepare("SELECT IdModelo, Modelo FROM tablamodelos");
$statement2->execute();
$modelos = $statement2->fetchAll();


require "views/buscar.view.php";


?>