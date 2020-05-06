<?php
require_once('../models/UserModel.php'); 

@session_start();

$user_model = new UserModel;

$id = $_GET['profile_id'];

if ($_GET['action'] == 'profile'){
    $users = $user_model->getUserByCode($id);
    $post = $user_model->getPostByCode($id);
    if ($users['username'] != '') {
        require_once("view.inc.php");
    }
    else {
        $user_id = $user['id'];
        echo '<script>window.location = "index.php?app=admin&action=profile&profile_id=',$user_id,'"</script>';
    }
}else if ($_GET['action'] == 'update'){ 
    echo "Update!";
}else{
    require_once("view.inc.php");
}

?>
