<?php

# funzione di stampa chiave => valore di array
function printArray(array $arr){
    foreach($arr as $key => $value){
        echo "<p>$key => $value</p>";
    }
} // end printArray()


# recuperiamo reviews booking
# in caso di problemi nel recupero dati, la funzione restituisce un valore vuoto
function getData($path){
try{
    $url = DATA . "$path";
    $jsonData = file_get_contents($url);
    $data = json_decode($jsonData, true);
    return $data;
}catch (Exception $e){
    $data = [];
} 
} // end getData()