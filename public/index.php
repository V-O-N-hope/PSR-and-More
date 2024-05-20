<?php

declare(strict_types=1);

use App\Mail\EmailSender;
use App\Logger\Logger;
use PHPMailer\PHPMailer\PHPMailer;

require_once 'vendor/autoload.php';

$from = 'me@cool.com';
$to = 'you@cool.com';

$functions = [
    'sendWelcome',
    'sendReminder',
    'sendNotification'
];

$phpMailer = new PHPMailer(true);
$phpMailer->isSMTP();
$phpMailer->Host = getenv('SMTP_HOST');
$phpMailer->SMTPAuth = getenv('SMTP_AUTH');
$phpMailer->Port = getenv('SMTP_PORT');

$logger = new Logger('default');

$mailer = new EmailSender($phpMailer, $logger);

$mailer->send($from, $to, 'First sending', 'Hiiiiiiiiiiiii!');

$phpMailer->Host = 'Another Host';

foreach ($functions as $function){
    $mailer->$function($from, $to);
}