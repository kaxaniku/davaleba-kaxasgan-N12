<?php
    session_start();
    include 'helpers/connection.php'; include 'helpers/funcs.php';
    check_root();
    logout();
    if(isset($_GET['SPage']) && $_GET['SPage']) {
        $SPage = $_GET['SPage'];
    } else {
        $SPage = 'dashboard';
    }

    if(isset($_GET['action']) && $_GET['action']) {
        $action = $_GET['action'];
    } else {
        $action = 'main';
    }
?>

<html>
<head>
    <title>e</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

    

    <?php

    include 'components/design.php';
    include 'pages/'.$SPage.'/'.$action.'.php';
    
    ?>

    </body>
</html>