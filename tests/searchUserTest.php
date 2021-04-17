<?php

require __DIR__.'/../vendor/testTools/testTool.php';
require __DIR__.'/../vendor/sanitizeName/sanitizeName.php';
require __DIR__.'/../lib/UserSearchFunction.php';
require __DIR__.'/../class/User.php';

$users = include __DIR__.'/tests/mockdata_array.php';


$users = array_map('UserFactory', $users );


//la funzione di ricerca assertEquals deve trovare 4 tizi con cognome Rossi
assertEquals(4, count(array_filter($user, searchLastName('rossi'))));
assertEquals('true', is_array(array_filter($user, searchLastName('Rossi')), 'il risultato dev\'essere un array'));
assertEquals(4, count(array_filter($user, searchLastName('rossi'))));
assertEquals(4, count(array_filter($user, searchLastName('Rossi'))));
assertEquals(4, count(array_filter($user, searchLastName('RossI'))));
assertEquals(20, count(array_filter($user, searchLastName(''))));

//quando cerchiamo qualcosa e quello che cerchiamo è una stringa vuota
//ci aspettiamo di ottenere tutti gli elementi
//quando cerchiamo una stringa vuota deve restituire tutti

assertEquals('true', is_array(array_filter($user, searchFirstName($user)), 'il risultato dev\'essere un array'));
assertEquals(2, count(array_filter($user, searchFirstName('Adamo'))));
assertEquals(2, count(array_filter($user, searchFirstName('AdAmo'))));
assertEquals(2, count(array_filter($user, searchFirstName('ADAMO'))));
assertEquals(20, count(array_filter($user, searchFirstName(''))));
