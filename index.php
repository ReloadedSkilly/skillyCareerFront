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
    // 'cache' => FALSE,
    'debug' => TRUE,
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
                '0' => ["cap1","Accompagner et former les nouveaux arrivants",[false,false,false,false,true]],
                '1' => ["cap2","Alerter sa hiérarchie en situation d'urgence",[false,false,true,false,false]],
                '2' => ["cap3","Communiquer les informations nécessaires à la production en situation d'urgence",[false,true,false,false,false]],
                '3' => ["cap4","Comprendre et transmettre un message oral",[false,false,true,false,false]],
                '4' => ["cap5","Participer activement à un projet collectif (travaux, quart d'heure sécurité)",[true,false,false,false,false]],
            ),
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
                '0' => ["cap1","Accompagner et former les nouveaux arrivants",[false,false,false,false,true]],
                '1' => ["cap2","Alerter sa hiérarchie en situation d'urgence",[false,false,true,false,false]],
                '2' => ["cap3","Communiquer les informations nécessaires à la production en situation d'urgence",[false,true,false,false,false]],
                '3' => ["cap4","Comprendre et transmettre un message oral",[false,false,true,false,false]],
                '4' => ["cap5","Participer activement à un projet collectif (travaux, quart d'heure sécurité)",[true,false,false,false,false]],
            ),
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
            'ejobs'=> array(
                '0' => ["Grutier à tour mobile H/F","Boulogne Billancourt, Île-de-France"],
                '1' => ["Grutier à tour mobile H/F","Boulogne Billancourt, Île-de-France"],
            ),
            'bjobs'=> array(
                '0' => ["Conducteur de travaux","Hauts de France, Lille",[false,false,false,false,true]],
            ),
            'skills'=> array(
                '0' => ["Conduire une réunion",14],
                '1' => ["Soudage",21],
            ),
            'alerts'=> array(
                '0' => ["région","Hauts de France"],
                '1' => ["ville","Lille, Hauts-de-France"],
                '2' => ["ville","Limoges, Limousin"],
            ),
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
            'cities' => array(
                '1' => "Limoges, Nouvelle Aquitaine",
                '2' => "Liège, Belgique",
                '3' => "Tulle, Limousin",
                '4' => "Lille, Hauts de France",
                '5' => "Ussac, Limousin",
                '6' => "Brive-la-Gaillarde, Limousin",
                '7' => "Levallois, Ile-de-France",
                '8' => "Lambert, Hauts-de-France",
            ),
            'jobs'=> array(
                '0' => ["Grutier à tour mobile H/F","Boulogne Billancourt, Île-de-France",true],
                '1' => ["Conducteur de travaux","Boulogne Billancourt, Île-de-France",false],
                '2' => ["Chef de chantier","Boulogne Billancourt, Île-de-France",true],
                '3' => ["Ingénieur conducteur de travaux","Boulogne Billancourt, Île-de-France",false],
            ),
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
            'skills'=> array(
                '0' => ["Conduire une réunion",true,12],
                '1' => ["Soudage",false,2],
                '2' => ["Chef de chantier",true,21],
                '3' => ["Capes chariot élévateur",false,11],
            ),
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
            'jobs'=> array(
                '0' => ["Ingénieur conducteur de travaux","Boulogne Billancourt, Île-de-France",true],
                '1' => ["Conducteur de travaux","Boulogne Billancourt, Île-de-France",false],
                '2' => ["Grutier à tour","Boulogne Billancourt, Île-de-France",true],
                '3' => ["Chef d’équipe énergie","Boulogne Billancourt, Île-de-France",false],
                '3' => ["Maçon","Boulogne Billancourt, Île-de-France",false],
            ),
        );
        echo $twig->render('evoluer.twig', $values);
        break;
    }
