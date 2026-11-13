<?php



$sql= "SELECT * FROM  users where user_id!='{$_SESSION['user_id']}' ";
if($db->query($sql)){
$sql_query= $db->query($sql);
if($sql_query->num_rows>0){
while($row=mysqli_fetch_assoc($sql_query)){



$sql_msg= "SELECT * FROM msg where incoming_msg_id='{$row['user_id']}' AND  outgoing_msg_id='{$_SESSION['user_id']}' OR 
incoming_msg_id='{$_SESSION['user_id']}' AND  outgoing_msg_id='{$row['user_id']}' ORDER BY date_created Desc  ";

if($db->query($sql_msg)){
$sql_query2= $db->query($sql_msg);
if($sql_query2->num_rows>0){
   
$row2=mysqli_fetch_assoc($sql_query2);
$row_user_id=$row['user_id'];
$msg=$row2['message'];
$outgoing_msg = "<div class='chat-item outgoing-latest-msg'><a href='/?page=message&chat=".$row_user_id."'><b>".$row['username']."</b><br><small>you: ".$msg. "</small></a></div>";
$incoming_msg ="<div class='chat-item incoming-latest-msg'><a href='/?page=message&chat=".$row_user_id."'><b>".$row['username']."</b><br><small>".$msg. "</small></a></div>" ;

$message=$row2['outgoing_msg_id'] == $_SESSION['user_id'] ? $outgoing_msg: $incoming_msg;



$message_array[]= $message;

}



}

}
}

}


?>