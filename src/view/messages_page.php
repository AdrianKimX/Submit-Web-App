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




 <form class="chat-form" id="chat-form" autocomplete="off">
      <input type="text" id="chat-input" placeholder="Type a message...">
      <button type="submit"><i class="bi bi-send-fill"></i></button>
    </form>
  </section>


</div>



<script src="view/view.js" defer></script>
