<?php

/**
 * Created by PhpStorm.
 * User: takne
 * Date: 05/04/18
 * Time: 15:51
 */

require '../vendor/autoload.php';
use GuzzleHttp\Client;

session_start();
if (empty($_GET['id'])) {

    $client = new Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);
    $response = $client->request('GET', 'all.json');

    $body = $response->getBody();
    $characteristics = json_decode($body);


    for ($i = 0; $i < 12; $i++) {

        $idRand = rand(1, 500);


        $fighter[$i][] = $characteristics[$idRand]->id;
        $fighter[$i][] = $characteristics[$idRand]->name;
        $fighter [$i][] = $characteristics[$idRand]->powerstats->strength;
        $fighter [$i][] = $characteristics[$idRand]->powerstats->speed;
        $fighter [$i][] = $characteristics[$idRand]->powerstats->power;
        $fighter [$i][] = $characteristics[$idRand]->biography->aliases[0];
        $fighter [$i][] = $characteristics[$idRand]->images->md;

        $_SESSION['heros'][] = $fighter[$i];

    }

}
if (!empty($_GET['i'])){
    $getCount = 1;
    $_SESSION['player1']['id'] = $_GET['id'];
    $_SESSION['heros']['player1']['i'] = $_GET['i'];
    $_SESSION['player1']['name'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][1];
    $_SESSION['player1']['strength'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][2];
    $_SESSION['player1']['speed'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][3];
    $_SESSION['player1']['power'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][4];
    $_SESSION['player1']['alias'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][5];
    $_SESSION['player1']['image'] = $_SESSION['heros'][$_SESSION['heros']['player1']['i']][6];

} elseif (!empty($_GET['i2'])) {
    $getCount = 2;
    $_SESSION['player2']['id'] = $_GET['id'];
    $_SESSION['heros']['player2']['i'] = $_GET['i2'];
    $_SESSION['player2']['name'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][1];
    $_SESSION['player2']['strength'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][2];
    $_SESSION['player2']['speed'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][3];
    $_SESSION['player2']['power'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][4];
    $_SESSION['player2']['alias'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][5];
    $_SESSION['player2']['image'] = $_SESSION['heros'][$_SESSION['heros']['player2']['i']][6];
} else {
    $getCount = 0;
}
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
    <link rel="stylesheet" href="CSS/css-charselect.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="container">

        <h1 class="text-center">SSF4 : bisounour's edition</h1>

        <div class="row text-center">

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php if (empty($_GET)) {echo "images/Ryurender.png";} else { echo $_SESSION['heros'][$_SESSION['heros']['player1']['i']][6];}?>" alt="">
                    <div class="caption color">
                        <h3 class="color"><?php if (empty($_GET)) {echo "Ryu";} else { echo $_SESSION['heros'][$_SESSION['heros']['player1']['i']][1];}?></h3>
                        <p class="color">Surname :<?php if (empty($_GET)) {echo "Satsui no Hado ni Mezameta Ryu";} else { echo $_SESSION['heros'][$_SESSION['heros']['player1']['i']][5];}?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail TNVS">
                    <img src="images/VS.png" alt="">
                    <?php if ($getCount == 2):  ?>
                        <a class="btn btn-danger" href="FightTheDeath.php" role="button">FIGHT</a>
                    <?php endif ?>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php if ($getCount != 2) {echo "images/Cammyrender.png";} else { echo $_SESSION['heros'][$_SESSION['heros']['player2']['i']][6];}?>" alt="">
                        <div class="caption color">
                            <h3 class="color"><?php if ($getCount != 2) {echo "Cammy";} else { echo $_SESSION['heros'][$_SESSION['heros']['player2']['i']][1];}?></h3>
                            <p class="color">Surname :<?php if ($getCount != 2) {echo "Canon Spike";} else { echo $_SESSION['heros'][$_SESSION['heros']['player2']['i']][5];}?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid select">
        <h2 class="text-center">Choose your fighter</h2>
        <div class="row">
            <?php for ($i=0; $i<12; $i++) : ?>
                <div class="col-md-1">
                    <div class="thumbnail taille">
                            <a href="CharacterSelect.php?id=<?=$_SESSION['heros'][$i][0]; ?>&<?php if($getCount == 0) { echo 'i='.$i;} else { echo 'i2='.$i;}?>"><img class="img-responsive" src="<?=$_SESSION['heros'][$i][6]?>"></a>
                            <h6 class="text-center"> <?=$_SESSION['heros'][$i][1] ?> </h6>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

</div>
</div>
</body>
</html>