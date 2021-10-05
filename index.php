<?php
require_once __DIR__ . '/models/Movie.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi</title>
</head>

<body>


    <?php $movie_1 = new Movie(1, 'Space Jam: New Legends', 'Sportivo', 2021, '115 min') ?>
    <div>
        <h1>Titolo: <?= $movie_1->name ?></h1>
        <h2>Genere: <?= $movie_1->genre ?></h2>
        <p>Anno: <?= $movie_1->year ?></p>
        <p>Durata: <?= $movie_1->duration ?></p>
        <caption>ID: <?= $movie_1->get_id() ?></caption>
        <p><?= $movie_1->get_difference() ?></p>
    </div>
    <hr />
    <?php $movie_2 = new Movie(2, 'Braveheart', 'Drammatico-Storico', 1995, '177 minuti') ?>
    <div>
        <h1>Titolo: <?= $movie_2->name ?></h1>
        <h2>Genere: <?= $movie_2->genre ?></h2>
        <p>Anno: <?= $movie_2->year ?></p>
        <p>Durata: <?= $movie_2->duration ?></p>
        <caption>ID: <?= $movie_2->get_id() ?></caption>
        <p><?= $movie_2->get_difference() ?></p>
    </div>
    <hr />