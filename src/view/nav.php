<?php 

$h_link='?page=home'; $m_link='?page=messages'; $s_link='?page=settings';
$house=null;$chat=null; $gear=null;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
$house='-fill';
$h_link='#';
    }elseif($_GET['page']=='messages'){
$chat='-fill';
$m_link='#';
    }elseif($_GET['page']=='settings'){
$gear='-fill';
$s_link='#';
    }

}


?>
<div class='nav'>
<a class='bi bi-house<?= $house ?>' href='<?=$h_link?>'></a>

<a class='bi bi-chat<?= $chat ?>' href='<?=$m_link?>'></a>
<a class='bi bi-gear<?= $gear ?>' href='<?=$s_link?>'></a>
</div>