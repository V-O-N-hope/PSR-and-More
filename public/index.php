<?php

declare(strict_types= 1);

use src\Animal\Dog;
use src\Animal\Bird;
use src\Animal\Cat;

spl_autoload_register(function ($class_name) {
    $global_path = sprintf('%s.php', str_replace('\\', DIRECTORY_SEPARATOR, $class_name));

    if (file_exists($global_path)) {
        include $global_path;
    }
});

function iterate_animals(array $animals): void{
    foreach ($animals as $animal) {
        $animal->voice();
        $animal->eat();
        $animal->sleep();
    }    
}


$animals = [new Cat(), new Dog(), new Bird()];

iterate_animals($animals);