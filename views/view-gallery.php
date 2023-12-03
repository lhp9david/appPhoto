<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logoBlack.png">
    <link rel="stylesheet" href="../assets/style<?=$theme?>.css">

    <title>Document</title>
</head>

<body>

    <?php include('../views/include/navbar.php') ?>
    <h1>Ma Galerie</h1>
    <div class="container-gallery">


        <?php foreach ($files as $value) {  ?>


            <div class="image-gallery">
                <img src="<?= "/assets/img/" . $_SESSION['user']['pseudo'] . '/' . $value ?>" alt="">

                <a href="controller-gallery.php?delete=<?=$value?>" class="removeimg">
                    <button>Supprimer</button>
                </a>
            </div>




        <?php } ?>
    </div>
    <?php include('../views/include/footer.php') ?>
</body>

</html>