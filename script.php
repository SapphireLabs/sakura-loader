<?php

require_once 'vendor/autoload.php';

$seasons = ['fall', 'spring', 'summer', 'winter'];

function fetchAndStoreAnimesBySeason($seasonType, $year)
{
    $jikan = new Jikan\Jikan;
    $animes = $jikan->Seasonal($seasonType, $year);
    $response = $animes->response['season'] ?? "NO RESPONSE";

    file_put_contents("./data/$seasonType-$year.json", json_encode($response));
    var_dump("WRITTEN $seasonType - $year");
}

for($year = 1970; $year < 2019; $year++) {
    foreach($seasons as $season) {
        fetchAndStoreAnimesBySeason($season, $year);
        sleep(30);
    }
}
