<?php
require_once('../models/Community.php'); 
require_once('../models/ReportModel.php');

@session_start();

$report_model = new ReportModel;
$community_model = new Community;

$id = $_GET['group_id'];

$check_group_id = $report_model->getReportGroupByID($id);
$check_id_group = $check_group_id['id'];

$alert_not_found_group = '<script>alert("Sorry, System not found this group.");</script>';

if ($_GET['page'] == 'detail'){
    $id = $_GET['group_id'];
    if ($check_id_group != '') {
        $group = $community_model->getGroupByID($id);
        $users = $community_model->getMemberGroupByID($id);
        require_once("detail.inc.php");
    }else {
        echo $alert_not_found_group;
        header('location: index.php?app=member&action=community');
    }
}else if ($_GET['page'] == 'update'){ 
    require_once("update.inc.php");
}else if ($_GET['page'] == 'insert'){ 
    require_once("insert.inc.php");
}else if ($_GET['page'] == 'your_group'){ 
    require_once("group.inc.php");
}else{
    $group = $community_model->getAllGroup();
    require_once("view.inc.php");
}

?>
