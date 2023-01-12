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
    <h1>Login</h1>

    <form action="" method="post">

        <div>
            <label for="mail">Email: </label>
            <input type="mail" name="mail" id="mail"><span><?= $errors['mail'] ?? '' ?></span>
        </div>

        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" name="password" id="password"><span><?= $errors['password'] ?? '' ?></span>
        </div>
        <p class="erreur"><?= $errors['erreur'] ?? '' ?></p>
        <input type="submit" name="submit">
    </form>
</body>

</html>