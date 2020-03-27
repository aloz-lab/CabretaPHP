<header>
    <img src="../assets/images/logo/CabretaLogoBlack1.png" alt="Logo Cabretta">
    <div class="container">
        <nav class="top-menu">
            <ul class="menu">
                <li><a href="../index.php">Home</a></li>

                <?php
                if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                ?>
                    <li><a href="../pages/gallery.php">Gallery</a></li>
                    <li><a href="../pages/about.php">About</a></li>
                <?php } else { ?>
                    <li><a href="../pages/login.php">Login</a></li>
                <?php }?>

                <?php
                    //if(empty($_SESSION['isConnected']) && empty($_SESSION['username'])){ ?>
                        <!--<li><a href="../pages/login.php">Login</a></li>-->
                <?php //} else { ?>
                <!--<li><a href="../pages/gallery.php">Gallery</a></li>
                    <li><a href="../pages/about.php">About</a></li>-->
                <?php //} ?>

                <li><a href="../pages/contact.php">Contact</a></li>

                <?php
                    if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                ?>
                    <li>
                        <form method="POST" action="../index.php">
                            <button type="submit" name="logout">Logout</button>
                        </form>
                    </li>
                <?php
                    } else { echo "";}
                 ?>
            </ul>
        </nav>
    </div>
</header>
