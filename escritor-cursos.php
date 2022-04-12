<?php

$arquivo = fopen("cursos-php.txt", "a");

$curso = "\nDesign Patterns em PHP: padrões estruturais";

fwrite($arquivo, $curso);

fclose($arquivo);
