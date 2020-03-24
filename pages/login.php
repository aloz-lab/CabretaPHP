<?php
    session_start();

    include('../layouts/head.php');
    include('../layouts/header.php');

    //LOGIN

    if(isset($_POST) && isset($_POST['button'])) {
        $errors = [];
        if(empty($_POST['username'])) {
            $errors['username'] = "* Le champ username est obligatoire";
        }
        if(empty($_POST['password'])) {
            $errors['password'] = "* Le champ password est obligatoire";
        }
        if(!empty($_POST['password']) && !empty($_POST['username']) && $_POST['password'] === '1234') {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['isConnected'] = true;
            if ($_SESSION['isConnected'] === true) {
                Header('Location: http://localhost:8000/pages/profile.php');
            }
        }
    }

 ?>

<!-- FORM -->

    <div class="form-daddy">

        <div class=" bg-frame">

            <div class="span-frame"><p class="span-contact">Sign in</p></div>

            <form class="formulaire" method="POST">

                <label class="form-label" for="email"></label>
                <input class="form-content" type="pseudo" placeholder="Username*" name="username" tabindex="1">
                <p class="error">
                    <?php if(isset($errors['username'])) { echo $errors['username'];} ?>
                </p>

                <label class="form-label" for="password"></label>
                <input class="form-content" type="password" placeholder="Password*" name="password" tabindex="2" >
                <p class="error">
                    <?php if(isset($errors['password'])) { echo $errors['password'];} ?>
                </p>
                <p>Please enter 1234 to try app !</p>
                <p>*Champs obligatoires</p>

                <button type="submit" class="button" name="button">Send</button>
                <!-- <input class="button" type="button" value="Send" name="button" tabindex="6" /> -->
            </form>
        </div>
    </div>


<?php include('../layouts/footer.php');?>
