<?php

require "funciones.php";

$query ="";

$records_per_page = 10  ;

$limit = 4;

$actual_page = isset($_GET["p"]) ? (int)$_GET["p"] : 1;

$start = ($actual_page >1) ? ($actual_page * $records_per_page -  $records_per_page) : 0 ;

$conexion = conexion("seda_bs", "root", "AdmonMySql");
if(!$conexion) {
    die();
}

if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (!empty($_GET["search"])) {
        $search = limpiarDatos($_GET["search"]);
        $query .= " (IdPartidaEntrada LIKE :search OR disponible LIKE :search OR NumParte LIKE :search OR DescripcionProducto LIKE :search)";
        $array = array(":search" => "%$search%");

        
    }  

    if ((!empty($_GET["modelo"]))) {
        $i = limpiarDatos($_GET["modelo"]);
        if (!empty($query)) {
            $query .= " AND IdModelo LIKE :modelo";
            $array= array(":search" => "%$search%", ":modelo" => "%$i%" );
        } else {
            $query .= " IdModelo LIKE :modelo";
            $array= array(":modelo" => "%$i%" );
        }
        
    }

    if (!empty($_GET["j"])) {
        $j = limpiarDatos($_GET["j"]);
        if (isset($search) && empty($i)) {
            $query .= " AND IdModulo LIKE :j";
            $array= array(":search" => "%$search%", ":j" => "%$j%");
        } 
        if (isset($i) && empty($search)) {
            $query .= " AND IdModulo LIKE :j";
            $array= array(":j" => "%$j%", ":modelo" => "%$i%");
        }
        if (isset($search) && isset($i)) {
            $query .= " AND IdModulo LIKE :j";
            $array= array(":search" => "%$search%", ":modelo" => "%$i%", ":j" => "%$j%" );
        } 
        if (empty($query)){
            $query .= " (IdModulo LIKE :j)";
            $array= array(":j" => "%$j%");
        }
    }

    if (empty($resultado)) {
            $title = "No se encontraron coincidencias";
        } else {
            $title = "Resultados de búsqueda: ";
        }   
}   

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM vistacomponentesusados WHERE $query LIMIT $start, $records_per_page");
$statement -> execute($array);
    
$resultados = $statement->fetchAll();
    

    if (empty($resultados)) {
        $title = "No se encontraron coincidencias";
    } else {
        $title = "Resultados de búsqueda: ";
    }



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