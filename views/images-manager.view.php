<?php include PARTIALS . "/head.php"?>

<body>
    <?php include PARTIALS . "/header.php"?>

    <main>
        
        <!-- Display error messages -->
        <?php include PARTIALS . "/messages-box.php"; ?>

        <table id="gallery-manager-table">
            <thead>
                <th>Image</th>
                <th>name</th>
                <th>index</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php foreach($imagesArray as $image): ?>
                    <tr>
                        <td><img class="table-image" src="<?= HOUSE_IMAGES ?>/<?= $image["imageName"]?>" alt="<?= $image["imageName"]?>"></td>
                        <td><?= $image["imageName"]?></td>
                        <td><?= $image["imageIndex"]?></td>
                        <td>
                            <form action="/images-delete" method="post">
                                <input type="hidden" name="imageName" value="<?= $image["imageName"]?>">
                                <input type="submit" value="Delete">
                            </form>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    </main>
    
    <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>
</body>

</html>