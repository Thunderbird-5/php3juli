<?php
// $pagina = file_get_contents('https://besteraadslid.nl/nominaties?page=1&per_page=382') ;
$pagina = file_get_contents('datapagina.html');
$xmlDoc = new DOMDocument();
// @$xmlDoc->loadHTML($pagina);  // is dit wel netjes?
$xmlDoc->loadHTML($pagina, LIBXML_NOERROR );  // Zelfde effect, maar formeel netter.

$searchNode = $xmlDoc->getElementsByTagName('div');

foreach( $searchNode as $searchNode )
{
    if($searchNode->hasAttribute('data-props')) {
    $valueID = $searchNode->getAttribute('data-props');
    // echo $valueID;
    $json_to_array = json_decode($valueID) ;
    // dump de array
    var_dump($json_to_array) ;
    }
}
?>