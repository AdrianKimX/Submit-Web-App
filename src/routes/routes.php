<?php 
$routes=[
"home"=>"/../view/home_page.php",

"settings"=>"/../view/settings_page.php",
"register"=>"/../view/register_page.php",
"messages"=>"/../view/messages_page.php",
"account"=>"/../view/account_page.php",
"logout"=>"/../view/backend/logout/logout.php"
    ];

 $no_session_routes=[
"login"=>"/../view/login_page.php",
"index"=>"src/view/index_page.php"
    ];




if(isset($_SESSION['user_id'])){ 

if(isset($_GET['page'])){
if(isset($routes[$_GET['page']])){

    include_once __DIR__. $routes[$_GET['page']];
    
}else{
   
    include_once "src/view/home_page.php";

}
}else{
   
 include_once "src/view/home_page.php";
}


}else{

if(isset($_GET['page'])){
if(isset($no_session_routes[$_GET['page']])){

    include_once __DIR__. $no_session_routes[$_GET['page']];
    
}else{
   
    include_once "src/view/index_page.php";

}
}else{
   
 include_once "src/view/index_page.php";
}
}

?>