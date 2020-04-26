<?php

ob_start();
@session_start();
date_default_timezone_set('Asia/Bangkok');

    //--------------------------------------------------------------- Ckeck User ---------------------------------------------------///////////////////
if(isset($_SESSION['username'])){ 
    $_SESSION['url'] = $_SERVER[REQUEST_URI];
    // header('Location: ../../i-draw/modules/index.php');
}else {
    header('Location: ../../logout.php');
}
    //------------------------------------------------------------------------------------------------------------------------------///////////////////
?>


<!DOCTYPE html>
<html class="fade-in" lang="en">
    <head>
        <?php require_once('views/header.inc.php') ?>
    </head>
    <body>
        <!-- <div id="refresh-spinner"></div> --> 
        <div class="content">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php require_once("views/menu_top.inc.php"); ?> 
            </nav>
            <table style="width:100%">
            <tr>
            <td style="width: 20%;margin-top: auto;vertical-align: top;padding:25px;">
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php require_once("views/menu_left.inc.php"); ?> 
            </nav>
            </td>
            <td>
                <div id="page-wrapper" class="start" style="min-height: calc(100vh - 51px);">
                    <?php require_once("body.inc.php"); ?>
                </div>
            </td>
            </table>
        </div> 
        <?php require_once('views/footer.inc.php'); ?>
    </body>
</html>