<?php 


if(isset($_POST['send'])){

$message= $_POST['message'];



$sql_user="SELECT * FROM users where user_id='{$_GET['chat']}'";
if($db->query($sql_user)){
$query= $db->query($sql_user);

if($query->num_rows==1){
$row_user=mysqli_fetch_assoc($query);



$rand_id=rand(time(), 900000);
$sql_insert="INSERT INTO  msg (msg_id, incoming_msg_id, outgoing_msg_id, message)
VALUES('{$rand_id}', '{$row_user['user_id']}', '{$_SESSION['user_id']}', '{$message}')";


if($db->query($sql_insert)){
$query_insert=$db->query($sql_insert);

header('location: ?page=messages&chat='.$_GET['chat']);
exit;
}


}

}



}





?>