<?php

$usuario = "vinicius@gmail.com";

$posicao = strpos($usuario,"@"); # Define a posição de um caracter chave

$nome = substr($usuario,0, $posicao);
$dominio = substr($usuario, $posicao+ 1);

echo "Nome: ".strtoupper($nome)." - Dominio: ".strtoupper($dominio); # Muda para letras maiúsculas
echo " - Tamanho: " . mb_strlen($usuario);; # Verifica tamanho da string (retorno em BYTES)
echo PHP_EOL;