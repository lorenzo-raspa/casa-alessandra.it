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
        <?php foreach($imagesArray as $image): ?>
        <div class="gallery-item" data-index="<?= $image["imageIndex"]?>"><img src="<?= HOUSE_IMAGES ?>/<?= $image["imageName"] ?>" alt="<?= $image["imageName"] ?>"></div>
        <?php endforeach; ?>
     </div>

     <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>

<!-- javascript -->
 <script src="<?= JAVASCRIPT ?>/lightbox.js"></script>
</body>

</html>