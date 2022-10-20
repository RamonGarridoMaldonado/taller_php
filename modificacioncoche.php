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
    $listaDeCoches = $_SESSION["coches"];

    for ($i=0;$i<count($listaDeCoches);$i++) {
        if ($listaDeCoches[$i]->get_matricula() == $matricula) {
            $listaDeCoches[$i]->set_marca($marca);
            $listaDeCoches[$i]->set_modelo($modelo);
            $listaDeCoches[$i]->set_color($color);
            $listaDeCoches[$i]->set_revisado($revisado);
        }
    }
    $_SESSION['coches'] = $listaDeCoches;
    header("Location: listadocoches.php");
}
?>