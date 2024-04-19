<?php

require_once __DIR__ . '/models/Genre.php';


$productions = [
    new Production('Benvenuti al sud', 'italian', 6, new Genre('comedy', 'a classical italian comedy')),
    new Production('Non sposate le mie figlie', 'french', 7, new Genre('comedy', 'a classical french comedy')),
];
