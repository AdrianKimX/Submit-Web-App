<?php 



?>


<div class="messaging-content">





<aside class="chat-list">
    <div class="chat-list-head">Chats</div>
   <?php 

include_once "backend/messages/messages.php";

?>

  </aside>

  <section class="chat-window">

     <?php 
if(isset($_GET['chat'])){



include_once "backend/messages/convo.php";


}
?>







</div>



<script src="view/view.js" defer></script>
