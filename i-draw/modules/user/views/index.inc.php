<?php
require_once('../models/UserModel.php'); 

@session_start();

$user_model = new UserModel;

$id = $_GET['profile_id'];

if ($_GET['action'] == 'profile'){
    $users = $user_model->getUserByCode($id);
    $post = $user_model->getPostByCode($id);
    require_once("view.inc.php");
}else if ($_GET['action'] == 'update'){ 
    echo "Update!";
}else{
    require_once("view.inc.php");
}

?>
