<?php

function UserFactory(array $userData){
    $user = new User(15, "Zemo","Conte","contezemo@gmail.com","2001-07-20");
    $user -> setUserId($userData['userId']);
    $lastName = sanitizeName($userData['lastName']);
    $user -> setLastName($lastName);
    $user -> setFirstName(sanitizeName($userData['firstName']));
    $user-> setEmail(filter_var($userData['email'], FILTER_SANITIZE_EMAIL));
    $user-> setBirthday($userData['birthday']);
    return $user;
}