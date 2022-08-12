
<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>WP Eatery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="styleAssigment3.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body style="background-image: url(bg.jpg);">

    <div class="container">
        <header class="row" style="background-image: url('images/header_img.jpg');">
            <header class="clearfix">
                <div id="title" style="color:bisque; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                    <h1><b>WP Eatery</b></h1>
                    <h2>1385 Woodroffe Ave, Ottawa ON</h2>
                    <h2>Tel: (613)727-4723</h2>
                </div>
            </header>

            <?php include "Menu.php"; ?>
        </header>
        <content class="row">
            <div class="content">