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
  
<?php if (isset($disconnected)) { ?>
    <p>Vous êtes bien déconnecté</p>
   <button><a href="../controllers/controller-login.php">Retour à l'accueil</a></button> 
<?php } else { ?>
    <h1>Login</h1>
    <form action="" method="post">

        <div>
            <label for="mail">Email: </label>
            <input value="<?= $_POST['mail'] ?? '' ?>" type="mail" name="mail" id="mail"><span><?= $errors['mail'] ?? '' ?></span>
        </div>

        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password"><span><?= $errors['password'] ?? '' ?></span>
        </div>
        <p class="erreur"><?= $errors['erreur'] ?? '' ?></p>
        <input type="submit" name="submit">
    </form>
    <?php }?>
</body>

</html>