<?php
//bootstrap doctrime
include_once('bootstrap.php');
//Twig
include_once('../lib/vendor/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
  'cache' => false
));