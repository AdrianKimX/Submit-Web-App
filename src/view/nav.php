<?php 

$house=null;$chat=null; $gear=null;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
$house='-fill';
    }elseif($_GET['page']=='messages'){
$chat='-fill';
    }elseif($_GET['page']=='settings'){
$gear='-fill';
    }

}


?>
<div class='nav'>
<a class='bi bi-house<?= $house ?>' href='#'></a>

<a class='bi bi-chat<?= $chat ?>' href='#'></a>
<a class='bi bi-gear<?= $gear ?>' href='#'></a>
</div>