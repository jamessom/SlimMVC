<?php
// GET login route
$app->get('/login', function () use ($app) {
    $login = "Login";
    $app->render('login.html', array('login' => $login));
});

$app->post('/login', function () use ($app) {
    $user = new models\User();
    $usuarios = $user->getUsers();

    var_dump($usuarios);
    
    echo "tá aqui";
});
