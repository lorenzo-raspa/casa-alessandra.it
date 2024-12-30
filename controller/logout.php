<?php 
# distrugge la sessione
if($_SESSION["is_logged_in"]) session_destroy();
header("Location: /");
exit;