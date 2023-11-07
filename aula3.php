<?php

$nome = "Vinicius Carrocine%";

$exploded = explode(" ", $nome);
$imploded = implode("&", $exploded);
$trimmed = trim($imploded, "%");

var_dump($trimmed);