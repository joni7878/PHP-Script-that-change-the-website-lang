<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
// $ip = $details->ip; // 
$country = $details->country;
if ($country == "IL") {
header("Location: ./he");
} elseif ($country == "us") {
header("Location: ./en");
} elseif ($country == "RU") {
header("Location: ./ru");
} else {
header("Location: ./en");
}
?>