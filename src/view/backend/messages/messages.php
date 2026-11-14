<?php
$sql= "SELECT * FROM  users where user_id!='{$_SESSION['user_id']}' ";
if($db->query($sql)){
$sql_query= $db->query($sql);
$output=null;
if($sql_query->num_rows<=0){

}else{
     $convo_list_arr = array();
while($row=mysqli_fetch_assoc($sql_query)){

$sql_msg= "SELECT * FROM msg where (incoming_msg_id={$row['user_id']} OR  outgoing_msg_id={$row['user_id']})
 AND
(incoming_msg_id={$_SESSION['user_id']} OR  outgoing_msg_id={$_SESSION['user_id']}) 
ORDER BY date_created desc  ";

if($db->query($sql_msg)){
$sql_query2= $db->query($sql_msg);
if($sql_query2->num_rows>0){
   
$row2=mysqli_fetch_assoc($sql_query2);
$row_user_id=$row['user_id'];
$msg=$row2['message'];



        $row['last_message_id'] =isset($row2['outgoing_msg_id']) ? $row2['outgoing_msg_id'] : '';
        $row['last_message'] =isset($row2['message']) ? $msg : '';
        $row['last_msg_status'] =isset($row2['msg_status']) ? $row2['msg_status'] : '';
        $row['last_message_created'] =isset($row2['message']) ? $row2['date_created'] : '';
       // $row['last_msg_sound']=isset($row2['msg_sound']) ?  $row2['msg_sound'] :'';

 $convo_list_arr[strtotime($row['last_message_created'])] = $row;
        krsort($convo_list_arr);

}

}


}
 foreach($convo_list_arr as $sorted_row){
 if(strlen($sorted_row['last_message']) > 11) {
       $sorted_row['last_message']= substr($sorted_row['last_message'], 0, 11).'...';
        }else{
           $sorted_row['last_message'];
        }
       
                $msg =$sorted_row['last_message'];

    
        
        
        $output .= '<a href="/?page=messages&chat='. $sorted_row['user_id'] .'">
        <div class="chat-item">
      <span class="avatar"></span>
        <div>    <b>'.  $sorted_row['username'] . '</b>
            <small>'. ($sorted_row['last_message_id'] == $_SESSION['user_id']  ? 'You: ':''). $msg.'</small>
       
 </div></div></a>'; 
 

 }

}

echo $output;



file_put_contents("convo.json",json_encode($convo_list_arr));
}




?>   