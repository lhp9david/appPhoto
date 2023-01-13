<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: controller-login.php');
    exit;
}

// $directory = '../assets/img/'.$_SESSION['user']['pseudo'].'/';
// scandir($directory);
// var_dump($directory);

include_once('../views/view-gallery.php');

?>