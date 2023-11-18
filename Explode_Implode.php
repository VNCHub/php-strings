<?php

$nome = "Vinicius Carrocine%";

$exploded = explode(" ", $nome); # Passa de String para array com base em um separador
$imploded = implode("&", $exploded); # Passa de array para String
$trimmed = trim($imploded, "%"); # Remove Caracteres especificos

var_dump($trimmed);