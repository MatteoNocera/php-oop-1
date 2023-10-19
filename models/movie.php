<?php
# creo una classe movie con attributi e funzioni al suo interno
class Movie
{
    public $title;
    public $year;
    public $duration;
    public $regia;
    public $poster_path;

    public function __construct($title, $regia, $duration)
    {
        $this->title = $title;
        $this->regia = $regia;
        $this->duration = $duration;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setPath($path)
    {
        $this->poster_path = $path;
    }
}
