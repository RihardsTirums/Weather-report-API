<?php

require_once 'vendor/autoload.php';
use App\ApiClient;

$apiKey = ''; //  <-------- ENTER YOU'RE API KEY

$chosenLocation = readline('What city you want to check? ');

$apiClient = new ApiClient($apiKey);

$weather = $apiClient->getWeather($chosenLocation);
echo "Temperature in {$weather->getLocationName()} is {$weather->getTemperature()}°C (it feels like: {$weather->getTemperatureFeelsLike()}°C) / {$weather->getHumidity()}%\n";
