<?php

session_start();

    $vie1 = 20;
    $vieFinale1 = (($vie1/100)*432);
    $vie2 = 50;
    $vieFinale2 = (($vie2/100)*432);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/css-fightthedeath.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center">SSF4 : bisounour's edition</h1>

        <div class="row text-center">

            <div class="col-sm-6 col-md-3 margL">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?=$_SESSION['player1']['image']?>" alt="">
                    <div class="caption color">
                        <h3 class="color"><?=$_SESSION['player1']['name']?></h3>
                        <p class="color">Surname : <?=$_SESSION['player1']['alias']?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-md-offset-1">

                <div class="row1"></div>
                <div class="row">
                    <div class="thumbnail TNVS">
                        <img src="images/VS2.png" alt="">
                    </div>
                </div>

                <div class="row3">
                    <div class="col-md-2">
                        <a href=><img class="img-responsive" src="images/arrowT.png"></a>
                    </div>
                    <div class="col-md-2 col-md-offset-8">
                        <a href=""><img class="img-responsive" src="images/arrowT.png"></a>
                </div>
                </div>

                <div class="row4">
                    <div class="col-md-2">
                        <a href=""><img class="img-responsive" src="images/arrowR.png"></a>
                    </div>
                    <div class="col-md-2 col-md-offset-8">
                        <a href=""><img class="img-responsive" src="images/arrowL.png"></a>
                    </div>
                </div>

                <div class="row5">
                    <div class="col-md-2">
                        <a href=""><img class="img-responsive" src="images/arrowB.png"></a>
                    </div>
                    <div class="col-md-2 col-md-offset-8">
                        <a href=""><img class="img-responsive" src="images/arrowB.png"></a>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-md-offset-1">
                <div class="thumbnail margR">
                    <img src="<?=$_SESSION['player2']['image']?>" alt="">
                    <div class="caption ">
                        <h3 class="color"><?=$_SESSION['player2']['name']?></h3>
                        <p class="color">Surname : <?=$_SESSION['player2']['alias']?></p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="col-sm-6 col-md-3">
                <div class="col-xs-12 hauteur"></div>
                <div class="col-xs-12 hauteur2" style="max-width:<?=$vieFinale1?>px"></div>
            </div>
            <div class="col-sm-6 col-md-3 col-md-offset-6">
                <div class="col-xs-12 hauteur"></div>
                <div class="col-xs-12 hauteur2" style="max-width:<?=$vieFinale2?>px"></div>
            </div>

        </div>
        <div class="row ">
            <div class="col-md-2 col-md-offset-5">
                <a href="Log.php"><button class="btn btn-warning text-center">Clic to continue</button></a>
            </div>
        </div>
    </div>
</body>
</html>
