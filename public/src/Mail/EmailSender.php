<?php

declare(strict_types=1);

namespace App\Mail;

class EmailSender extends AbstractEmailSender
{
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
