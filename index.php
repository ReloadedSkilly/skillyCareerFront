<?php
require 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array());

echo $twig->render('index.html', array(
      'userFirstname' =>'Jean',
      'userLastname'=>'Veuplusse',
      'userJob'=>'Compagnon sur site nucléaire',
));

?>
