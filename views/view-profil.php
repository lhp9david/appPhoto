<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Profil</h1>
    <?php include('../views/include/navbar.php') ?>
    <p>Pseudo: <?= $_SESSION['user']['pseudo']?></p>
    <p>Mail: <?= $_SESSION['user']['mail']?></p>
    <p>Quota: <?=$_SESSION['user']['quota']?></p>
</body>
</html>