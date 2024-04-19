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
        <div class="row">
            <?php foreach ($productions as $production) : ?>

                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $production->getTitle() ?></h4>
                            <p class="card-language">Lingua: <?php echo $production->getLanguage() ?></p>
                            <p class="card-language">Voto: <?php echo $production->getVote() ?></p>
                            <p class="card-language">Genere: <?php echo $production->getGenre() ?></p>
                        </div>

                    </div>
                </div>

            <?php endforeach ?>

            <?php foreach ($TvSeries as $TvSerie) : ?>

                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $TvSerie->getTitle() ?></h4>
                            <p class="card-language">Lingua: <?php echo $TvSerie->getLanguage() ?></p>
                            <p class="card-language">Voto: <?php echo $TvSerie->getVote() ?></p>
                            <p class="card-language">Genere: <?php echo $TvSerie->getGenre() ?></p>
                            <p>Stagioni: <?php $TvSerie->getSeasonNumber() ?> </p>
                        </div>

                    </div>
                </div>

            <?php endforeach ?>

            <?php foreach ($Movies as $Movie) : ?>

                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $Movie->getTitle() ?></h4>
                            <p class="card-language">Lingua: <?php echo $Movie->getLanguage() ?></p>
                            <p class="card-language">Voto: <?php echo $Movie->getVote() ?></p>
                            <p class="card-language">Genere: <?php echo $Movie->getGenre() ?></p>
                            <p>Introiti: <?php $Movie->getProfits() ?></p>
                            <p>Durata: <?php $Movie->getLasting() ?></p>
                        </div>

                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>




</body>

</html>