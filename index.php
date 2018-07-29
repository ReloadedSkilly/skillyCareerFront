<?php

require 'vendor/autoload.php';
require 'MyExtension.php';

// Routing.
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

// Template rendering.
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => __DIR__ . '/cache',
  //'cache' => FALSE,
  'debug' => TRUE
));
$twig->addExtension(new MyExtension());
$twig->addExtension(new Twig_Extensions_Extension_Text());
$twig->addGlobal('current_page', $page);

switch ($page) {
  case 'home':
    $values = array(
      'seo' => array(
        'title' => 'home',
      ),
    );
    echo $twig->render('home.twig', $values);
    break;
  case 'welcome':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'jobs' => array(
          '0'=>'Compagnon sur site nucléaire',
          '1'=>'Conducteur de travaux',
          '2'=>'Suivi de chantiers')
    );
    echo $twig->render('welcome.twig', $values);
    break;
  case 'evaluation':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'capacities' => array(
          '1' => "Accompagner et former les nouveaux arrivants",
          '2' => "Alerter sa hiérarchie en situation d'urgence",
          '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
          '4' => "Comprendre et transmettre un message oral",
          '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
      )
    );
    echo $twig->render('evaluation.twig', $values);
    break;
  case 'evaluation-summary':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'capacities' => array(
          '1' => "Accompagner et former les nouveaux arrivants",
          '2' => "Alerter sa hiérarchie en situation d'urgence",
          '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
          '4' => "Comprendre et transmettre un message oral",
          '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
      )
    );
    echo $twig->render('evaluation-summary.twig', $values);
    break;
  case 'stats':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'capacities' => array(
          '1' => "Accompagner et former les nouveaux arrivants",
          '2' => "Alerter sa hiérarchie en situation d'urgence",
          '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
          '4' => "Comprendre et transmettre un message oral",
          '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
      )
    );
    echo $twig->render('stats.twig', $values);
    break;
  case 'profil':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'capacities' => array(
          '1' => "Accompagner et former les nouveaux arrivants",
          '2' => "Alerter sa hiérarchie en situation d'urgence",
          '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
          '4' => "Comprendre et transmettre un message oral",
          '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
      )
    );
    echo $twig->render('profil.twig', $values);
    break;
  case 'bouger':
    $values = array(
      'user' => array(
        'firstname' => 'Jean',
        'lastname' => 'Veuplusse',
        'job' => 'Compagnon sur site nucléaire',
        ),
      'capacities' => array(
          '1' => "Accompagner et former les nouveaux arrivants",
          '2' => "Alerter sa hiérarchie en situation d'urgence",
          '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
          '4' => "Comprendre et transmettre un message oral",
          '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
      )
    );
    echo $twig->render('bouger.twig', $values);
    break;
    case 'perfectionner':
      $values = array(
        'user' => array(
          'firstname' => 'Jean',
          'lastname' => 'Veuplusse',
          'job' => 'Compagnon sur site nucléaire',
          ),
        'capacities' => array(
            '1' => "Accompagner et former les nouveaux arrivants",
            '2' => "Alerter sa hiérarchie en situation d'urgence",
            '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
            '4' => "Comprendre et transmettre un message oral",
            '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
        )
      );
      echo $twig->render('perfectionner.twig', $values);
      break;
    case 'evoluer':
      $values = array(
        'user' => array(
          'firstname' => 'Jean',
          'lastname' => 'Veuplusse',
          'job' => 'Compagnon sur site nucléaire',
          ),
        'capacities' => array(
            '1' => "Accompagner et former les nouveaux arrivants",
            '2' => "Alerter sa hiérarchie en situation d'urgence",
            '3' => "Communiquer les informations nécessaires à la production en situation d'urgence",
            '4' => "Comprendre et transmettre un message oral",
            '5' => "Participer activement à un projet collectif (travaux, quart d'heure sécurité)"
        )
      );
      echo $twig->render('evoluer.twig', $values);
      break;
}
