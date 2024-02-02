<?php
// Las siguientes líneas incluyen los archivos que contienen los datos de cada continente.
include_once "./Continentes/America.php";
include_once "./Continentes/Europa.php";
include_once "./Continentes/Africa.php";
include_once "./Continentes/Asia.php";
include_once "./Continentes/Oceania.php";

// Estos arrays almacenan los títulos de los continentes y sus datos correspondientes.
$titulo = ["AMERICA", "EUROPA", "AFRICA", "ASIA", "OCEANIA"];
$Cubos = [$America, $Europa, $Africa, $Asia, $Oceania];

$html = '';

// Esta función genera una tabla HTML para cada continente.
function ImprimirPaises($Pais, $titulo) {
    global $html;

    // El título del continente se añade a la cadena HTML.
    $html = '<h1>' . $titulo . '</h1>';

    // Para cada 'cara' del 'cubo' (continente), se crea una tabla.
    foreach ($Pais as $cara => $info) {
        // Se determina el número máximo de filas.
        $maxRows = 0;
        foreach ($info as $prov => $arreglo) {
            $tam = count($arreglo);
            $maxRows = max($maxRows, $tam);
        }

        // Se construye la tabla HTML.
        $html .= '<table border=1>';
        $html .= '<tr><th colspan="' . count($info) . '" bgcolor="#EC7063">' . $cara . '</th></tr>';
        $html .= '<tr>';

        // Se añaden las celdas de encabezado.
        foreach ($info as $prov => $arreglo) {
            $html .= "<th> $prov </th>";
        }

        $html .= "</tr>";

        // Se añaden las filas de datos.
        for ($f = 0; $f < $maxRows; $f++) {
            $html .= '<tr>';
            foreach ($info as $prov => $arreglo) {
                // Si la fila y la columna existen, se añade la celda.
                $html .= (isset($arreglo[$f])) ? '<td bgcolor="#D6FAF2">' . $arreglo[$f] . '</td>' : '<td bgcolor="#D6DEFA"> </td>';
            }
            $html .= '</tr>';
        }

        $html .= "</table><br><br>";
    }
}

// Si se proporciona un parámetro 'continente' en la URL, se muestra los datos del continente correspondiente.
if (isset($_GET['continente'])) {
    $index = intval($_GET['continente']) - 1;
    ImprimirPaises($Cubos[$index], $titulo[$index]);
}

// Se muestra la cadena HTML.
echo $html;
?>

<div style="padding-left:250px;">
    <button><a href="./Continentes/index.html">Regresar</a></button>
</div>
