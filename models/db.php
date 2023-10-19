<?php

$movies = [];

$matrix = new Movie('The Matrix', 'Andy e Larry Wachowski', 136);
//var_dump($matrix->getRegia());
$matrix->setYear(1999);
array_push($movies, $matrix);

$matrixReloaded = new Movie('The Matrix Reloaded', 'Andy e Larry Wachowski', 138);
$matrixReloaded->setYear(2003);
array_push($movies, $matrixReloaded);

$matrixRevolutions = new Movie('The Matrix Revolutions', 'Andy e Larry Wachowski', 129);
$matrixRevolutions->setYear(2003);
array_push($movies, $matrixRevolutions);


/* var_dump($movies); */
