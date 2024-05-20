<?php

namespace App\Mail;

interface SenderInterface
{


    public function send(string $from, string $to, string $subject, string $body): void;
}