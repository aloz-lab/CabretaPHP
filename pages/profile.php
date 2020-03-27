<?php
    session_start();

    include('../layouts/head.php');
    include('../layouts/header.php');

    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
        Header('Location : http://localhost:8000/index.php');
    }
?>

<!-- Infos -->
<!-- <div>
    <h1>Hello, <code></code> !</h1>
</div> -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h2 class="card-title">
            Hello,
            <?php
                if(isset($_SESSION['username'])){
                    echo $_SESSION['username'] . " !";
                } else{
                    echo "error";
                }
            ?>
        </h2>
        <p class="card-text">Bienvenue sur ton profil Cabreta.</p>
        <p class="card-text">Tu as maintenant accès à toute notre gallerie de photos. Enjoy !</p>
    </div>
</div>

<?php include('../layouts/footer.php');?>
