<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: controller-login.php');
    exit;
}
// Cookie thème
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light';
}

$files = array_diff(scandir("../assets/img/".$_SESSION['user']['pseudo']."/"), array('..', '.'));



include_once('../views/view-gallery.php');

?>