<?php
session_start();

// controllo sui campi inviati dall'utente
$username = checkTextField($_POST["username"]);

// controlla se lo username corrisponde
if($username !== "CasaAlessandra"){
    $_SESSION["message"]["error"] = "username non valido";
    header("Location: /login");
    exit;
}

# password inviata dall'utente in form login
$password = $_POST["password"];

# recuperando il valore della password salvata
$storedPassword = fetchPassword();

# fai il check della password inserita dall'utente con quella salvata
$result = checkPasswords($password, $storedPassword);

# comincia la sessione e rinvia alla home page
if($result){
    $_SESSION["message"] = "Login effettuato!";
    $_SESSION["username"] = "alessandra";
    $_SESSION["is_logged_in"] = true;

    header("Location: /");
    exit;
}