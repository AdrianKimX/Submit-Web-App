<?php

if(isset($_POST['register'])){
$username=trim($_POST['username']);
$password= trim($_POST['password']);

$rand= rand(9000009,time());

//md5() will be use to next update

if($password!=null && $username!=null){

$sql= "SELECT * FROM users where username='{$username}'";
if($db->query($sql)){
    $sql_query= $db->query($sql);
    if($sql_query->num_rows==0){
$sql_register="Insert into users(user_id, username, password)
Values('{$rand}', '{$username}', '{$password}')";
if(mysqli_query($db, $sql_register)){
  header('location: ?page=home');
exit;
 

}else{
echo 'error with registartion  query';
}


    }else{
       echo 'the username'.$username.' was already taken';
    }
   



}else{
    echo 'error with the query';
}


}else{
    echo 'Please complete the input field not blank';
}

}






?>