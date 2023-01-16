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
    <?php include('../views/include/navbar.php') ?>
    <h1>Profil</h1>

    <div class="profil">
        <p>Pseudo: <?= $_SESSION['user']['pseudo'] ?></p>
        <p>Mail: <?= $_SESSION['user']['mail'] ?></p>
        <p>Quota: <?= checkquota()?> / <?= $_SESSION['user']['quota'] ?></p>


        <form class="form-theme" action="../controllers/controller-profil.php" method="post">
            <fieldset>
                <legend>Selectionner un mode:</legend>

                <div>
                    <input type="radio" id="dark" name="theme" value="dark">
                    <label for="dark">Sombre</label>
                </div>

                <div>
                    <input type="radio" id="light" name="theme" value="light">
                    <label for="light">Clair</label>
                </div>
                <div>
                    <input type="submit" value="Enregistrer">
                </div>

            </fieldset>

        </form>
    </div>


    <?php include('../views/include/footer.php') ?>
</body>

</html>