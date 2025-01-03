<?php include PARTIALS . "/head.php"?>

<body>
    <?php include PARTIALS . "/header.php"?>

    <main>
        <!-- banner-home -->
        <div class="banner-home-page">
            <img src="<?= HOUSE_IMAGES ?>/garden-13.jpg" alt="garden">
        </div>

        <!-- AirBnB recensioni -->
        <section class="reviews-section">
            <div class="section-title">
                <div>
                    <img class="platform-logo" src="<?= IMAGES ?>/airbnb-logo.png" alt="airbnb logo">
                    <h3>Our reviews on AirBnB</h3>
                </div>
                <div>
                    <ul class="total-score-list">
                        <li>Our total score on AirBnB: <span class="total-score">4.78 / 5</span></li>
                        <li><a href="https://www.airbnb.it/rooms/1168933953418608686?guests=1&adults=1&s=67&unique_share_id=351d377e-7aad-4eda-8dd3-6365da042ee4">Visita il nostro annuncio su AirBnB</a></li>
                    </ul>
                    
                </div>
            </div>
            <?php include PARTIALS . "/airbnb-reviews-box.php"; ?>
        </section>

        <!-- Booking recensioni -->
        <section class="reviews-section">
            <div class="section-title">
                <div>
                    <img class="platform-logo" src="<?= IMAGES ?>/booking-logo.png" alt="booking logo">
                    <h3>Our reviews on Booking.com</h3>
                </div>
                <div>
                    <ul class="total-score-list">
                        <li>Our total score on Booking: <span class="total-score">9.2 / 10</span></li>
                        <li><a href="https://www.booking.com/hotel/it/casa-con-giardino-fronte-mare.it.html?label=gen173nr-1BCAsocUIdY2FzYS1jb24tZ2lhcmRpbm8tZnJvbnRlLW1hcmVIM1gEaHGIAQGYARS4ARjIAQzYAQHoAQGIAgGoAgS4Ar_kursGwAIB0gIkYmQ2MWU4NzAtNTY2YS00YjUwLWIzYWMtZDliN2MzMzIyZTA02AIF4AIB&sid=92e8d8d55297128c0601a09dc1af03cb&dist=0&keep_landing=1&sb_price_type=total&type=total&">Visita il nostro annuncio su Booking</a></li>
                    </ul>                   
                </div>
            </div>
            <?php include PARTIALS . "/booking-reviews-box.php"; ?>
        </section>

    </main>

    <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>

</body>

</html>