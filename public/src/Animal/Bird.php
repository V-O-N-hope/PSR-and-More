<?php

declare(strict_types=1);

namespace src\Animal;

class Bird implements AnimalInterface
{

    function eat(): void
    {
        echo "bird eats corn<br>";
    }

    function sleep(): void
    {
        echo "bird sleeps<br>";
    }

    function voice(): void
    {
        echo "bird chirping<br>";
    }
}