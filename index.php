<?php
$apiKey = '8c4451fd1726f52c82bfa82573b0a984';
$city = readline("Enter the city: ");
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&&appid=" . $apiKey ."&units=metric" ;
$weather_data = json_decode(file_get_contents($url), true);

echo "The current temperature in ". $weather_data['name'] ." is ".round($weather_data['main']['temp']) ."°C". PHP_EOL;
echo "Description: " . $weather_data['weather'][0]['description'] . PHP_EOL;
echo "Sunrise is at: ". date("H:i:s",$weather_data['sys']['sunrise']) . PHP_EOL;
echo "Sunset is at: ".  date("H:i:s",$weather_data['sys']['sunset']) . PHP_EOL;

