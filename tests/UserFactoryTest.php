<?php

require '../vendor/sanitizeName.php';
require '/../vendor/UserFunctions.php';
require '/../class/User.php';
require '/../vendor/testTools/testTool.php';

$userData = [
    "id"=> 15,
    "firstName"=> "Zemo",
    "lastName" => "Conte",
    "email" => "contezemo@gmail.com",
    "birthday" => "2001-07-20"
];

$user = UserFactory($userData);


assertEquals('User', get_class($user), 'Creo un istanza della classe user');
assertEquals('15', $user-> getUserId(), 'Lo user ha un Id');
assertEquals('Conte', $user -> getLastName(), 'Ottengo una versione sanificata di lastName');
assertEquals('Zemo', $user -> getFirstName(), 'Ottengo una versione sanificata di firstName');
assertEquals('contezemo@gmail.com', $user -> getEmail(), 'Ottengo una versione sanificata di email');
assertEquals('1970-01-01', $user -> getBirthday(), 'Ottengo una versione sanificata di birthday');

assertEquals(20, $user->getAge(), 'l\'user ha 20 anni');