<?php



function db($x){
$conn= @mysqli_connect($x[0],$x[1], $x[2], $x[3]);

if(!$conn){
echo "cannot connect";
}else{
    return $conn;

}
}



?>