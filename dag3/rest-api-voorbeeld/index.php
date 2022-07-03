<?php
/*
*   Start van de rest applicatie
*
*   Hier worden de credentials geladen en de volgorde van klassen via bootstrap
*   url [application root]index.php/user/list?limit=3
*/
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode( '/', $uri ); // hier komt een numeric array terug met 
// let op! absolute referenties naar array key. (uri afhankelijk)
if ((isset($uri[4]) && $uri[4] != 'user') || !isset($uri[5])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
 
require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
 
$objFeedController = new UserController();


// let op! absolute referenties naar array key. (uri afhankelijk)
$strMethodName = $uri[5] . 'Action';
$objFeedController->{$strMethodName}(); // methode listAction uit UserController wordt aangeroepen.

// url http://localhost/dag3/rest-api-voorbeeld/index.php/user/list?limit=3

?>