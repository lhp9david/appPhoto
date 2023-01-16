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
    <h1>Upload</h1>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">

        <div class="download">
        <input type="file" name="userFile" oninput="pic.src=window.URL.createObjectURL(this.files[0])" /><span class="erreur"><?= $messages['userFile'] ?? '' ?></span> <br>
            <img id =pic src="" height="200" /> <br>
        </div>
  
            
         
    </div>
    <div class="button-download">    <input type="submit" name="submit" value="Télécharger"></div>


    </form>
    <?php include('../views/include/footer.php') ?>
</body>

</html>