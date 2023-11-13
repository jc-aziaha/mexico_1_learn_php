<?php include __DIR__ . "/dat.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <h1>Hello <?php echo $firstName ?></h1>

        <p>Liste des utilisateurs: </p>
        <ol>
            <?php foreach($users as $user) : ?>
                <li><?php echo $user ?></li>
            <?php endforeach ?>
        </ol>

        <?php if(true) : ?>

        <?php else : ?>
            
        <?php endif ?>
    </body>
</html>