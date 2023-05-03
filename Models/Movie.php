<?php


class Movie {
    public $title;
    public $director;
    public $year;
    public $actors;
    public $duration;

    function __construct(string $title, string $director, int $year, string $actors, string $duration){
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->actors = $actors;
        $this->duration = $duration;
    }
}


?>

