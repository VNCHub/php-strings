<?php

$telefones = ['(24) 99999 - 9999', '(12) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $telefoneEspecial = preg_match(
        '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
        $telefone
    );
    if($telefoneEspecial) {
        $telefone = preg_replace(
            '/^\(([0-9]{2})\) (9?[0-9]{4}) - ([0-9]{4})$/',
            '(XX) XXXXX \3',
            $telefone
        );
    }
    echo "Foi enviado uma mensagem para o telefone: " . $telefone . PHP_EOL;
}
