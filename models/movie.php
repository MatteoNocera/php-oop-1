<?php

class Movies
{
    public $title;
    public $description;
    public $year;
    public $duration;
    public $regia;
    public $poster_path;

    public function __construct($title, $regia, $duration)
    {
        $this->title = $title;
        $this->year = $regia;
        $this->duration = $duration;
    }

    public function getYear()
    {
        var_dump($this->year);
    }
}

include __DIR__ . '/db.php';
