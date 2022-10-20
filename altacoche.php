<?php
include 'Modelo/Coche.php';
session_start();

if ($_GET) {
    $matricula = $_GET['matricula'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $color = $_GET['color'];
    $revisado = $_GET['revisado'];

    $agregarCoche = new Coche();
    $agregarCoche -> set_matricula($matricula);
    $agregarCoche -> set_marca($marca);
    $agregarCoche -> set_modelo($modelo);
    $agregarCoche -> set_color($color);
    $agregarCoche -> set_revisado($revisado);

    array_push($_SESSION["coches"] ,$agregarCoche);
    header("Location: listadocoches.php");
}
?>