<?php


$lordOfTheRings = new Movie( "The Lord of the Rings", "Peter Jackson", 2001, "Elijah Wood, Viggo Mortensen, Ian McKellen", "208 min", ["Fantasy", "Adventure"], "For all people", "./img/lord.jpg");
$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "Matthew McConaughey,  Anne Hathaway", "169 min", ["Sci-fi"], "For all people", "./img/interstellar.jpeg");
$dune = new Movie("Dune", "Denis Villeneuve", 2021, "Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin", "155 min", ["Fantasy", "Sci-fi"], "For all people", "./img/dune.jpeg");
$it = new Movie("IT", "Tommy Lee Wallace", 1990, "Tim Curry, Richard Thomas, John Ritter", "192 min", ["Horror"], "For all people", "./img/it.jpg");
 
$movies = [
    $lordOfTheRings, $interstellar, $dune, $it
]

?>