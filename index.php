<?php

    //richiamo file movie.php
    require_once __DIR__ . '/movie.php';

    //creo quello che è un nuovo oggetto, richiamando funzioni e stampando per ogni film(richiamando la funzione ) quella che è la propria trama
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./image/favicon-32x32.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <main>
        <div class="card">
            <?php
                $movie_1 = new Movie('La vita è bella', 'The life is beautiful', 'Italiano', 'Roberto Benigni');
                // $movie_1->getAuthor();
                echo $movie_1->getAllInfo();
                echo $movie_1->setDescription('Durante la dittatura fascista, Guido Orefice, giovane ebreo trasferitosi nella campagna toscana, conosce una maestra elementare, Dora, e con lei costruisce una famiglia. L\'aggravarsi delle Leggi Razziali e i rastrellamenti nazisti portano l\'uomo ad essere deportato in campo di concentramento con il figlioletto Giosuè. Per proteggere il piccolo dagli orrori dello sterminio, Guido costruisce eroicamente un elaborato mondo di vertiginose fantasie.');
            ?>
        </div>

        <div class="logo">
            <img src="./image/pngegg.png" alt="The Movies">
        </div>

        <div class="card">
            <?php
                $movie_2 = new Movie('Limitless', 'Limitless', 'English', 'Neil Burger');
                // $movie_2->getAuthor();
                echo $movie_2->getAllInfo();
                echo $movie_2->setDescription('Grazie a un nuovo tipo di droga, lo scrittore Eddie si ritrova in grado di scalare Wall Street, fino a quando gli effetti collaterali dello stupefacente iniziano a lasciare il segno.');
            ?>
        </div>
    </main>
</body>
</html>

