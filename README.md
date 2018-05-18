# Email Notification Library using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require edsonllima/notifications
```

To make use of the library, simply require the autoload of the composer, invoke the class and make the method call:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic method builder! Once you've invoked the constructor method within your application, your system will be able to fire the shots.

### Developers
* [Edson Lima] - Developer of this library and full stack web developer
* [phpMailer] - Lib to send Email

License
----

MIT

**One more library to streamline your processes, make good use of it!**

[//]: #
[Edson Lima]:<mailto:focusti@hotmail.com>
[phpMailer]:<https://github.com/PHPMailer/PHPMailer>

---
# Biblioteca de Notificação via e-mail utilizando o phpMailer

Essa biblioteca tem por função enviar e-mail utilizando a biblioteca phpmailer. Fazer essa ação de forma descomplicada é essencial para qualquer sistema.

Para fazer a instalação da biblioteca, execute o seguinte comando:

```sh
composer require edsonllima/notifications
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, invocar a classe e fazer a chamada do método:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note que toda a configuração do envio do e-mail está utilizando o método mágico construtor! Uma vez invocado o método construtor dentro da sua aplicação, seu sistema estar'á apto a efetuar os disparos.

### Developers
* [Edson Lima] - Desenvolvedor desta biblioteca e full stack web developer
* [phpMailer] - Lib to send E-mail

License
----

MIT

**Mais um biblioteca para agilizar seus processos, faça bom uso!**

[//]:#
[Edson Lima]: <mailto:focusti@hotmail.com>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>


