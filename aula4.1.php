<?php

$texto = "Uma frase com Palavrão e Palavrinha";

echo str_replace(
    ["Palavrão", "Palavrinha"],
    "***",
    $texto
    ) . PHP_EOL;
