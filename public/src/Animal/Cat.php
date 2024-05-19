<?php

declare(strict_types=1);

namespace src\Animal;

class Cat implements AnimalInterface
{

    function eat(): void
    {
        echo "cat eats fish<br>";
    }

    function sleep(): void
    {
        echo "cat sleeps a lot<br>";
    }

    function voice(): void
    {
        echo "cat meows<br>";
    }
}