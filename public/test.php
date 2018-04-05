<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/04/18
 * Time: 22:39
 */

require '../src/Fighter.php';
$goldorak = new src\Fighter(Goldorak,100,15, 45);
$casimir = new src\Fighter(Casimir,75,43, 30);

var_dump($goldorak);
var_dump($casimir);

$goldorak->defense($casimir, 'bas', 'bas');

var_dump($goldorak);
var_dump($casimir);

$casimir->defense($goldorak, 'haut', 'bas');

var_dump($goldorak);
var_dump($casimir);

$casimir->defense($goldorak, 'haut', 'bas');
$casimir->defense($goldorak, 'haut', 'bas');

var_dump($goldorak);
var_dump($casimir);

