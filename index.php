<?php
session_start();
include("i-draw/models/BaseModel.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('i-draw/views/header.inc.php') ?>
    </head>
    <body>
        <!-- <div id="refresh-spinner"></div> -->
        <div> 
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php require_once("i-draw/views/menu.inc.php"); ?> 
            </nav>
            <div id="page-wrapper" style="min-height: calc(100vh - 51px);">
                <?php require_once("i-draw/views/body.inc.php"); ?>
            </div> 
        </div> 
        <?php require_once('i-draw/views/footer.inc.php'); ?>
    </body>
</html>