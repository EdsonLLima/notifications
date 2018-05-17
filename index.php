<?php
require __dir__.'/lib_ext/autoload.php';

use Notifications\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Corpo : Esse é um e-mail <b>teste 1209 13052018</b></p>", "enviar@emservicosdepintura.com.br","Contato - Suporte", "suporte@emservicosdepintura.com.br", "Focus TI");

var_dump($novoEmail);
