<?php

require_once __DIR__ . '/models/Production.php';

$productions = [
    new Production('Benvenuti al sud', 'italian', 6),
    new Production('Non sposate le mie figlie', 'french', 7)
]



// var_dump($panda, $clio);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produzioni</title>
</head>

<body>

    <h1>Hello World</h1>



    <?php foreach ($productions as $production) : ?>
        <ul>
            <li><?php echo $production->getTitle() ?></li>
            <li><?php echo $production->getLanguage() ?></li>
            <li><?php echo $production->getVote() ?></li>
        </ul>

    <?php endforeach ?>


</body>

</html>