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
    <h1>Upload</h1>

    <?php include('../views/include/navbar.php') ?>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">

            <input type="file" name="userFile" oninput="pic.src=window.URL.createObjectURL(this.files[0])" /><img id="plus"src="assets/img/plus.png" alt=""><span><?= $messages['userFile'] ?? '' ?></span> <br>
            <img id =pic src="" height="200" alt="Image preview" /> <br>
  
            
         
    </div>

    <input type="submit" name="submit">

    </form>
</body>

</html>