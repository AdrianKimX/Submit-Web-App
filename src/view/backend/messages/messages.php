<?php
$sql= "SELECT * users where id='{$_SESSION['user_id']}'";
if($db->query($sql)){
$sql_query= $db->query($sql);


}





?>