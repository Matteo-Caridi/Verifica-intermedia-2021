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
assertEquals('contezemo@gmail.com', $user -> getEmail(), 'utente ha email');
assertEquals('2001-07-21', $user -> getBirthday(), 'Ottengo una versione sanificata di birthday');


assertEquals(19, $user->getAge()); //oggi
assertEquals(19, $user-> getAge('2021-04-14'));

//metodo flessibile: impostiamo una data come argomento e facciamo la differenza
//per calcolare gli anni
$user -> setBirthday('2000-01-01');
assertEquals(5, $user->getAge('2005-01-01'), 'un utente nato il 1 gennaio 2000, nel 2005 ha 5 anni');