<?php
	require_once('../models/AdminModel.php'); 

	@session_start();

	$admin_model = new AdminModel;

	$users = $admin_model->getAllUser();

require_once("view.inc.php");
?>
