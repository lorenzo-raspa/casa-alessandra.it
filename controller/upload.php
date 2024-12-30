<?php
# recupero messaggi dalla $_SESSION se esistono
$message = $_SESSION["message"];
unset($_SESSION["message"]);

include VIEWS . "/upload.view.php";