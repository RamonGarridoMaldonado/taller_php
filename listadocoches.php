<?php
    session_start();
    if (!isset($_SESSION) || !isset($_SESSION['coches'])) {
        $s = '<table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Matricula</b>".'</td>';
        $s .= '<td>'."<b>Marca</b>".'</td>';
        $s .= '<td>'."<b>Modelo</b>".'</td>';
        $s .= '<td>'."<b>Color</b>".'</td>';
        $s .= '<td>'."<b>Revisado</b>".'</td>';
        $s .= '<td colspan="3">'."<b></b>".'</td>';
        $s .= '</tr>';
        $_SESSION["coches"] = array();
    } else {
        $s = '<h1>Listado de coches</h1><table border="1">';
        $s .= '<tr>';
        $s .= '<td>'."<b>Matricula</b>".'</td>';
        $s .= '<td>'."<b>Marca</b>".'</td>';
        $s .= '<td>'."<b>Modelo</b>".'</td>';
        $s .= '<td>'."<b>Color</b>".'</td>';
        $s .= '<td>'."<b>Revisado</b>".'</td>';
        $s .= '<td colspan="3">'."<b></b>".'</td>';
        $s .= '</tr>';
        foreach (array_unique($_SESSION["coches"],SORT_REGULAR) as $coche ) {
            $s .= '<tr>';
            $matricula = "";
            $marca = "";
            $modelo = "";
            $color = "";
            $revisado = "";
            $contador = 0;
            foreach ( $coche as $valor ) {
                    if ($valor != "Coche") {
                        $s .= '<td>'.$valor.'</td>';
                        switch ($contador) {
                            case 0:
                                $matricula = $valor;
                                break;
                            case 1:
                                $marca = $valor;
                                break;
                            case 2:
                                $modelo = $valor;
                                break;
                            case 3: 
                                $color = $valor;
                                break;
                            case 4:
                                $revisado = $valor;
                                break;
                        }
                        $contador++;
                    }
            }
            $s .= '<td><button onclick="window.location.href=\'revisar.php?matricula='.$matricula.'&revisado='.$revisado.'\'">Revisar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'modificarcoche.php?matricula='.$matricula.'&marca='.$marca.'&modelo='.$modelo.'&color='.$color.'&revisado='.$revisado.'\'">Modificar</button></td>';
            $s .= '<td><button onclick="window.location.href=\'eliminarcoche.php?matricula='.$matricula.'\'">Eliminar</button></td>';
            $s .= '</tr>';
            $contador = 0;
        }   
    }
$s .= '</table>';
echo $s;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/>
    <button onclick="location.href='nuevocoche.php'">Nuevo vehiculo</button>
    <button onclick="location.href='eliminartodos.php'">Eliminar todos</button>
</body>
</html>