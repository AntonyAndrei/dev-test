<?php

//palavra a ser testada
$palavra = "Deleveléd";
$palavraSemAcento = TirarAcento($palavra);
$palavraSemMaiuscula = strtolower($palavraSemAcento);
$palavraInvertida = strrev($palavraSemMaiuscula);

if($palavraSemMaiuscula == $palavraInvertida){
    echo "Palindromo";
} else {
    echo "Nao eh Palindromo"; 
}

Function TirarAcento($texto){
    $array1 = array("á","à","â","ã","ä","é","è","ê","ë","í","ì","î","ï","ó","ò","ô","õ","ö","ú","ù","û","ü","ç"); 
    $array2 = array("a","a","a","a","a","e","e","e","e","i","i","i","i","o","o","o","o","o","u","u","u","u","c"); 
    return str_replace($array1, $array2, $texto); 
}  

?>