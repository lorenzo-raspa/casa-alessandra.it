<?php 

# titolo della pagina
$pageTitle = "Home Page";

# recuperiamo reviews booking e airbnb
# in caso di problemi nel recupero dati, la funzione restituisce un valore vuoto
$bookingReviews = getData("/booking_reviews.json");
$airbnbReviews = getData("/airbnb_reviews.json");


# includi la view
include "./views/home-page.view.php";