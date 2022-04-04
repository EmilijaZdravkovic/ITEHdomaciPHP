<?php
include 'Baza.php';
$db = new Baza();

$podaci = $db->vratiZanrove();

foreach ($podaci as $zanr){

    ?>
    <option value="<?= $zanr->zanrId ?>"><?= $zanr->zanr ?> </option>

<?php
}
?>