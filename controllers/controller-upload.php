<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: controller-login.php');
    exit;
}
// Cookie thème
if (isset($_COOKIE[$_SESSION['user']['pseudo'].'theme'])) {
    $theme = $_COOKIE[$_SESSION['user']['pseudo'].'theme'];
} else {
    $theme = 'light';
}

?>

<?php

$arrayExt = ['jpg', 'jpeg', 'png', 'webp','pdf'];
$upload_directory = 'assets/img/';


function checkquota()
{

    $dir = '../assets/img/' . $_SESSION['user']['pseudo'] . '/';
    $files = array_diff(scandir($dir), array('..', '.'));
    $usedsize = 0;

    foreach ($files as $file) {
        $usedsize = $usedsize + filesize($dir . $file);
    }

    $usedsize = $usedsize / (1024 * 1024);
    $currentquota = $_SESSION['user']['quota'] - $usedsize;

    return $currentquota;
}
function checkImage($inputName, $maxSize, $arrayExt)
{


    $response = [];



    if ($_FILES[$inputName]['error'] == 4) {
        $response = [
            'status' => false,
            'message' => 'Veuillez selectionner une image'
        ];
    } else {
        $response = [
            'status' => true,
            'message' => 'Image safe'
        ];

        if (!preg_match('/image/', mime_content_type($_FILES[$inputName]['tmp_name']))) {
            $response = [
                'status' => false,
                'message' => 'veuillez selectionner uniquement une image'
            ];
        }

        $mime = mime_content_type($_FILES[$inputName]['tmp_name']);
        $array = explode('/', $mime);


        if (!in_array($array[1], $arrayExt)) {

            $extension = implode('-', $arrayExt);
            $response = [
                'status' => false,
                'message' => 'Veuillez selectionner une image parmi les extensions suivantes ' . $extension
            ];
        }

        if ($_FILES[$inputName]['size'] > $maxSize * 1024 * 1024) {

            $response = [
                'status' => false,
                'message' => 'Veuillez selectionner une image inferieur à 2Mo'
            ];
        }

    }
    return $response;
}
function uploadImage($key, $format, $directory)
{
    $response = [];
    $file_tmp_name = $_FILES[$key]['tmp_name'];
    $file_name = uniqid() . $format;
    if (move_uploaded_file($file_tmp_name, $directory . $file_name)) {
        $response = [
            'status' => true,
            'message' => 'Votre document a bien été téléchargé'
        ];
    } else {
        $response = [
            'status' => false,
            'message' => 'votre document n\'a pas pu être télécharger'
        ];
    }
    return $response;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {

        foreach ($_FILES as $key => $value) {
            $result = checkImage($key, 2, $arrayExt);

            if ($result['status'] == false) {
                $messages[$key] = $result['message'];
            } else {

                $messages[$key] = uploadImage($key, '.webp', '../assets/img/' . $_SESSION['user']['pseudo'] . '/')['message'];
            }
        }
    }
}



?>


<?php include_once('../views/view-upload.php'); ?>