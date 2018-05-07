<?php
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 06/04/18
 * Time: 13:17
 */

require '../vendor/autoload.php';

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/css-charselect.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">The winner is ...</h1>

    <div class="thumbnail TNVS">
        <img class="img-responsive" src="<?=$_SESSION['player1']['image']?>" alt="">
        <div class="caption color">
            <h3 class="color text-center"><?=$_SESSION['player1']['name']?></h3>
            <p class="color text-center">Surname : <?=$_SESSION['player1']['alias']?></p>
            <p class="color text-center">Strength : <?=$_SESSION['player1']['strength']?></p>
            <p class="color text-center">Speed : <?=$_SESSION['player1']['speed']?></p>
            <p class="color text-center">Power : <?=$_SESSION['player1']['power']?></p>
        </div>
    </div>

</div>
</body>
</html>