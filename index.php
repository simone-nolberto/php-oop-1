<?php

require_once __DIR__ . '/models/Production.php';

$panda = new Production('Pandina', 'italian', 5);
$clio = new Production('Clio', 'french', 7);

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

    <ul>
        <li><?php echo $panda->getTitle() ?></li>
        <li><?php echo $panda->getLanguage() ?></li>
        <li><?php echo $panda->getVote() ?></li>
    </ul>

    <ul>
        <li><?php echo $clio->getTitle() ?></li>
        <li><?php echo $clio->getLanguage() ?></li>
        <li><?php echo $clio->getVote() ?></li>
    </ul>


</body>

</html>