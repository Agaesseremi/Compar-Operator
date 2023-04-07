<?php
include('./partial/navbar.html');
require_once('./class/destinationManager.php');
require_once('./class/destination.php');
require_once('./config/db.php');
?>

<body>

    <!--Display all destination -->

    <section id="main">

        <?php
        $manager = new DestinationManager($db);
        $allDestinations = $manager->getAllDestination();
        ?>


        <div class="Cards mb-4 d-flex" style="width: 18rem;" id="listDestinations">
            <div class="divObscur ">
                <div class="listDestinations">
                    <h2>Listes des Destinations:</h2>
                </div>
            </div>
            <?php
            foreach ($allDestinations as $destination) :
            ?>

                <div class="card m-5 col-4">
                    <img src="<?= $destination->getImages() ?>" class="" alt="">
                    <h1><?= $destination->getLocation() ?></h1>
                    <p class="title">A partir de <?= $destination->getPrice() ?> Euros</p>
                    <div class="button" type="submit"> <a href="TourOperator.php?location=<?= $destination->getLocation() ?>"> En savoir plus</a></div>
                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <?php
    include('./partial/footer.html')
    ?>
</body>

</html>