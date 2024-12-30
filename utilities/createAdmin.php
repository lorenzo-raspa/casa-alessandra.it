<?php

// creo un admin e la sua password (criptata), per il login
$userName = "CasaAlessandra";
$password = "Alessandra2024";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// inseriscila in un file di testo
$fileName = "ps.txt";
$content = $hashedPassword;

try{
    $file = fopen("../data/" . $fileName, "w");
    fwrite($file, $content);
    fclose($file);
    echo "File creato con successo";
}catch(Exception $e){
    echo "Problemi nella creazione del file: $e";
}

