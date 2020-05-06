<?php
require_once('../models/ReportModel.php'); 
require_once('../models/Community.php'); 

@session_start();

$report_model = new ReportModel;
$community_model = new Community;

$id = $_GET['group_id'];

$group_id = $report_model->getReportGroupByID($id);
$check_group = $community_model->getAllGroup();
$check_id = $check_group['id'];
$group_report = $group_id['id'];

if ($group_report != '') {
    if ($_GET['group_report'] == 'negative_group') {
        require_once("negative_group.inc");
    }else {
        require_once("view.inc.php");
    }
}else {
    header("location: index.php");
    // require_once("view.inc.php");
}