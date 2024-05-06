<?php

namespace Sebentleitner\Weather;
require 'vendor/autoload.php';

use Sebentleitner\Weather\Day;
use Sebentleitner\Weather\History;

//History erstellen
$history = new History();

//Days erstellen und Weather & Date hinzufügen
$day1 = new Day("sonnig", "2024-05-05");
$day2 = new Day("schneefall", "2024-05-06");
$day3 = new Day("bewölkt", "2024-05-07");

$history->AddDay($day1);
$history->AddDay($day2);
$history->AddDay($day3);

// Wetter abrufen
$dateSearch = "2024-05-06";
$weather = $history->getWeather($dateSearch);

echo "Das Wetter am $dateSearch war: $weather";







