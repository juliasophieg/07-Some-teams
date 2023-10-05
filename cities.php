<?php require __DIR__ . '/data.php'; ?>

<?php

$cities = [];

foreach ($teams as $team => $teamInfo) :
    $cities[] = $teamInfo['city'];
endforeach;

$uniqueCities = array_unique($cities); /* Using array_unique to sort out any duplicates. */

foreach ($uniqueCities as $uniqueCity) : ?>
    <button class="city-btn"><?= $uniqueCity; ?></button> 
<?php endforeach ?>
