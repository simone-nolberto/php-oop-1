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
        <h3>Produzioni: </h3>
        <div class="row">
            <?php foreach ($productions as $production) : ?>
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $production->title ?></h4>
                            <p>Lingua: <?php echo $production->language ?></p>
                            <p>Voto: <?php echo $production->vote ?></p>
                            <p>Genere: <?php echo $production->genre->name ?></p>
                            <p>Genere: <?php echo $production->genre->description ?></p>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>


        <h3>Show: </h3>
        <div class="row">
            <?php foreach ($TvSeries as $TvSerie) : ?>

                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $TvSerie->title ?></h4>
                            <p>Lingua: <?php echo $TvSerie->language ?></p>
                            <p>Voto: <?php echo $TvSerie->vote ?></p>
                            <p>Genere: <?php echo $TvSerie->genre->name ?></p>
                            <p>Genere: <?php echo $TvSerie->genre->description ?></p>
                            <p>Stagioni: <?php $TvSerie->seasonNumber ?> </p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>


        <h3>Film: </h3>
        <div class="row">
            <?php foreach ($Movies as $Movie) : ?>

                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $Movie->title ?></h4>
                            <p>Lingua: <?php echo $Movie->language ?></p>
                            <p>Voto: <?php echo $Movie->vote ?></p>
                            <p>Genere: <?php echo $Movie->genre->name ?></p>
                            <p>Genere: <?php echo $Movie->genre->description ?></p>
                            <p>Introiti: <?php $Movie->profits ?></p>
                            <p>Durata: <?php $Movie->lasting ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>




</body>

</html>