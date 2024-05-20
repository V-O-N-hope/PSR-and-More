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
        $this->mailer->Host = 'mail';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Port = 1025;
    }

    public function send(string $from, string $to, string $subject, string $body): void
    {
        try {
            $this->mailer->setFrom($from);
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $body;
            $this->mailer->send();

            echo sprintf('message with subject [%s] and body [%s] was successfully sent<br>', $subject, $body);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    public function sendWelcome(string $from, string $to): void
    {
        $this->send($from, $to, 'Welcome', 'Greetings');
    }

    public function sendReminder(string $from, string $to): void
    {
        $this->send($from, $to, 'Reminder', 'You`ve lost some details');
    }

    public function sendNotification(string $from, string $to): void
    {
        $this->send($from, $to, 'Notification', 'Notifying you that this task`ve been done');
    }
}