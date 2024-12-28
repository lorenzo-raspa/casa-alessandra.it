<?php include PARTIALS . "/head.php"?>

<body>

    <!-- header -->
    <?php include PARTIALS . "/header.php"?>

    <!-- lightbox hidden -->
    <div class="lightbox" id="lightbox">
        <img class="lightbox-image" id="lightbox-image" alt="lightbox image">
    </div>

    <!-- gallery container -->
     <div class="gallery-container">
        <div class="gallery-item" data-index="9"><img src="<?= HOUSE_IMAGES ?>/garden-1.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="10"><img src="<?= HOUSE_IMAGES ?>/garden-2.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="11"><img src="<?= HOUSE_IMAGES ?>/garden-3.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="12"><img src="<?= HOUSE_IMAGES ?>/garden-4.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="22"><img src="<?= HOUSE_IMAGES ?>/hall.jpg" alt="hall"></div>
        <div class="gallery-item" data-index="23"><img src="<?= HOUSE_IMAGES ?>/kitchen-1.jpg" alt="kitchen"></div>
        <div class="gallery-item" data-index="24"><img src="<?= HOUSE_IMAGES ?>/kitchen-2.jpg" alt="kitchen"></div>
        <div class="gallery-item" data-index="4"><img src="<?= HOUSE_IMAGES ?>/bedroom-big-1.jpg" alt="bedroom"></div>
        <div class="gallery-item" data-index="5"><img src="<?= HOUSE_IMAGES ?>/bedroom-small.jpg" alt="bedroom"></div>
        <div class="gallery-item" data-index="6"><img src="<?= HOUSE_IMAGES ?>/fire-place-2.jpg" alt="fireplace"></div>
        <div class="gallery-item" data-index="7"><img src="<?= HOUSE_IMAGES ?>/fire-place-3.jpg" alt="fireplace"></div>
        <div class="gallery-item" data-index="8"><img src="<?= HOUSE_IMAGES ?>/fire-place.jpg" alt="fireplace"></div>
        <div class="gallery-item" data-index="13"><img src="<?= HOUSE_IMAGES ?>/garden-5.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="14"><img src="<?= HOUSE_IMAGES ?>/garden-6.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="15"><img src="<?= HOUSE_IMAGES ?>/garden-7.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="16"><img src="<?= HOUSE_IMAGES ?>/garden-8.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="17"><img src="<?= HOUSE_IMAGES ?>/garden-9.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="18"><img src="<?= HOUSE_IMAGES ?>/garden-10.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="1"><img src="<?= HOUSE_IMAGES ?>/bathroom-1.jpg" alt="bathroom"></div>
        <div class="gallery-item" data-index="2"><img src="<?= HOUSE_IMAGES ?>/bathroom-2.jpg" alt="bathroom"></div>
        <div class="gallery-item" data-index="3"><img src="<?= HOUSE_IMAGES ?>/bathroom-3.jpg" alt="bathroom"></div>
        <div class="gallery-item" data-index="19"><img src="<?= HOUSE_IMAGES ?>/garden-11.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="20"><img src="<?= HOUSE_IMAGES ?>/garden-12.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="21"><img src="<?= HOUSE_IMAGES ?>/garden-13.jpg" alt="garden"></div>
        <div class="gallery-item" data-index="25"><img src="<?= HOUSE_IMAGES ?>/sunset-1.jpg" alt="sunset"></div>
        <div class="gallery-item" data-index="26"><img src="<?= HOUSE_IMAGES ?>/sunset-2.jpg" alt="sunset"></div>
        <div class="gallery-item" data-index="27"><img src="<?= HOUSE_IMAGES ?>/sunset-3.jpg" alt="sunset"></div>
     </div>

     <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>

<!-- javascript -->
 <script src="<?= JAVASCRIPT ?>/lightbox.js"></script>
</body>

</html>