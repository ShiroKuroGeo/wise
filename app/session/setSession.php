<?php 
    session_start();

    if(!isset($_SESSION['role'])){
        header('location: ../../app/session/logout.php');
    }
?>