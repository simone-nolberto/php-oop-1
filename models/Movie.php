<?php

class Movie extends Production
{
    public $profits;
    public $lasting;



    public function __construct(string $title, string $language, int $vote, Genre $genre, int $profits, int $lasting)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->profits = $profits;
        $this->lasting = $lasting;
    }
}
