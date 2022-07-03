<?php
session_start();
# een spelletje Hoger-Lager (raden van een getal)
# programma (functionaliteit)
# interface (voorkant, hoe ziet het er uit)
/*
1. intro-uitleg-welkom- eerste pagina
   - alles in de beginstand
   - interface wordt getoond
2. er moet een getal worden doorgegeven. (hoe doen we dat?)
   - klikken (links)
   - invullen (formulier) -> verzenden (GET / POST)
   - rechtreeks in de adresbalk (url)
3. programma gaat kijken of het doorgegeven getal hoger of lager is
   - vergelijken
   - resultaat naar de bezoeker sturen
   - startpositie voor het getal weer door te geven
    OF
     mogelijkheid om opnieuw te beginnen
*/
# variabelen die we nodig hebben
#$teRadenGetal = 5 ;
#$teRadenGetal = "vijf" ;
$i_geraden = 0 ;# getal wat de bezoeker heeft doorgegeven
$i_ondergrens = 1 ; $i_bovengrens = 10 ;
# als er al een sessievariabele is ingesteld moet ik die waarde in i_teRaden stoppen
if (isset($_SESSION['i_teRaden'])) {
  #doe dan de waarde van i_teRaden in $i_teRaden
  $i_teRaden = $_SESSION["i_teRaden"] ;
} else {
  # maak een nieuw sessievariabele met een nieuw getal
  $i_teRaden = random_int($i_ondergrens, $i_bovengrens) ; # i = integer Willekeurig: random van 1 tot 10
  #setcookie('i_teRaden', $i_teRaden, time()+3600); # name, value, expiration time
  $_SESSION['i_teRaden'] = $i_teRaden ;
}
#$f_kommaGetal = 5.67 ; # f = float = kommagetal
$s_welkom = "Welkom bij het spelletje hoger lager." ; # s = string
#$b_waarheid = true ; # b = boolean = true/false
$s_instructie = "Raadt een geheel getal tussen $i_ondergrens en $i_bovengrens." ;
# maak de knoppen voor het formulier aan
$s_formulierknoppen = "" ;
for ($i=$i_ondergrens; $i <= $i_bovengrens; $i++) {  # $i++  is ook: $i = $i + 1   $i+=2 ?
  $s_formulierknoppen = $s_formulierknoppen .
            '<input type="submit" name="waarde" value="'.$i.'">' ;
}
# is het juiste getal geraden?
$s_uitkomst = "U heeft nog niet geraden." ;
if ( isset($_POST["waarde"]) ) {
    $_SESSION['beurten'][] = $_POST["waarde"] ;
    if ($i_teRaden == $_POST["waarde"]) {
      // dan is het goed
      $s_uitkomst = "JAHOE!! Helemaal goed!" ;
      $i_teRaden = random_int($i_ondergrens, $i_bovengrens) ;
      #setcookie('i_teRaden', $i_teRaden, time()+3600) ;
      $_SESSION['i_teRaden'] = $i_teRaden ;
      #setcookie('i_teRaden', $i_teRaden, time()-3600); # cookie in verleden
    } else
    if ($i_teRaden < $_POST["waarde"]) {
      // dan is het goed
      $s_uitkomst = "U moet lager raden." ;
    } else
    if ($i_teRaden > $_POST["waarde"]) {
      // dan is het goed
      $s_uitkomst = "U moet hoger raden." ;
    }
}
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Een spelletje Hoger of Lager</title>
  </head>
  <body>
    <h1><?php echo $s_welkom ; ?></h1>
    <p><?php echo $s_instructie ; ?></p>
    <form class="" action="" method="post">
      <?php echo $s_formulierknoppen ; ?>
    </form>
    <h2><?php echo $s_uitkomst ; ?></h2>
<pre>
<?PHP echo '$i_teRaden: ' . $i_teRaden ; ?>

<?PHP echo 'POST: ' ; var_dump($_POST); ?>

<?PHP echo 'GET: ' ; var_dump($_GET); ?>

<?PHP echo 'SESSION: ' ; var_dump($_SESSION); ?>

<?PHP echo 'COOKIE: ' ; var_dump($_COOKIE); ?>
</pre>

  </body>
</html>
