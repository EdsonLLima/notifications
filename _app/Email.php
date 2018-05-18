<?php

namespace Notifications;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName) {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = $smtpDebug;                        // Saida de Erros -> Debugar:0 = sem debug 1 = erros e mensagens, 2 = mensagens apenas
        //$this->mail->AuthType = 'LOGIN';                          //Tentativa de solucionar erro de autenticação
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = $host;                                  //'ds1.hospedam.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = $user;                              //'enviar@emservicosdepintura.com.br';                 // SMTP username
        $this->mail->Password = $pass;                              //'enviar2018';                           // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;                      //'tls';                            // Enable 'TLS' 587 encryption, `ssl` also accepted
        $this->mail->Port = $port;                                  //587;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom($setFromEmail, $setFromName);                                     //('enviar@emservicosdepintura.com.br', 'Email Site');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }

}
