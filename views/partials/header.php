<header>
    
    <!-- Title box -->
    <div class="title-box">
        <h1>Casa Alessandra</h1>
        <h2><?= $pageTitle ?></h1>
    </div>
    
    <!-- Navbar links -->
    <navbar>
        <ul>
            <li><a href="/">Home Page</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/contacts">Contacts</a></li>
            <?php if(!$_SESSION["is_logged_in"]): ?>
                <li><a href="/login">Login</a></li>
            <?php else: ?>
                <li>Ciao <?= $_SESSION["username"]?>!</li>
                <li>
                    <form id="logout-form" action="/logout" method="post">
                        <input type="submit" value="Logout">
                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </navbar>
    
</header>
<!-- // end Header -->