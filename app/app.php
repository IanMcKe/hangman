<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Word.php";

    if(empty($_SESSION['list_of_guesses'])) {
        $_SESSION['list_of_guesses'] = array();
    }

    $guess_app = new Silex\Application();

    $guess_app['debug'] = true;

    $guess_app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $guess_app->get("/", function() use ($guess_app) {
        $answer = "";
        return $guess_app['twig']->render('hangman.html.twig', array('bool_array' => $answer));
    });

    $guess_app->get("/start_game", function() use ($guess_app){
        $words = array("firework","portland", "techno", "umbrella", "sailboat",
        "pomegranate", "tattoo", "walrus", "whiskey", "torture");
        $answer = new Word($words[rand(0, 9)]);
        $bool_array = $answer->numSpaces();
        return $guess_app['twig']->render('hangman.html.twig', array('bool_array' => $bool_array));
    });

    /*
    $guess_app->post("/hangman", function() use ($guess_app) {

    }) */

    return $guess_app;

?>
