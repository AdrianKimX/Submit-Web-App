<?php




if(file_exists('src/db/db.json')){
 
$db_decode=json_decode(file_get_contents('src/db/db.json'), true);

$db=db($db_decode);



}








?>