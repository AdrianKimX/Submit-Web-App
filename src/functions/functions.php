<?php



function db($x){
$conn= @mysqli_connect($x[0],$x[1], $x[2], $x[3]);

if(!$conn){
echo "cannot connect";
}else{
    return $conn;

}
}


function user_type($x){

$sql="SELECT user_id FROM users where user_id='{$X}'";

if($db->query($sql)){

$row_user_type = $db->query($sql)->fetch_assoc();

echo $row_user_type['user_type'];
}else{
    echo 'error with the query';

}

}



?>