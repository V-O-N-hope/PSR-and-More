<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();


$cat->voice();
$cat->eat();
$cat->sleep();

$dog->voice();
$dog->eat();
$dog->sleep();

$bird->voice();
$bird->eat();
$bird->sleep();