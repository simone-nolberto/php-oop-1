<?php

require_once __DIR__ . '/models/Genre.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/TvSerie.php';


$productions = [
    new Production('Benvenuti al sud', 'italian', 6, new Genre('comedy', 'a classical italian comedy')),
    new Production('Non sposate le mie figlie', 'french', 7, new Genre('comedy', 'a classical french comedy')),
    
    
];

$TvSeries = [
    new TvSerie('How i met your mother', 'en', 9, new Genre('sitcom', 'a classical american sitcom'), 9),
    new TvSerie('New Girl', 'en', 8, new Genre('show', 'a story about 3 broke guys and a silly girl'), 7 )
];

$Movies = [
    new Movie('Avatar', 'en', 8, new Genre('action', 'a story about the conquer of an alien planet'), 100, 3),
    new Movie('Matrix','en', 7, new Genre('sci-fi', 'the story of a common man who defeats evil force'), 300, 2),
];
