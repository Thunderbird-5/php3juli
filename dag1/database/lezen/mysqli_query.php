<?php
# sluit de connectie in
require_once("../inc/mysqli_pro_con.php") ;
# met mysqli_query worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$db_query = "select * from evengetallen" ;
$db_con_result = mysqli_query($db_con, $db_query) ;
//var_dump($db_con_result) ;

# sluit de connectie in
require_once("../inc/mysqli_obj_con.php") ;
# met mysqli_query worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$db_query = "select * from evengetallen" ;
$db_result =  $db->query($db_query) ;
// var_dump($db_result) ;
