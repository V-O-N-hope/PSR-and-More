<?php

use PHPMailer\PHPMailer\PHPMailer;
use App\Mail\EmailSender;

include_once ("vendor/autoload.php");

$emailSender = new EmailSender();

$emailSender->send('welcome', 'retdarkw@gmail.com');

$emailSender->send('reminder', 'retdarkw@gmail.com');

$emailSender->send('notification', 'retdarkw@gmail.com');
