<?php
// initialisatie
// insluiten init.class.php
require_once "classes/init.class.php";
// insluiten tekst strings (array of losse variabelen)
require_once "inc/teksten.php" ;
// starten met instantieren van de init class
$init_object = new Init();
$i_laagste = $init_object->i_laagste ;
$i_hoogste = $init_object->i_hoogste ;
// hoofdmap vastleggen (voor paden bij insluiten)
define('APPLICATIE',realpath(dirname(__FILE__))) ;
// alles insluiten wat ik maar nodig heb (model, view en controller)
require_once "templates/page.template.html.php" ;
