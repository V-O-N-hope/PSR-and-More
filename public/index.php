<?php

declare(strict_types=1);

include 'vendor/autoload.php';

use App\Logger\Logger;
use App\Logger\FileNotFoundException;

$logger = new Logger('default');

$functionsNames = [
    'info',
    'warning',
    'error',
    'debug'
];

$messages = [
    'info' => 'This is an informational message',
    'warning' => 'This is a warning message',
    'error' => 'This is an error message',
    'debug' => 'This is a debug message'
];

foreach ($functionsNames as $function) {
    if (array_key_exists($function, $messages)) {
        $message = $messages[$function];
        try {
            $logger->$function($message);
        } catch (FileNotFoundException $exception) {
            echo sprintf("%s<br>", $exception);
        }
    } else {
        $message = sprintf("key [%s] was not in messages<br>", $function);
        echo $message;
    }
}