<?php 

include_once "backend/messages/messages.php";

?>


<div class="messaging-content">





<aside class="chat-list">
    <div class="chat-list-head">Chats</div>
   <?php 

foreach($message_array as $my_messages){

echo  $my_messages;
}

?>
  </aside>

  <section class="chat-window">
    <div class="chat-header"><span class="avatar" id="chat-avatar">A</span><b id="chat-title">Alex</b></div>

    <div class="chat-body" id="chat-body">
     
      <div
       class="bubble them"> <p>Nov 10 2026 22:30 PM</p><br>Hey! How are you?</div>
      <div class="bubble me"><p>Nov 10 2026 22:35 PM</p><br>I'm good, you?</div>
      <div class="bubble them"><p>Nov 10 2026 22:36 PM</p><br>Doing great. See you later!</div>
    </div>

    <form class="chat-form" id="chat-form" autocomplete="off">
      <input type="text" id="chat-input" placeholder="Type a message...">
      <button type="submit"><i class="bi bi-send-fill"></i></button>
    </form>
  </section>





</div>



<script src="view/view.js" defer></script>
