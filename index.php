<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: ./views/auth/login/"); 
    } else {
        header("location: ./views/admin/home/");
    }
?>