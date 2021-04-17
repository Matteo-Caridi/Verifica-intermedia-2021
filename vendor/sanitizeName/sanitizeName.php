<?php

function sanitizeName($name)
{

    // $noString = strip_tags($name);
    $deleteScript = preg_replace('#<script(.*?)>(.*?)</script>#is', ' ', $name);
    $noString = filter_var($deleteScript, FILTER_SANITIZE_STRING);
    $tinyName = preg_replace('/[^a-z .A-Z]+/', '', $noString);
    $explodename = explode(' ', $tinyName);
    $correctNames = array_map('correctCase', $explodename);
    $joinString = implode(' ', $correctNames);



    $noSpaceBetween = preg_replace('/[ ]+/', ' ', $joinString);
    $noSpaceEnd = trim($noSpaceBetween);

    return $noSpaceEnd;
}


function correctCase($name)
{


    // il/i nomi tipo 'aAa' | 'AAA' con strtolower diventano --> 'aaa' | 'aaa'
    $nameLowercase = strtolower($name);
    // se abbiamo tipo 'aaa' con ucfirst diventa --> 'Aaa
    $uppercasename = ucfirst($nameLowercase);

    return $uppercasename;
}
