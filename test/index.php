<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "host", "user", "pass", "smtpsecure", "port","setfromemail","setfromname");
$novoEmail->sendMail("", "", "", "");

var_dump($novoEmail);