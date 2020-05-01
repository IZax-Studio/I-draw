<?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
<?php 
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../models/UserModel.php');

$user_model = NEW UserModel;

    // $user_name = mysqli_real_escape_string($db, $_POST['account_name']);
    // $messages = mysqli_real_escape_string($db, $_POST['chat_msg']);

    $user_name = $_POST['account_name'];
    $messages = $_POST['chat_msg'];

    // $user_name = "Sorano";
    // $messages = "เกิดไรขึ้นน้าาาาาา";

    if ($messages == '') {
        echo '<script language="javascript">';
        echo 'alert(The message was not sent successfully.)';  //not showing an alert box.
        echo '</script>';
    }else {
        $user_model->insertPublicChat($user_name,$messages);

    }




// ===============================================================================================================================

// session_start();
// require_once('../models/UserModel.php');
// if(isset($_POST['account_name']) && isset($_POST['chat_msg'])){

//     $user_name = $_POST['account_name'];
//     $messages = $_POST['chat_msg'];
//     $user_model = new UserModel;

//     // if ($messages != "") {
//     //     $user_model->insertPublicChat($user_name,$messages);
        
//     // }else {
//     //     echo "ข้อความ",$messages;
//     // }


//         if ($messages == '') {
//         echo '<script language="javascript">';
//         echo 'alert(The message was not sent successfully.)';  //not showing an alert box.
//         echo '</script>';
//     }else {
//         $user_model->insertPublicChat($user_name,$messages);
//         echo "<script>window.back();</script>";
//     }
//     echo "<script>window.back();</script>";

    // ===============================================================================================================================

	
//     if(count($p_chat) > 0){
		
//         $_SESSION['account_name'] = $p_chat[0];

//         echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.refresh();</script>";
//     }else{
//         echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.error();</script>";
//     }
// }else{
//     header("Location index.php");
// }


?>
