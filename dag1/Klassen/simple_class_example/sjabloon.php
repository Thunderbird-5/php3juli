<?php
# sjabloon verwerken
include "template.class.php";


$template = new Template;

$template->load("sjabloon.html");

$template->replace("title", "My Template Class");

$template->replace("name", "William");

$template->replace("datetime", date("m/d/y"));

$template->publish();

?>