<?php
require_once('../models/UserModel.php'); 

@session_start();

$user_model = new UserModel;

if ($_GET['action'] == 'profile'){
    require_once("user/views/index.inc.php");
}else if ($_GET['action'] == 'work'){ 
    echo "Work!";
}else if ($_GET['action'] == 'community'){ 
    echo "Community!";
}else if ($_GET['action'] == 'public_chat'){ 
    require_once("views/public_chat_page.inc.php");
}else if ($_GET['action'] == 'user_management'){ 
    require_once("admin/user_management/views/index.inc.php");
}else{
    $p_chat = $user_model->getPublicChatBy();
    require_once("views/view.inc.php");
}

if ($_GET['action'] == 'send'){

    $user_name = $_POST['account_name'];
    $messages = $_POST['chat_msg'];

    $user_model->insertPublicChat($user_name,$messages);
    
    echo  ("<script> window.history.back(); </script>");

}
