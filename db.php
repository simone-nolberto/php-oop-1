<?php

require_once __DIR__ . '/models/Genre.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/TvSerie.php';


$productions = [
    new Production('Benvenuti al sud', 'italian', 6, new Genre('comedy', 'a classical italian comedy')),
    new Production('Non sposate le mie figlie', 'french', 7, new Genre('comedy', 'a classical french comedy')),
    new TvSerie('How i met your mother','en',9, new Genre('sitcom', 'a classical american sitcom'), 9),
    new Movie('Avatar','en',8,new Genre('action', 'a story about the conquer of an alien planet'), 100, 3  ),
];
