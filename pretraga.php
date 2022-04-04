<?php
include 'Baza.php';
$db = new Baza();

$procitano = trim($_GET['procitano']);
$sort = trim($_GET['sort']);

$podaci = $db->pretrazi($procitano, $sort);

$delay = 0.2;


foreach ($podaci as $knjiga){

    ?>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= $delay ?>s">
        <div class="service-item d-flex position-relative text-center h-100">
            <img class="bg-img" src="img/biblioteka.jpeg" alt="">
            <div class="service-text p-5">
                <img class="mb-4" src="img/bookIcon.jpeg" alt="Icon">
                <h3 class="mb-3"><?= $knjiga->naziv ?></h3>
                <h5 class="mb-3"><?= $knjiga->autor ?></h5>
                <p class="mb-4"><?= $knjiga->zanr ?></p>
                <?php
                    if($knjiga->procitana){
                        ?>
                        <span>&check;</span>
                        <?php

                    }else{
                        ?>
                        <span>&#x2716;</span>
                        <?php
                    }
                ?>

                <h2 class="text-danger">Ocena: <?= $knjiga->ocena ?></h2>
            </div>
        </div>
    </div>

<?php
    $delay += 0.2;
}