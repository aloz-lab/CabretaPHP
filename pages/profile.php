<?php
    session_start();

    include('../layouts/head.php');
    include('../layouts/header.php');

    if($_SESSION['isConnected'] || $_SESSION['isConnected'] == false) {
        Header('Location : http://localhost:8000/index.php');
    }
?>

<!-- Infos -->
<div>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <h1>Hello, <code><?php echo $_SESSION['username']; ?></code> !</h1>
</div>



<?php include('../layouts/footer.php');?>
