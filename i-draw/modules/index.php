<?php

ob_start();
@session_start();
date_default_timezone_set('Asia/Bangkok');
include("../models/BaseModel.php");

    //--------------------------------------------------------------- Ckeck User ---------------------------------------------------///////////////////
// if(isset($_SESSION['username'])){ 
//     $_SESSION['url'] = $_SERVER[REQUEST_URI];
//     // header('Location: ../../i-draw/modules/index.php');
// }else {
//     header('Location: ../../logout.php');
// }


$user = "";
if (isset($_SESSION['username']['id'])) {
    $user = $_SESSION['username'];
    // echo '<script>window.location = "./dashboard";</script>';
} else {

    header('Location: ../../logout.php');
}
    //----------------------------------------------------------------- Check level ------------------------------------------------------///////////////////
$level = $user['level'];
if ($level == "admin") {
    $level_color = "gold";
}else {
    $level_color = "silver";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('views/header.inc.php') ?>
    </head>
    <body>
        <div class="page">
            <!-- <div id="refresh-spinner"></div> --> 
            <div class="content">
            <table style="width:100%">
                <tr>
                    <td colspan="2">
                        <div id="navbar">
                            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                                <?php require_once("views/menu_top.inc.php"); ?> 
                            </nav>
                        </div>
                </td>
                </tr>    
                <tr>
                <td style="width: 20%;margin-top: auto;vertical-align: top;padding:25px;padding-left: 0px;padding-top: 150px;">
                    <div id="navbar-left">
                        <nav style="margin-bottom: 0;border-color: white;background-color: white;">
                            <?php require_once("views/menu_left.inc.php"); ?> 
                        </nav>
                    </div>
                </td>
                <td style="padding-top: 20vh;padding-right: 25px;">
                    <div class="start" style="min-height: calc(100vh - 51px);">
                        <?php require_once("body.inc.php"); ?>
                    </div>
                </td>
                </table>
            </div> 
            <?php require_once('views/footer.inc.php'); ?>
        </div>
        <div id="loading"></div>
    </body>
</html>