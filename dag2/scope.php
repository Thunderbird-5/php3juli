<?php

$getal = 5 ;
function doeiets(&$ding){
    $ding++ ;
}
doeiets($getal) ;
echo $getal ;