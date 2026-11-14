<?php 

$h_link='?page=home'; $m_link='?page=messages'; $s_link='?page=settings';$a_link='?page=account';$l_link='?page=login';
$house=null;$chat=null; $gear=null;$person=null;
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
}elseif($_GET['page']=='account'){
$person='-fill';
$a_link='#';
}elseif($_GET['page']=='login'){
$person='-fill';
$l_link='#';
}
}
?>
<div class='nav'>
<div class='logo'>Logo</div>
<div class='nav-link'>
<?php 
if (isset($_SESSION['user_id'])){ ?>

<a class='bi bi-house<?= $house ?>' href='<?=$h_link?>'></a>
<a class='bi bi-chat<?= $chat ?>' href='<?=$m_link?>'></a>
<a class='bi bi-gear<?= $gear ?>' href='<?=$s_link?>'></a>


<?php }else{?>


<a class='bi bi-box-arrow-in-right<?= $house ?>' href='<?=$l_link?>'>Login</a>





<?php }?>
</div>
</div>

