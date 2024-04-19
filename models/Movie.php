<?php

class Movie extends Production
{
    public $profits;
    public $lasting;


    public function __construct($title,  $language, $vote, $genre, int $profits, int $lasting)
    {

        parent::__construct($title,  $language,  $vote,  $genre);

        $this->profits = $profits;
        $this->lasting = $lasting;
    }

    public function getTitle(): string
    {

        return ($this->title);
    }
    public function getLanguage(): string
    {

        return ($this->language);
    }
    public function getVote(): string
    {

        return ($this->vote);
    }

    public function getGenre(): string
    {

        return ($this->genre->name);
    }
    public function getProfits(): string
    {

        return ($this->profits);
    }
    public function getLasting(): string
    {

        return ($this->lasting);
    }
}
