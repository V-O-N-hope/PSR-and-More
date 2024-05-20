<?php

declare(strict_types= 1);

use src\Animal\Dog;
use src\Animal\Bird;
use src\Animal\Cat;

spl_autoload_register(function ($class_name) {
    //Почему это работает?
    $global_path = sprintf('%s.php', str_replace('\\', DIRECTORY_SEPARATOR, $class_name));

    // //а это нет
    // $global_path2 = sprintf('%s.php', $class_name);

    // // а тутт понятно.., бред ведь))
    // echo sprintf('%s != %s <br>', $global_path, $global_path2);

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