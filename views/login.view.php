<?php include PARTIALS . "/head.php"?>

<body>
    <?php include PARTIALS . "/header.php"?>

    <main>

        <form action="/access" method="post" id="login-form">
            
            <!-- Display error messages -->
            <?php include PARTIALS . "/messages-box.php"; ?>

            <div class="input-box">
                <label for="">Username:</label>
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="input-box">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="password">
            </div>   
            <div class="input-box">
                <input type="submit" value="Login">
            </div>   
        </form>

    </main>

    <!-- footer -->
    <?php include PARTIALS . "/footer.php" ?>
</body>

</html>