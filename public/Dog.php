<?php

class Dog implements Animal
{

    function eat(): void
    {
       echo "dog eats meat<br>";
    }

    function sleep(): void
    {
        echo "dog sleeps<br>";
    }

    function voice(): void
    {
        echo "dog bark<br>";
    }
}