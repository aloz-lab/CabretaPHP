<?php include('../layouts/head.php');?>

<?php include('../layouts/header.php');?>

<?php
    if(isset($_POST)) {
        $errors = [];
        if(empty($_POST['email'])) {
            $errors['email'] = "Le champ email est obligatoire";
        }
        if(empty($_POST['message'])) {
            $errors['message'] = "Le champ message est obligatoire";
        }
    }
?>

    <!-- FORM -->    

    <div class="form-daddy">
        
        <div class=" bg-frame">
        <div class="p-frame"><p class="intro">For further information</p></div><br>

        <div class="span-frame"><p class="span-contact">Contact us</p></div>

            <form class="formulaire" method="POST" action="contact.php">
                <label class="form-label" for="fullname"></label>
                <input class="form-content" type="text" placeholder="Full name" name="fullname" tabindex="1" value=<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>>
                
                <label class="form-label" for="email"></label>
                <input class="form-content" type="text" placeholder="E mail" name="email" tabindex="2" value=<?php if(isset($_POST['email'])) echo $_POST['email']; ?>>
                <p class="error">
                    <?php if(isset($errors['email'])) { echo $errors['email'];} ?>
                </p>

                <label class="form-label" for="Subject"></label>
                <input class="form-content" type="text" placeholder="Subject" name="subject" tabindex="3" value=<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>>

                <label class="form-label" for="message"></label>
                <textarea class="form-content" placeholder="Message" name="message" tabindex="4" rows="10"><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
                <p class="error">
                    <?php if(isset($errors['message'])) { echo $errors['message'];} ?>
                </p>
                <button type="submit" class="button" name="button">Send</button>
                <!-- <input class="button" type="button" value="Send" name="button" tabindex="6" /> -->
            </form>

            <?php
                if(isset($_POST['button'])) {
            ?>

                  <p class="lead">
                      <?php
                        // Envoi des infos du formulaire via email
                        $to = "alozier45@gmail.com";
                        $from = "alozier@lilo.org";
                        if(isset($_POST['fullname'])) {
                            $fullname = $_POST['fullname'];
                        }
                        if(isset($_POST['subject'])) {
                            $formSubject = $_POST['subject'];
                        }
                        $message = $_POST['message'];
                        $email = $_POST['email'];
                        $subject = "New message from your contact form";
                        $content = "Le message suivant vous a été envoyé par " .$email." : " .$message;
                        $headers = "from " .$from;
                        mail($to, $subject, $content, $headers);
                        // Affichage de succès d'envoi de message
                        echo "Merci pour votre message " .$_POST['fullname'].", celui-ci a bien été envoyé.";
                      ?>
                  </p>

            <?php
            }
            ?>

        </div>
    </div>


    <!-- TEMOIGNAGES-->

    <section class="testimonies">
        <img src="../assets/images/carousel/Testimonies.jpg" alt="Testimonies" />
    </section>  


<?php include('../layouts/footer.php');?>      