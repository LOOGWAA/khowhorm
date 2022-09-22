<?php
    session_start();
    if($_SESSION['role']=='a'){
    echo "ลบกระทู้หมายเลข $_GET[id]";
    }else{
        header("lacation:index.php");
        die();
    }
?>