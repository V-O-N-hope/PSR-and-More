<?php

declare(strict_types=1);

namespace App;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class Logger extends AbstractLogger implements LoggerInterface
{
    protected string $logPath;

    public function __construct($logPath = '')
    {
        $this->logPath = $logPath;
    }

    public function log($level, $message, array $context = []): void
    {
        $formattedMessage = $this->formatMessage($message, $context);

        if (!empty($this->logPath)) {
            $this->writeToFile($level . ': ' . $formattedMessage);
        }
        $this->outputToConsole('[' . strtoupper($level) . '] ' . $formattedMessage);
    }

    public function info($message, array $context = []): void
    {
        $this->log('info', $message, $context);
    }

    public function warning($message, array $context = []): void
    {
        $this->log('warning', $message, $context);
    }

    public function error($message, array $context = []): void
    {
        $this->log('error', $message, $context);
    }

    public function debug($message, array $context = []): void
    {
        $this->log('debug', $message, $context);
    }

    protected function formatMessage($message, array $context)
    {
        foreach ($context as $key => $value) {
            $message = str_replace('{' . $key . '}', $value, $message);
        }

        return $message;
    }

    protected function writeToFile($message): void
    {
        file_put_contents($this->logPath, $message . PHP_EOL, FILE_APPEND);
    }

    protected function outputToConsole($message): void
    {
        echo $message . PHP_EOL;
    }
}