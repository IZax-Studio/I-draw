<?php
// require_once('../models/ReportModel.php'); 

// @session_start();

// $community_model = new Community;

// $keyword = $_GET['profile_id'];

if ($_GET['report_type'] == 'group') {
    require_once("group/views/index.inc.php");
}else {
    header("location: index.php");
}