<?php

# recupera eventuali messaggi inviati dai form e poi pulisci variabile
$message = $_SESSION["message"] ?? "";
unset($_SESSION["message"]);

# titolo della pagina
$pageTitle = "Login Page";

include VIEWS . "/login.view.php";