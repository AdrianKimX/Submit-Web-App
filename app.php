<?php

require __DIR__. '/src/functions/functions.php';
require __DIR__.'/src/db/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" integrity="sha384-Bk5cbLkZQ5raZ0+H2/+VbfYx3WpvxvQK4zqXZr7sYODuaX7bKXoSOnipQxkaS8sv" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet" >
        <link href="assets/css/view.css" rel="stylesheet" >
  
    <title>Submit</title>
</head>
<body>
  <?php
  session_start();
if ($_SERVER['REQUEST_URI']!='/?page=login'){
 include "src/view/nav.php";
}
   ?>
<div class='main'>

<?php include "src/routes/routes.php";  ?>


</div> 
</body>
</html>