<?php 
$finans = json_decode(file_get_contents("https://covid.truncgil.com/today.json"),true);
print_r($finans);
?>