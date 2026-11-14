<?php  
session_start();
function db($x){
$conn= @mysqli_connect($x[0],$x[1], $x[2], $x[3]);

if(!$conn){
echo "cannot connect";
}else{
    return $conn;

}
}


if(file_exists("../../../db/db.json")){
 
$db_decode=json_decode(file_get_contents('../../../db/db.json'), true);

$db=db($db_decode);



}else{
    echo "cant find db.json";
}

  

include_once "convo.php";





?>