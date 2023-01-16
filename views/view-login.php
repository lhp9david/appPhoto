<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style<?=$theme?>.css">
    <link rel="icon" href="../assets/img/logoBlack.png">
    <title>Document</title>
</head>

<body class="pageLog">
  
<?php if (isset($disconnected)) { ?>
    <p>Vous êtes bien déconnecté</p>
   <button class="return"><a href="../controllers/controller-login.php">Retour à l'accueil</a></button> 
<?php } else { ?>
    <h1 class="titreLog">App Photo</h1>
    <form class="login" action="" method="post">

    <div class="imageLog">
        <img src="/assets/img/logoBlack.png" alt="">
    </div>
        <div>
            <label for="mail">Email: </label>
            <input value="<?= $_POST['mail'] ?? '' ?>" type="mail" name="mail" id="mail"><span><?= $errors['mail'] ?? '' ?></span>
        </div>

        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password"><span><?= $errors['password'] ?? '' ?></span>
        </div>
        <p class="erreur"><?= $errors['erreur'] ?? '' ?></p>
        <div class="submit">
        <input  type="submit" name="submit" value="se connecter">
        </div>
       
    </form>
    <?php }?>
   
</body>

</html>