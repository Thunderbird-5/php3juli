<?php
# comment alle blokken uit behalve het blok wat je wilt testen

# sluit de connectie in
require_once("../inc/mysqli_pro_con.php") ;
# met mysqli_query worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$db_query = "select * from evengetallen" ;
$db_con_result = mysqli_query($db_con, $db_query) ;

# uitlezen van het resultaat
while ($row = mysqli_fetch_array($db_con_result , MYSQLI_BOTH)) {
    echo $row['getal'] . " <- key en de waarde: " . $row['getalnaam'] . "<br>" ;
    foreach ($row as $key => $value) {
        echo count($row) . '<br>' ;
    }
}

# sluit de connectie in
require_once("../inc/mysqli_obj_con.php") ;
# met mysqli_query worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$db_query = "select 'hallo wereld'" ;
$db_result =  $db->query($db_query) ;

# uitlezen van het resultaat
while ($row = $db_result->fetch_array(MYSQLI_BOTH)) {
    var_dump($row) ;
    echo $row['hallo wereld'] ;
}

# verbinding maken en functie definieren (uit basis php)
require_once("../inc/mysql_pdo_con.php") ;
# met het PDO object worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$query = "select 'hallo wereld'";

$db_query = $db->query($query);
$db_pdo_result = $db_query->fetchAll(PDO::FETCH_OBJ);

foreach($db_pdo_result as $row) {
    // var_dump($row) ;
    echo $row->{'hallo wereld'} ;
}