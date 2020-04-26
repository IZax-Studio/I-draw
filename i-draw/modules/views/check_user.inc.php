<?php
session_start();
require_once('../models/UserModel.php');
if(isset($_SESSION['level'])){

    $level = $_SESSION['level'];
    $model = new UserModel;
    $user = $model->getLevel($level);

    
	
    if(count($user) > 0){
		
        $_SESSION['level'] = $user;

        echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.refresh();</script>";
    }else{
        echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.error();</script>";
    }
}else{
    header("Location index.php");
}


?>