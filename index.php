<?php



/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. */

ini_set('display_errors', 1);
error_reporting(E_ALL);

/* include __DIR__ . '/models/movie.php';
include __DIR__ . '/models/db.php'; */


define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'models' . DS . 'movie.php';

require_once ROOT . DS . 'models' . DS . 'db.php';






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body class="bg-secondary ">
    <div class="container p-5">

        <h1 class="mb-5 fw-bold text-white">Film</h1>

        <div class="row row-cols-1 row-cols-md-3 m-auto justify-content-center">
            <!-- inserisco un ciclo -->
            <?php foreach ($movies as $film) : ?>
                <div class="col g-5">


                    <div class="card h-100 bg-dark bg-gradient text-white">

                        <img class="card-img-top p-2" src='<?= $film->poster_path ?>' alt="">

                        <div class="card-body">
                            <h2><?= $film->title ?></h2>
                            <h5>Anno: <?= $film->year ?></h5>
                            <p>Regia: <?= $film->regia ?></p>
                            <p>Durata: <small><?= $film->duration ?></small></p>
                        </div>

                    </div>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>