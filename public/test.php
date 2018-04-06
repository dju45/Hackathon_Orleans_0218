<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 05/04/18
 * Time: 22:39
 */

require __DIR__ . '/../vendor/autoload.php';
require '../src/Fighter.php';
$goldorak = new src\Fighter();
echo $goldorak->getName();



