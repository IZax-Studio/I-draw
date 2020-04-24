<div class="start" style="background-image: url(https://i.pinimg.com/originals/50/15/7f/50157f642817c455e2ed7028e6ad31a8.gif);height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
<?php
if ($_GET['action'] == 'insert'){
    require_once($path.'insert.inc.php');
}else if ($_GET['action'] == 'login'){ 
    require_once($path.'login.inc.php');
}else{
    require_once($path.'message-box.inc.php');
}
?>

</div>
</div>