<?php
session_start();

    // var_dump($_POST);
    // var_dump($_FILES);

    // setcookie("hello", "world", time() + (1000 * 24 * 60 * 60));

    // var_dump($_SERVER);

    // $test = "Hello";
    // var_dump($test);

    $_SESSION['city'] = "Quebec";
    
    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form method="POST" enctype="multipart/form-data">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <input type="submit" value="Je m'inscris">
            </div>
        </form>
    </body>
</html>