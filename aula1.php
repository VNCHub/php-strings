<?php

$nome = "Vinicius Carrocine";

$ehdaFamilia = str_contains($nome,"Carrocine"); # Verifica se contêm determinado valor

if ($ehdaFamilia) {
    echo "$nome é da familia Carrocine" . PHP_EOL;
} else {
    echo "$nome não é da familia Carrocine" . PHP_EOL;
}

# Verificações de começo e final de string
$url = "https://google.com.br";

$start = str_starts_with($url,"https");
$end = str_ends_with($url,".br");
