<?php

$meusCursos = file("lista-cursos.txt");
$outrosCursos = file("cursos-php.txt");

$arquivoCsv = fopen("cursos.csv", "w");

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), "sim"];

    fputcsv($arquivoCsv, $linha, ";");
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), "não"];

    fputcsv($arquivoCsv, $linha, ";");
}

fclose($arquivoCsv);
