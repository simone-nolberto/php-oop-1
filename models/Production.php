<?php


class Production
{
    public $title;
    public $language;
    public $vote;
    public $genre;


    public function __construct(string $title, string $language, int $vote, Genre $genre)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
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
}
