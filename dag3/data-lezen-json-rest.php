<?php
// https://restcountries.com/v3.1/all
// restcountries levert data via het REST principe in JSON
// https://restcountries.com/v3.1/name/netherlands

$json_nederland = file_get_contents('https://restcountries.com/v3.1/name/netherlands');
file_put_contents('Nederland_in_json.json',$json_nederland) ;
$array_nederland = json_decode($json_nederland) ;
var_dump($array_nederland) ;