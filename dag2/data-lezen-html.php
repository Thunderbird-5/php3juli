<?php

// $doc = new DOMDocument();
// $doc->loadHTMLFile("https://nu.nl", LIBXML_NOERROR );
// // var_dump($doc) ;

// $spans = $doc->getElementsByTagName('span');
// foreach ($spans as $span) {
//     echo $span->nodeValue, PHP_EOL;
// }

// nu uit coronadashboard de json data halen
// https://coronadashboard.rijksoverheid.nl
// </noscript><script id="__NEXT_DATA__" type="application/json">{"prop......

    // haal de pagina op in een DOMdocument object
    $coronadashboardjson = new DOMDocument() ;
    $coronadashboardjson->loadHTMLFile("https://coronadashboard.rijksoverheid.nl", LIBXML_NOERROR) ;
    // zoek het element met id __NEXT_DATA__
    $jsondataelement = $coronadashboardjson->getElementById("__NEXT_DATA__") ;
    // pak de nodevalue van dat element
    $jsondata = $jsondataelement->nodeValue ;
    // json_decode de nodevalue
    $jsondecodedarray = json_decode($jsondata) ;
    // dump het resultaat
    var_dump($jsondecodedarray) ;

