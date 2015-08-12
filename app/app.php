<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('play_one.html.twig');
    });

    $app->get("/winners", function() use ($app) {
        $winner = new RockPaperScissors;
        $the_winner = $winner->playGame($_GET['player1'], $_GET['player2']);
        return $app['twig']->render('winners.html.twig', array('output' => $the_winner));
    });

    return $app;
 ?>
