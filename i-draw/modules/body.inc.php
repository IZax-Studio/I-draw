<?php

if ($_GET['action'] == 'profile'){
    echo "Profile!";
}else if ($_GET['action'] == 'work'){ 
    echo "Work!";
}else if ($_GET['action'] == 'community'){ 
    echo "Community!";
}else{
    require_once("views/view.inc.php");
}