<?php

require __DIR__. '/vendor/autoload.php';


//DEPENDÊNCIAS
use \App\WebService\ViaCep;


//VERIFICA A EXISTÊCIA DO COMANDO
if(!isset($argv[1])) {
    die("CEP não definido\n");
}

// CONSULTA DO CEP
$dadosCEP = ViaCEP::consultarCEP("");


print_r($dadosCEP);