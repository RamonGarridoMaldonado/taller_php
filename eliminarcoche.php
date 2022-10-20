<?php

include 'Modelo/Coche.php';
session_start();

if ($_GET) {
    $matricula = $_GET['matricula'];
    $index = 0;
    $listaDeCoches = $_SESSION["coches"];
    $nuevaLista = array();
    for ($i=0;$i<count($listaDeCoches);$i++) {
        if ($listaDeCoches[$i]->get_matricula() == $matricula) {
            $index = $i;
        }
    }

    $contador = 0;
    for ($i=0;$i<count($listaDeCoches);$i++) {
        if ($i!=$index) {
            array_push($nuevaLista,$listaDeCoches[$i]);
        }
    } 

    $_SESSION['coches'] = $nuevaLista;
    header("Location: listadocoches.php");
}

?>