<?php

class Production
{
    public $title;
    public $language;
    public $vote;


    public function __construct(string $title, string $language, int $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
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
}
