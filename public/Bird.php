<?php

class Bird implements Animal
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