<?php

declare(strict_types=1);

use App\Mail\EmailSender;
require_once 'vendor/autoload.php';

$from = 'me@cool.com';
$to = 'you@cool.com';

$mailer = new EmailSender();

$functions = [
    'sendWelcome',
    'sendReminder',
    'sendNotification'
];


$mailer->send($from, $to, 'First sending', 'Hiiiiiiiiiiiii!');

foreach ($functions as $function){
    $mailer->$function($from, $to);
}