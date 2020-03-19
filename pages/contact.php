<?php include('../layouts/head.php');?>

<?php include('../layouts/header.php');?>

    <!-- FORM -->    

    <div class="form-daddy">
        
        <div class=" bg-frame">
        <div class="p-frame"><p class="intro">For further information</p></div><br>

        <div class="span-frame"><p class="span-contact">Contact us</p></div>

            <form class="formulaire" method="post" action="#">
                <label class="form-label" for="fullname"></label>
                <input class="form-content" type="text" value="" placeholder="Full name" name="fullname" tabindex="1" />
                
                <label class="form-label" for="email"></label>
                <input class="form-content" type="text" value="" placeholder="E mail" name="email" tabindex="2" />
                
                <label class="form-label" for="Subject"></label>
                <input class="form-content" type="text" value="" placeholder="Subject" name="fullname" tabindex="3" />

                <label class="form-label" for="message"></label>
                <textarea class="form-content" placeholder="Message" name="Message" tabindex="4" rows="10"></textarea>
                <input class="button" type="button" value="Send" tabindex="6" />
            </form>
        </div>
    </div>


    <!-- TEMOIGNAGES-->

    <section class="testimonies">
        <img src="images/carousel/Testimonies.jpg" alt="Testimonies" />
    </section>  


<?php include('../layouts/footer.php');?>      