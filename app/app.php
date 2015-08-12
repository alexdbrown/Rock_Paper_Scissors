<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RockPaperScissors.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->post("/", function() use ($app) {
        $game = new RockPaperScissors ($_POST[''])
        return $app['twig']->render('play_one.html.twig');
    });

    $app->post("/player_two", function() use ($app) {
        return $app['twig']->render('play_two.html.twig');
    });

    return $app;
 ?>
