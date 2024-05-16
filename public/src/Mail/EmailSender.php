<?php

declare(strict_types=1);

namespace App\Mail;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EmailSender
{
    protected PHPMailer $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = '';
        $this->mailer->Password = '';
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 587;
    }

    public function send(string $messageType, string $recipient) : void
    {
        try {
            $this->mailer->setFrom('ksisdrive@gmail.com', 'Mikita');
            $this->mailer->addAddress($recipient);
            $this->mailer->addReplyTo('ksisdrive@gmail.com', 'Mikita');
            $this->mailer->isHTML(true);

            switch ($messageType) {
                case 'welcome':
                    $this->mailer->Subject = 'Добро пожаловать!';
                    $this->mailer->Body = 'Привет! Добро пожаловать на наш сайт!';
                    break;
                case 'reminder':
                    $this->mailer->Subject = 'Напоминание';
                    $this->mailer->Body = 'Напоминаем вам о событии X.';
                    break;
                case 'notification':
                    $this->mailer->Subject = 'Уведомление';
                    $this->mailer->Body = 'У вас новое уведомление.';
                    break;
                default:
                    $this->mailer->Subject = "No subject message";
                    $this->mailer->Body = 'No body message';
                    break;
            }

            $this->mailer->send();
            echo 'Сообщение отправлено! <br>';
        } catch (Exception $e) {
            echo "Ошибка отправки сообщения: {$this->mailer->ErrorInfo} <br>";
        }
    }
}
