<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<title>I-Draw! | <?php

if ($_GET['action'] == 'profile'){
    echo "Profile! : ";
    echo $user['account_name'];
}else if ($_GET['action'] == 'work'){ 
    echo "Work!";
}else if ($_GET['action'] == 'community'){ 
    echo "Community!";
}else{
    echo "Dashboard!";
}

?>
</title>


<link rel="stylesheet" href="../template/css/css-main.css">
<link rel="icon" href="../template/image/logo/icon_hd.png" type="icon_hd/png">
<!-- <link href="../template/css/loader.css" rel="stylesheet"> -->
<link href="../template/dist/css/bootstrap-select.css" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

