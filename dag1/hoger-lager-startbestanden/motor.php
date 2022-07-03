<?php
function motor($i_teRaden, $s_lager, $s_hoger, $s_goed, $s_welkom) {
    // na de variabelen komt de motor (het programma)
    if(array_key_exists('getal',$_GET) && is_numeric($_GET['getal'])){
        // tel de beurt erbij
        $_SESSION["pogingen"][] = $_GET['getal'] ;
        if ($_GET["getal"]>$i_teRaden) {
            $s_output = $s_lager ;
        } elseif ($_GET["getal"]<$i_teRaden) {
            $s_output = $s_hoger ;
        } elseif ($_GET["getal"]==$i_teRaden) { // vergelijking hoeft eigenlijk niet
            $s_output = $s_goed ;
            // schrijf naar het bestand
            // fopen, fwrite, fclose kan ook met file_put_contents.
            $r_bestand = fopen('spelletje.log', 'a') ;
            $content = json_encode($_SESSION) . PHP_EOL;
            fwrite($r_bestand, $content) ;
            fclose($r_bestand) ;
            // zet het spel in de nieuwe startstand
            setcookie("aanHetSpelen","nee", time()-60*60*24*30) ;
            session_destroy() ;
        }
    } else {
        $s_output = $s_welkom ;
    }
    return $s_output ;
}