<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="i-draw/template/css/css-main.css">
<link rel="icon" href="i-draw/template/image/logo/icon_hd.png" type="icon_hd/png">
<!-- <link href="i-draw/template/css/loader.css" rel="stylesheet"> -->
<link href="i-draw/template/dist/css/bootstrap-select.css" rel="stylesheet">

<title>I-Draw! | <?php

if ($_GET['action'] == 'insert'){
    echo "Register!";
}else if ($_GET['action'] == 'login'){ 
    echo "Login!";
}else{
    echo "Index!";
}

?>
</title>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

