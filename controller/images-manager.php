<?php

# page title
$pageTitle = "images manager";

# recuperiamo messaggi di errore se ci sono
$message = $_SESSION["message"];
unset($_SESSION["message"]);

# fetch all images in folder house-images
$imagesArray = getHouseImages();

# call the view
include VIEWS . "/images-manager.view.php";