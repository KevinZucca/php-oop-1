<?php


class Movie {
    public $title;
    public $director;
    public $year;
    public $actors;
    public $duration;
    public $genres;
    public $audience;

    function __construct(string $title, string $director, int $year, string $actors, string $duration, array $genres, string $audience){
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->actors = $actors;
        $this->duration = $duration;
        $this->genres = $genres;
        $this->audience = $audience;
    }

    public function setAudience($genres){
        if($genres == "Horror"){
            $this->audience = "Not for people under 18 years old";
        }
    }
}


?>

