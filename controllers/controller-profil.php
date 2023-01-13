<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: controller-login.php');
    exit;
}

?>








<?php include_once('../views/view-profil.php');?>