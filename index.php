<?php
include_once('_config.php');

MyAutoload::start();


if(isset($_GET['r'])){

    $request = $_GET['r']; // index.php?r....

} else {

  $request = 'home';
}


$routeur = new Routeur($request);
$routeur->renderController();
