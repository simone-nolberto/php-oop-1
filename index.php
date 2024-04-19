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
                            <h4 class="card-title"><?php echo $production->title ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $production->language ?></p>
                            <p><strong>Voto:</strong> <?php echo $production->vote ?></p>
                            <p><strong>Genere:</strong> <?php echo $production->genre->name ?></p>
                            <p><strong>Sinossi:</strong> <?php echo $production->genre->description ?></p>

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
                            <h4 class="card-title"><?php echo $TvSerie->title ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $TvSerie->language ?></p>
                            <p><strong>Voto:</strong> <?php echo $TvSerie->vote ?></p>
                            <p><strong>Genere:</strong> <?php echo $TvSerie->genre->name ?></p>
                            <p><strong>Sinossi: </strong><?php echo $TvSerie->genre->description ?></p>
                            <p><strong>Stagioni:</strong> <?php echo $TvSerie->seasonNumber ?> </p>
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
                            <h4 class="card-title"><?php echo $Movie->title ?></h4>
                            <p><strong>Lingua:</strong> <?php echo $Movie->language ?></p>
                            <p><strong>Voto:</strong> <?php echo $Movie->vote ?></p>
                            <p><strong>Genere:</strong> <?php echo $Movie->genre->name ?></p>
                            <p><strong>Sinossi:</strong> <?php echo $Movie->genre->description ?></p>
                            <p><strong>Introiti:</strong> <?php echo $Movie->profits ?></p>
                            <p><strong>Durata:</strong> <?php echo $Movie->lasting ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>




</body>

</html>