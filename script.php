<?php

require_once 'vendor/autoload.php';

$jikan = new Jikan\Jikan;
// $anime = $jikan->Anime(1)->response;

$season = $jikan->Seasonal('WINTER', '2018');
$response = $season->response;

// file_put_contents("./datalol.txt", json_encode($response));

// $gg = json_decode(file_get_contents("./datalol.txt"), true);
// var_dump(array_keys($gg['season']));
// var_dump($gg['season'][0]);

# season
// var_dump(get_class($response));
// var_dump(count($response));
// var_dump($season->response);