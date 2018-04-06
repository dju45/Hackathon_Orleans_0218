<?php

require '../vendor/autoload.php';
use GuzzleHttp\Client;



$client = new Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);
$response = $client->request('GET', 'all.json');

$body = $response->getBody();
$characteristics = json_decode($body);

for($i = 0; $i < 12; $i++) {

    $idRand = rand(1,500);

    $fighter[$i][] = $characteristics[$idRand]->name;
    $fighter [$i][] = $characteristics[$idRand]->powerstats->strength;
    $fighter [$i][] = $characteristics[$idRand]->powerstats->speed;
    $fighter [$i][] = $characteristics[$idRand]->powerstats->power;
    $fighter [$i][] = $characteristics[$idRand]->biography->aliases[0];
    $fighter [$i][] = $characteristics[$idRand]->images->md;

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/CSS/css-charselect.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid BGC">
    <div class="container">

        <h1 class="text-center">SSF4 : bisounour's edition</h1>

        <div class="row text-center">

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="../src/images/Ryurender.png" alt="">
                    <div class="caption color">
                        <h3 class="color">Ryu</h3>
                        <p class="color">Japan</p>
                        <p class="color">Surname : </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail TNVS">
                    <img src="../src/images/VS.png" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail ">
                    <img src="../src/images/Cammyrender.png" alt="">
                    <div class="caption ">
                        <h3 class="color">Cammy</h3>
                        <p class="color">USA</p>
                        <p class="color">Surname : </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center">Choose your fighter</h2>
        <div class="row">
            <?php for ($i=0; $i<12; $i++) : ?>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <!--<img src="../src/images/Cammyrender.png" alt="">-->
                        <div>
                            <img class="img-responsive" src="<?=$fighter[$i][5] ?>">
                        </div>
                        <h6 class="text-center"> <?=$fighter[$i][0] ?> </h6>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

</div>
</div>
</body>
</html>