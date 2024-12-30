<?php include PARTIALS . "/head.php"?>

<body>
    <?php include PARTIALS . "/header.php"?>

    <main>

        <!-- Form per l'upload delle immagini -->
        <form action="/load-images" method="post" id="upload-images-form" enctype="multipart/form-data"> 
            
            <!-- Display error messages -->
            <?php include PARTIALS . "/messages-box.php"; ?>
            
            <div class="input-box">
                <label for="upload-images">Immagini da caricare:</label>
                <input type="file" name="images[]" multiple accept="image/*" id="upload-images">
            </div>  
            <div class="input-box">
                <input type="submit" value="Upload images">
            </div>
        </form>
        <!-- // end upload images form -->

    </main>

    <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>
</body>

</html>