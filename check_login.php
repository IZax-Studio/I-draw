<?php
session_start();
require_once('i-draw/models/UserModel.php');
if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $model = new UserModel;
    $user = $model->getLogin($username,$password);

    
	
    if(count($user) > 0){
		
        $_SESSION['username'] = $user[0];

        echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.refresh();</script>";
    }else{
        echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.error();</script>";
    }
}else{
    header("Location index.php");
}


?>