<?php 
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../models/UserModel.php');

$user_model = new UserModel;

$users = $user_model->getUserByCode($_SESSION['id']);;

echo json_encode($users);
?>