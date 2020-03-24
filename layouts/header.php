<?php
    session_start();

    if(isset($_POST['logout'])) {
        Header('Location: http://localhost:8000/pages/index.php');
    }
?>

<header>
    <img src="../assets/images/logo/CabretaLogoBlack1.png" alt="Logo Cabretta">
    <div class="container">
        <nav class="top-menu">
            <ul class="menu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/login.php">Login</a></li>

                <?php
                    //if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                ?>
                    <li><a href="../pages/gallery.php">Gallery</a></li>
                <?php
                    //} else { echo "";
                ?>

                <?php
                    //if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                ?>
                    <li><a href="../pages/about.php">About</a></li>
                <?php
                    //} else { echo "";
                ?>

                <li><a href="../pages/contact.php">Contact</a></li>

                <?php
                    //if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                ?>
                    <li>
                        <form method="POST" action="index.php">
                            <button type="submit" name="logout">Logout</button>
                        </form>
                    </li>
                <?php
                    //} else { echo "";
                 ?>
            </ul>
        </nav>
    </div>
</header>
