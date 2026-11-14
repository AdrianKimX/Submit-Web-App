



<?php 

$sql ="SELECT * FROM users where user_id='{$_GET['chat']}'";

if($db->query($sql)){
    
$sql_query=$db->query($sql);
if($sql_query->num_rows==1){
$message='';
$row=$sql_query->fetch_assoc();

?>

<div class="chat-header"><span class="avatar" id="chat-avatar"></span><b id="chat-title"><?= $row['username']?></b></div>

    <div class="chat-body" id="chat-body">
<?php


$sql2= "SELECT * FROM msg where (incoming_msg_id={$row['user_id']} OR  outgoing_msg_id={$row['user_id']})
 AND
(incoming_msg_id={$_SESSION['user_id']} OR  outgoing_msg_id={$_SESSION['user_id']}) 
ORDER BY date_created asc  ";



if($db->query($sql2)){
  
$sql_query2=$db->query($sql2);
if($sql_query2->num_rows>0){

while($row2=$sql_query2->fetch_assoc()){

$outgoing_msg = "<div class='bubble me'><a href='/?page=message&chat=".$row['user_id']."'><b>".$row['username']."</b><br><small>you: ".$row2['message']. "</small></a></div>";
$incoming_msg ="<div class='bubble them'><a href='/?page=message&chat=".$row['user_id']."'><b>".$row['username']."</b><br><small>".$row2['message']. "</small></a></div>" ;

$messages=$row2['outgoing_msg_id'] == $_SESSION['user_id'] ? $outgoing_msg: $incoming_msg;


$message .= $messages;


}

}
}
echo $message;



}else{


  header("location: ?page=messages");
  exit;
}


}


 




?>  
</div>
