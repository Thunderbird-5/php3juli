<?php
// inhoud in bestand schrijven (en lezen)
/* file_put_contents()
   samenvoeging van fopen(), fwrite(), fclose()
   maar met minder opties
   einde van bestand toevoegen: flag: FILE_APPEND
   file_get_contents
   samenvoeging van fopen(), fread(), fclose()
*/ 
$json1 = '{"teradengetal":1,"pogingen":["1"]}' ;
$json2 = '{"teradengetal":2,"pogingen":["1","2"]}' ;
$json3 = '{"teradengetal":3,"pogingen":["1","2","3"]}' ;
$json_array = array($json1, $json2, $json3) ;
// file_put_contents('opslag.json', $json, FILE_APPEND); // gaat maar 1 keer goed.
// hoe meerdere strings in 1 net bestand te krijgen.
$json_begin = "[" ;
$json_eind = "]" ;
$json_midden = "" ;
// bouw $json_midden op uit de $json_array
// $json_midden = $json1 . ',' . $json2 . ',' . $json3  ; // hoe schrijf ik dit in een lus?
foreach ($json_array as $key => $value) {
    # code...
    if($json_midden == ""){
        $json_midden .= $value ;
    } else {
        $json_midden .= ',' . $value ;
    }
}
$json_totaal = $json_begin . $json_midden . $json_eind ;
file_put_contents('opslag.json', $json_totaal) ;
// klopt de opgeslagen structuur?
$opslag_inhoud = file_get_contents('opslag.json') ;
$a_opslag_inhoud = json_decode($opslag_inhoud);
var_dump($a_opslag_inhoud) ;