<?php


$sql= "SELECT * FROM  users where user_id!='{$_SESSION['user_id']}' ";
if($db->query($sql)){
    $user_list='';
$sql_query= $db->query($sql);
$output=null;
$num_users=$sql_query->num_rows;
if($sql_query->num_rows<=0){
$num_users=0;
}else{
    
while($row=mysqli_fetch_assoc($sql_query)){


$user_list.= '<li><span class="avatar">A</span><div><b>'.$row['username'].'</b><small>Online</small></div><a href="?page=messages&chat='.$row['user_id'].'" class="chip">Message</a></li>';


}



}
}




?>   