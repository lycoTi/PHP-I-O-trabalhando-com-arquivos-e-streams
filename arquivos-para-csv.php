<?php

$meusCursos = file("lista-cursos.txt");
$outrosCursos = file("cursos-php.txt");

$arquivoCsv = fopen("cursos.csv", "w");

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), "sim"];

    fputcsv($arquivoCsv, $linha, ";");
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), "não"];

    fputcsv($arquivoCsv, $linha, ";");
}

fclose($arquivoCsv);
