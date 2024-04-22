<?php

class Genre
{
    public $name;
    public $description;


    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName(): string
    {

        return ($this->name);
    }
    public function getDescription(): string
    {

        return ($this->description);
    }
}
