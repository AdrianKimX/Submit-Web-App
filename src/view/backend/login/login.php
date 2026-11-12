<?php
if(!isset($_SESSION['user_id'])){
if(isset($_POST['login'])){
$username=trim($_POST['username']);
$password= trim($_POST['password']);


//md5()

if($password!=null && $username!=null){

$sql= "SELECT * FROM users where username='{$username}'";
if($db->query($sql)){
    $sql_query= $db->query($sql);
    $row='';
    $row = mysqli_fetch_assoc($sql_query);
if($password===$row['password'] ){
$_SESSION['user_id']= $row['user_id'];

header('location: ?page=home');
exit;

}

}else{
    echo 'error with the query';
}


}

}


}else{
    header('location: ?page=home');
    exit;
}



?>