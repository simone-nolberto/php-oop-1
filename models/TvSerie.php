<?php




class TvSerie extends Production
{

    public $seasonNumber;

    public function __construct(string $title, string $language, int $vote, Genre $genre, int $seasonNumber)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
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
