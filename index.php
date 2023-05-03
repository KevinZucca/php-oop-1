<?php

require_once "./Models/Movie.php";

$lordOfTheRings = new Movie("The Lord of the Rings", "Peter Jackson", 2001, "Elijah Wood, Viggo Mortensen, Ian McKellen", "208 min");
$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "Matthew McConaughey,  Anne Hathaway", "169 min");
$dune = new Movie("Dune", "Denis Villeneuve", 2021, "Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin", "155 min");
 

var_dump($lordOfTheRings);
var_dump($interstellar);
var_dump($dune);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</body>
</html>