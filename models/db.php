<?php
# creo un array
$movies = [];


# definisco un nuovo film
$matrix = new Movie('The Matrix', 'Andy e Larry Wachowski', 136);

$matrix->setYear(1999);

$matrix->setPath('./assets/img/matrix.png');

//pusho il film nell'array
array_push($movies, $matrix);


# definisco un nuovo film
$matrixReloaded = new Movie('The Matrix Reloaded', 'Andy e Larry Wachowski', 138);

$matrixReloaded->setYear(2003);

$matrixReloaded->setPath('./assets/img/matrix_reloaded.jpg');

//pusho il film nell'array
array_push($movies, $matrixReloaded);


# definisco un nuovo film
$matrixRevolutions = new Movie('The Matrix Revolutions', 'Andy e Larry Wachowski', 129);

$matrixRevolutions->setYear(2003);

$matrixRevolutions->setPath('./assets/img/matrix_revolutions.png');

//pusho il film nell'array
array_push($movies, $matrixRevolutions);
