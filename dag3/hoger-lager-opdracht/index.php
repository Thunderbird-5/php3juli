<?php
// initialisatie
// insluiten init.class.php
require_once 'classes/init.class.php';
require_once 'classes/main.class.php';
require_once 'classes/input.class.php';
require_once 'classes/lang.class.php';
// insluiten tekst strings (array of losse variabelen)
require_once "inc/teksten.php" ;
// hoofdmap vastleggen (voor paden bij insluiten)
define('APPLICATIE',realpath(dirname(__FILE__))) ;
// starten met instantieren van de init class
$o_init = new Init(1,10) ;
// draaien van het spel
$o_main = new Main($o_init);
$o_input = new Input ;
$o_taal = new Lang($teksten,$o_input->taal) ;
$s_output = $o_taal->output($o_main->spelcontrole($o_input->geraden)) ;
// alles insluiten wat ik maar nodig heb (model, view en controller)
require_once "templates/page.template.html.php" ; // genereert de output pagina