<?php

// file_get_contents() ; leest inhoud in een string. Het kan een webpagina zijn of andere platte tekst
// $nunlRSS = file_get_contents("https://nu.nl/rss") ;
$nuXML = simplexml_load_file("https://nu.nl/rss") ;
// var_dump($nuXML->channel->item->title);
// echo $nuXML->channel->item[15]->title ; // navigatie door het xml object. (hardop lezen helpt)

// Dit is de array: $nuXML->channel->item
foreach ($nuXML->channel->item as $key => $value) {
    # code...
    if (str_contains(strtolower($value->title),'rutte')){
        echo $value->title . '<br>' ;
    } 
}



// Lees de titels uit het verkregen object
// foreach om te loopen/lussen
// 

// object(SimpleXMLElement)#1 (2) {
//     ["@attributes"]=>
//     array(1) {
//       ["version"]=>
//       string(3) "2.0"
//     }
//     ["channel"]=>
//     object(SimpleXMLElement)#2 (8) {
//       ["title"]=>
//       string(2) "NU"
//       ["link"]=>
//       string(18) "https://www.nu.nl/"
//       ["description"]=>
//       string(37) "Het laatste nieuws het eerst op NU.nl"
//       ["language"]=>
//       string(5) "nl-nl"
//       ["copyright"]=>
//       string(22) "Copyright (c) 2022, NU"
//       ["lastBuildDate"]=>
//       string(31) "Wed, 06 Apr 2022 11:02:26 +0200"
//       ["ttl"]=>
//       string(2) "60"
//       ["item"]=>
//       array(30) {
//         [0]=>
//         object(SimpleXMLElement)#3 (7) {
//           ["title"]=>
//           string(73) "Kinder Surprise-eieren ook in Nederland uit voorzorg uit schappen gehaald"