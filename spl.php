<?php

$arquivoCursos = new SplFileObject("cursos.csv", "r");

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(",");

    echo $linha[0] . PHP_EOL;
}
