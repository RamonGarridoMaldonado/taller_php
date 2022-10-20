<?php

include 'Modelo/Coche.php';
session_start();

$nuevaLista = array();
$_SESSION['coches'] = $nuevaLista;
header("Location: listadocoches.php");

?>