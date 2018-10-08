<?php include_once ("header.php"); ?>

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
    </div>
</header>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Details</h2>
        <hr class="star-light">

        <?php
        include_once("../controller/ContactController.php");
        $cont = new ContactController(); 
            $cont->display();
        



        


        echo "<h2>Business Contact</h2><hr/>";


        $BusinessContact = new BusinessContact("Luke Rolls", "Web Developer");


        $BusinessContact->setCompanyName("Dragon Training");
        $BusinessContact->setPhoneNumber("07525777417");


        $BusinessContact->display();
        ?>

    </div>
</section>

<?php include_once ("footer.php");?>




