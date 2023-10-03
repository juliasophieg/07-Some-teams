<?php require __DIR__ . '/data.php'; ?>

<?php


$cities = [];

foreach ($teams as $team => $teamInfo) {
    $cities[] = $teamInfo['city'];
};

$uniqueCities = array_unique($cities); //Using array_unique to sort out any doubles.
$uniqueCityList = implode(', ', $uniqueCities); // Using implode to print out array values as string seperated with commas.

echo $uniqueCityList;