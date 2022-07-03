<?php
session_start();

$i_laagste = 1 ;
$i_hoogste = 10 ;
if(isset($_COOKIE['aanHetSpelen']) && $_COOKIE['aanHetSpelen'] == "ja" ) :
    $i_teRaden = $_SESSION["teRaden"] ;
else :
    $i_teRaden = random_int($i_laagste, $i_hoogste) ; // i = integer
    setcookie("aanHetSpelen","ja", time()+60*60*24*30) ; // 30 dagen
    $_SESSION["teRaden"] = $i_teRaden ;
    $_SESSION["pogingen"] = array() ;
endif ;
$s_welkom = "Welkom bij dit spel" ;
$s_hoger = "U moet hoger raden" ;
$s_lager = "U moet lager raden" ;
$s_goed = "U heeft goed geraden" ;
$html_form_start = '<form action="" method="get">' ;
$html_form_end = '</form>' ;
$html_form_content = '' ; // lege string, zou ook null mogen zijn
for($teller = $i_laagste ; $teller <= $i_hoogste ; $teller++){
    $html_form_content .= '<input type="submit" value="'.$teller.'" name="getal">' ;
}

// hier komt de motor
// insluiten functies
include 'motor.php' ;
$s_output = motor($i_teRaden, $s_lager, $s_hoger, $s_goed, $s_welkom) ;
// einde van het programma stelt de output samen

$html_form_output = $html_form_start . $html_form_content . $html_form_end ;
// ten slotte de output (html en zo...)

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Een spelletje hoger - lager</title>
</head>
<body>
    <?php echo $s_output ; ?>
    <?php echo $html_form_output ; ?>
    <!-- <pre><?php var_dump($_GET) ; ?>
         <?php var_dump($_SESSION) ; ?>
         <?php echo json_encode($_SESSION) ; ?>
    </pre> -->
</body>
</html>