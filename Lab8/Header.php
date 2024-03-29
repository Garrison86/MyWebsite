<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Lab 8</title>
    <link rel="stylesheet" type="text/css" href="styleLab8.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
          crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&display=swap" 
          rel="stylesheet">
</head>

<body style="background-image: url(img2.png);">
    <div class="container">
    <header class="row" style="font-family: 'Fascinate', cursive;">

            <?php
            echo "
                <h1>CST8238-370</h1>
                <h3>Web Development</h3>";
            ?>

            <div class="menu col offset-5">
                <div>
                    <?php
                    include "Menu.php";
                    ?>
                </div>
            </div>
    </header>
    <content class="row" style="font-family: Kdam Thmor Pro, sans-serif;">
    <div class="content">
