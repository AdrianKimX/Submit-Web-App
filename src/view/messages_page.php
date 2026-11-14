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

include_once "backend/messages/send_message.php";
?>




 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?page=messages&chat=".$_GET['chat'] ;?>" method="POST" class="chat-form" id="chat-form" autocomplete="off">
      <input type="text" name="message" id="chat-input" placeholder="Type a message...">
      <button name="send" type="submit"><i class="bi bi-send-fill"></i></button>
    </form>
  </section>
<?php }
  ?>

</div>



<script src="view/view.js" defer></script>
