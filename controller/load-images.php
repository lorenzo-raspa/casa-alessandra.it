<?php

# recupero i file
$uploadedFiles = $_FILES["images"];

# richiamo la funzione per fare upload immagini
uploadImages($uploadedFiles);

