<?php
include 'Modelo/Coche.php';
session_start();

if ($_GET) {
    $matricula = $_GET['matricula'];
    $revisado = $_GET['revisado'];


    $agregarCoche = new Coche();
    $agregarCoche -> set_matricula($matricula);
    $agregarCoche -> set_marca($marca);
    $agregarCoche -> set_modelo($modelo);
    $agregarCoche -> set_color($color);
    $agregarCoche -> set_revisado($revisado);
    $listaDeCoches = $_SESSION["coches"];

    for ($i=0;$i<count($listaDeCoches);$i++) {
        if ($listaDeCoches[$i]->get_matricula() == $matricula) {
            if ($revisado=="N") {
                $listaDeCoches[$i]->set_revisado("S");
            } else {
                $listaDeCoches[$i]->set_revisado("N");
            }
        }
    }
    $_SESSION['coches'] = $listaDeCoches;
    header("Location: listadocoches.php");
}
?>