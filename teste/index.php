<?php
require __dir__.'/../lib_ext/autoload.php';

use Notifications\Email;

$novoEmail = new Email(2, 'ds1.hospedam.com', 'enviar@emservicosdepintura.com.br', 'enviar2018', 'tls', 587, 'suporte@emservicosdepintura.com.br', 'Email Site' );
$novoEmail->sendMail("Assunto de Teste", "<p>Corpo : Esse é um e-mail <b>teste 1209 13052018</b></p>", "suporte@emservicosdepintura.com.br","Contato - Suporte", "ednetols@bol.com.br", "Duvidas");

var_dump($novoEmail);
