<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="public/img/logo.png" />
    <title> to_do_liste

        <!-- <?php
                // si la variable title existe alors on affiche le contenue
                // if (isset($title)) {
                //     echo $title;
                // } 
                ?> -->
    </title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="container-fluid">
                <a class="navbar-brand mt-2 mt-lg-0" href="/">
                    <img src="public/img/logo.png" height="60" />
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">inscription</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Deconnection</a>
                    </li>


                </ul>
            </div>
        </nav>