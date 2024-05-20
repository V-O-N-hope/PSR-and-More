<?php

namespace App\Mail;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Psr\Log\LoggerInterface;

class AbstractEmailSender implements SenderInterface
{
    protected PHPMailer $mailer;
    protected LoggerInterface $logger;

    public function __construct(PHPMailer $mailer, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public function send(string $from, string $to, string $subject, string $body): void
    {
        try {
            $this->mailer->setFrom($from);
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $body;


            $this->mailer->send();
            $this->logger->info(sprintf('message with subject [%s] and body [%s] was successfully sent<br>', $subject, $body));

        } catch (Exception $exception) {
            $this->logger->error($exception->getMessage());
        }
    }
}
