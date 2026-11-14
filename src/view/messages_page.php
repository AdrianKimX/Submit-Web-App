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
  $chat_id_url= "?chat=".$_GET['chat'];
include_once "backend/messages/send_message.php";
?>
<span id='message_window'> Loading..</span>


 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])."?page=messages&chat=".$_GET['chat'] ;?>" method="POST" class="chat-form" id="chat-form" autocomplete="off">
      <input type="text" name="message" id="chat-input" placeholder="Type a message...">
      <button name="send" type="submit"><i class="bi bi-send-fill"></i></button>
    </form>
  </section>
<?php }else{
  $chat_id_url=null;
}
  ?>

</div>


<script>
let previousInfo = "";
let firstLoad = true;

function updateInfo() {
    const messageWindow = document.getElementById('message_window');
    if (!messageWindow) return;

    fetch('src/view/backend/messages/messaging_window.php<?=$chat_id_url?>')
        .then(response => response.text())
        .then(data => {
            if (data === previousInfo) return;

            // Read the scroll position at swap time (the user may have scrolled during the fetch)
            const oldBody = messageWindow.querySelector('.chat-body');
            const savedScroll = oldBody ? oldBody.scrollTop : 0;

            messageWindow.innerHTML = data;
            previousInfo = data;

            const newBody = messageWindow.querySelector('.chat-body');
            if (!newBody) return;

            if (firstLoad) {
                // Initial load only: start at the latest message
                newBody.scrollTop = newBody.scrollHeight;
                firstLoad = false;
            } else {
                // JS refresh: keep the user exactly where they were
                newBody.scrollTop = savedScroll;
            }
        })
        .catch(error => console.error('Error fetching info:', error));
}

updateInfo();
setInterval(updateInfo, 2000);
</script>

<script src="view/view.js" defer></script>
