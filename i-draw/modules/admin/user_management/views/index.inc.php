<?php
	require_once('../models/AdminModel.php'); 

	@session_start();

    $admin_model = new AdminModel;
    
    if ($user['level']!="admin") {
    header("Location: index.php");
    }

    if ($_POST['keyword'] != '') {
        $keyword = $_POST['keyword'];
        $users = $admin_model->getAllUser($keyword);
        header("Location: index.php?app=admin&action=user_management&keyword=$keyword");
        require_once("view.inc.php");

    }else if ($_GET['keyword'] != '') {
        $keyword = $_GET['keyword'];
        $users = $admin_model->getAllUser($keyword);
        require_once("view.inc.php");
        // header("Location: index.php?app=admin&action=user_management&keyword=$keyword");

    }else {
        $users = $admin_model->getAllUser();
        require_once("view.inc.php");
        // header("Location: index.php?app=admin&action=user_management");
    }
?>
