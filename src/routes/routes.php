<?php 
$routes=[
"home"=>"/../view/home_page.php",
"login"=>"/../view/login_page.php",
"settings"=>"/../view/settings_page.php",
"register"=>"/../view/register_page.php",
"messages"=>"/../view/messages_page.php",
"account"=>"/../view/account_page.php"
    ];

if(isset($_GET['page'])){
if(isset($routes[$_GET['page']])){
 
    include_once __DIR__. $routes[$_GET['page']];
    
}else{
   
    include_once "src/view/index_page.php";

}
}else{
   
 include_once "src/view/index_page.php";
}
?>