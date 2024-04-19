<?php




class TvSerie extends Production
{

    public $seasonNumber;

    public function __construct($title,  $language, $vote, $genre, int $seasonNumber)
    {
        parent::__construct( $title,  $language, $vote, $genre);

        $this->seasonNumber = $seasonNumber;
    }


    public function getSeasonNumber()
    {
        return $this->seasonNumber;
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
