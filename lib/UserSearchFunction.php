<?php

function searchFirstName(string $firstName){
    return function ($user) use ($firstName){
        if($firstName!== ""){
            return stripos ($user, $firstName) !== false;
        }else{
            return true;
        }
    };
}

function searchLastName(string $lastName){
    return function ($user) use ($lastName){
        if($lastName!== ""){
            return searchText($lastName, $user->getLastName()) !== false;
        }else{
            return true;
        }
    };
}

function searchText($search, $targetText){
    return stripos($targetText, $search) !== false;
}