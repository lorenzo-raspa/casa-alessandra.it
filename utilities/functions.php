<?php
session_start();

# funzione di stampa chiave => valore di array
function printArray(array $arr){
    foreach($arr as $key => $value){
        echo "<pre><p>$key => $value</p></pre>";
    }
} // end printArray()


# funzione di stampa dati ed interruzione script
function dd($items){
    echo "<pre>";
    var_dump($items);
    echo "</pre>";
    die();
}


# recuperiamo reviews booking
# in caso di problemi nel recupero dati, la funzione restituisce un valore vuoto
function getData($path){
try{
    $url = DATA . "$path";
    $jsonData = file_get_contents($url);
    $data = json_decode($jsonData, true);
    return $data;
}catch (Exception $e){
    return $data = ["error" => $e];
} 
} // end getData()


# funzione per il controllo dei campi
function checkTextField(string $myString):string{
    $trimmedString = trim($myString);
    $sanitizeString = strip_tags($trimmedString);
    return $sanitizeString;
} 


# funzione per lettura password da file di testo ps.txt
function fetchPassword():string{
    $fileName = "ps.txt";
    $filePath = DATA . "/";
    echo $filePath . $fileName;
    try{
        $file = fopen($filePath . $fileName, "r");
        $content = fread($file, filesize($filePath . $fileName));
        fclose($file);
        return $content;
    }catch(Exception $e){
        $_SESSION["message"]["error"] = "Errore nel recuperare la password: $e";
        header("Location: /login");
        exit;
    }
} // end fetchPassword()


# funzione per controllo password
function checkPasswords(string $userInputPassword, string $storedPassword):bool{
    $result = password_verify($userInputPassword, $storedPassword);
    if($result) return true;
    else{
        $_SESSION["message"]["error"] = "Errore: password errata!";
        header("Location: /login");
        exit;
    }
} // end checkPasswords()


# get all images from house-images folder
function getHouseImages():array{
    # carica le immagini da: images/house.images/ 
    # inserisci in un array associativo il nome di ogni immagine e dai un imageIndex ad ogni immagine
    $imagesFolderPath = HOUSE_IMAGES;
    $imagesArray = [];

    // recupera tutti i file dalla cartella
    $files = scandir($imagesFolderPath); // contiene anche "." e ".."

    // inizia l'imageIndex da 1
    $imageIndex = 1; 

    // filtra le immagini con regular expression ed indicizza le immagini
    foreach($files as $file ){
        if($file !== "." && $file !== ".." && preg_match('/\.(jpg|jpeg|png|gif|bmp)$/i', $file)){
        $imagesArray[] = [
            'imageIndex'=> $imageIndex,
            'imageName' => $file,
        ];
        $imageIndex++;
        }
    }
    return $imagesArray;
} // end getHouseImages()


# carica le immagini nella cartella images/house-images
function uploadImages(array $uploadedFiles){

    # directory dove salvare le immagini
    $path = HOUSE_IMAGES . "/";

    try{

        foreach($uploadedFiles["tmp_name"] as $key => $tmpName){
            
            // Nome originale del file
            $originalName = basename($uploadedFiles['name'][$key]);
            
            // Percorso finale del file (sposta il file dalla cartella temporanea nella cartella indicata, con il nome del file)
            $targetFile = $path . $originalName;
            move_uploaded_file($tmpName, $targetFile);
        }
    
        # se caricate con successo:
        $_SESSION["message"]["success"] = "Immagini caricate con successo";
        header("Location: /upload");
        exit;
    
    }catch(Exception $e){ # gestione dell'errore
        $_SESSION["message"]["error"] = "Errore: problema nel caricare le immagini";
        header("Location: /upload");
        exit;
    }
} // end uploadImages()


# eliminare immagine dalla cartella
# se successo reindirizza a images-manager con messaggio successo
# se insuccesso reindirizza a images-manager con messaggio errore
function deleteImage(string $imageName){
    try{
        unlink(HOUSE_IMAGES . "/" . $imageName);
        $_SESSION["message"]["success"] = "Immagine $imageName eliminata correttamente";
        header("Location: /images-manager");
    }catch(Exception $e){
        $_SESSION["message"]["error"] = "Errore eliminazione immagine: $e";
        header("Location: /images-manager");
    }
} // end deleteImage()