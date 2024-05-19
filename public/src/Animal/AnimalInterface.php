<?php

declare(strict_types= 1);

namespace src\Animal;

interface AnimalInterface
{
    function eat(): void;
    function sleep(): void;
    function voice(): void;
}