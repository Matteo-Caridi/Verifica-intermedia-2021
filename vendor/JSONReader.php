<?php

function JSONReader($filePath){
    if(file_exists($filePath)){
        $fileString = file_get_contents($filePath);
        $fileDecode = json_decode($fileString, true);
        return $fileDecode;
    }
}