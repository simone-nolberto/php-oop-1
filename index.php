<?php

require_once __DIR__ . '/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produzioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1>Hello World</h1>

    <div class="container">
        <h3 class="text-center">Produzioni: </h3>
        <div class="row my-2">
            <?php foreach ($productions as $production) : ?>
                <div class="col">
                    <div class="card text-center">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $production->getTitle() ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $production->getLanguage() ?></p>
                            <p><strong>Voto:</strong> <?php echo $production->getVote() ?></p>
                            <p><strong>Genere:</strong> <?php echo $production->genre->getName() ?></p>
                            <p><strong>Sinossi:</strong> <?php echo $production->genre->getDescription() ?></p>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>


        <h3 class="text-center">Show: </h3>
        <div class="row my-2">
            <?php foreach ($TvSeries as $TvSerie) : ?>

                <div class="col">
                    <div class="card text-center">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $TvSerie->getTitle() ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $TvSerie->getLanguage() ?></p>
                            <p><strong>Voto:</strong> <?php echo $TvSerie->getVote() ?></p>
                            <p><strong>Genere:</strong> <?php echo $TvSerie->genre->getName() ?></p>
                            <p><strong>Sinossi: </strong><?php echo $TvSerie->genre->getDescription() ?></p>
                            <p><strong>Stagioni:</strong> <?php echo $TvSerie->getSeasonNumber() ?> </p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>


        <h3 class="text-center"> Film: </h3>
        <div class="row my-2">
            <?php foreach ($Movies as $Movie) : ?>

                <div class="col">
                    <div class="card text-center">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $Movie->getTitle() ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $Movie->getLanguage() ?></p>
                            <p><strong>Voto:</strong> <?php echo $Movie->getVote() ?></p>
                            <p><strong>Genere:</strong> <?php echo $Movie->genre->getName() ?></p>
                            <p><strong>Sinossi:</strong> <?php echo $Movie->genre->getDescription() ?></p>
                            <p><strong>Introiti:</strong> <?php echo $Movie->getLasting() ?></p>
                            <p><strong>Durata:</strong> <?php echo $Movie->getLasting() ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>




</body>

</html>