<?
// 先 city, apikey 

// @$city = $_GET['city'];
// $city = str_replace("", "-", $city);
$city = "Taipei";
$apikey = "bd73c1c18ee265d814d5e12a204ca5a7";


// get content
// @$f = file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

@$f = file_get_contents("https://samples.openweathermap.org/data/2.5/forecast?q=".$city."&appid=".$apikey);
$f = json_decode($f,true);
$city_name = $f["city"];

print_r($city_name);


?>