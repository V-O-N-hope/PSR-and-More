<?php

class Cat implements Animal
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