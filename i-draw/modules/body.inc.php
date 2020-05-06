<?php
require_once('../models/UserModel.php'); 

@session_start();

$user_model = new UserModel;

if ($_GET['action'] == 'profile'){
    require_once("user/views/index.inc.php");
}else if ($_GET['action'] == 'work'){ 
    echo "Work!";
}else if ($_GET['action'] == 'community'){ 
    require_once("community/views/index.inc.php");
}else if ($_GET['action'] == 'public_chat'){ 
    if ($user['rank'] == 'vip'){
        $rank = '';
        $private_click = 'cursor:no-drop;';
        $disable_click = '';

    }else {
        $rank = 'readonly';
        $private_click = 'cursor:no-drop;';
        $disable_click = 'disabled';
    }
    require_once("views/public_chat_page.inc.php");
}else if ($_GET['action'] == 'user_management'){ 
    require_once("admin/user_management/views/index.inc.php");
}else{
    $p_chat = $user_model->getPublicChatBy();
    require_once("views/view.inc.php");
}
// ========================================================================Send Messages
if ($_GET['action'] == 'send'){

    $user_name = $_POST['account_name'];
    $messages = $_POST['chat_msg'];

    if ($user['level_int'] != '0') {
        $user_model->insertPublicChat($user_name,$messages);
    }
    else if ($user['level_int'] == '0') {
        echo '<script>alert("admin or vip only can send messages");</script>';
    }

    
    echo  ("<script> window.history.back(); </script>");

}
// ========================================================================Report
if ($_GET['action'] == 'report'){ 
    require_once("report/index.inc.php");
}