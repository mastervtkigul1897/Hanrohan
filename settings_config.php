<?php 
include('settings_database.php');

/* PAGE(S) CONFIG */
$title = "Rohan: Name | Home";
$auth = "Rohan: Name | Auth";
$itemmall = "Rohan: Geizan | Mall";
$copyright = "Rohan: Geizan";


/* SQL PREVENTION FOR GET METHOD */
$array_char = array("'","/","\\","*",":","!","?", "&", "%", "ù","^", "$", "=","¨","{","}","(",")","~","#","[","]","ç","à","é","€","§",";","¤","°","£","`","<",">");
$found = false;
foreach($_GET as $value)
foreach($array_char as $word){
if(substr_count($value, $word) > 0){
    $found = true;
    }
}


?>
