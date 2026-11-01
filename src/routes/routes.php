<?php 



$routes=[
"home"=>"/../view/home_page.php",
"login"=>"/../view/login_page.php"
    ];

if(isset($_GET['page'])){
if(isset($routes[$_GET['page']])){
    include_once __DIR__. $routes[$_GET['page']];
    
}else{
}
}else{

}


?>