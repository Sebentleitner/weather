<?php

namespace Sebentleitner\Weather;
require 'vendor/autoload.php';

use Sebentleitner\Weather\Day;
use Sebentleitner\Weather\History;

//Create History
$history = new History();

//Add Days
$day1 = new Day('Sonnig');
$history->addDay($day1, '2024-04-28');

$day2 = new Day('Schnee');
$history->addDay($day2, '2024-04-29');

$day3 = new Day('Bewölkt');
$history->addDay($day3, '2024-04-30');

//Weather - Date
$dateWeather = '2024-04-30';
$weather = $history->getWeather($dateWeather);

if ($weather !== null) {
    echo "Am $dateWeather war das Wetter: $weather";
}

else {
    echo "Das Wetter für den $dateWeather ist nicht verfügbar.";
}




