<?php

function usoHeredoc($nome) # este tipo de sinalização '<<<[TAG] ... [TAG]' se chama Heredoc
{
    $email = <<<FINAL
        Olá, {$nome}!

        Estamos entrando em contato para
        {motivo do contato}
        
        {assinatura}
    
        FINAL;
    
    echo $email;
}

usoHeredoc("Vinicius");