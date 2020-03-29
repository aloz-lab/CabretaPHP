<?php
    session_start();

    include('../layouts/head.php');
    include('../layouts/header.php');
    include ('../controller/controller.php');

    if(empty($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) {
        Header('Location : http://localhost:8000/index.php');
    }
?>

    <!-- GALLERY -->
    <h1>Gallery</h1>
    <section class="gallery">

        <?php
            foreach ($photos as $photo) {
        ?>

                <div>
                    <?php
                        if($photo['title'] === 'Mix Pictures') {
                     ?>
                         <a href="landscape.php" title="Discover our Landscapes gallery">
                     <?php
                        }
                     ?>
                    <img src="<?php echo $photo['img'];?>" alt="People inside metro">
                    <p><?php echo $photo['title'];?></p>
                </div>

        <?php } ?>

        <!-- <div>
            <img src="../assets/images/Gallery/vie-1.jpeg" alt="People inside metro">
            <p>Everyday life</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/urbex-1.jpeg" alt="Old corridor" >
            <p>Urbex</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/techno-3.jpeg" alt="Integrated circuit" >
            <p>Technology</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/sport-1.jpeg" alt="Man swimming in a swimming-pool" >
            <p>Sport</p>
        </div>
        <div>
            <a href="landscape.php" title="Discover our Landscapes gallery">
                <img src="../assets/images/Gallery/landscape-10.jpeg" alt="Autumn forest landscape"></a>
            <p>Mix Pictures</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/musique-1.jpeg" alt="Woman playing violin close-up">
            <p>Music</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/archi-2.jpeg" alt="Big building">
            <p>Architecture</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/cuisine-3.jpeg" alt="Appetising plate" title="">
            <p>Cooking</p>
        </div>
        <div>
            <img src="../assets/images/Gallery/culture-2.jpeg" alt="Old asian street" title="">
            <p>Culture</p>
        </div> -->

    </section>

<?php include('../layouts/footer.php');?>