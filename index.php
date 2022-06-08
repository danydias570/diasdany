<?php

// define("ROOT", "/home/u395987668/domains/diasdany.fr/public_html/");

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

if(!empty($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'home';
}

if(file_exists(ROOT . 'pages/' . $page . '/index.php'))
{
    require ROOT . 'pages/' . $page . '/index.php';
}
else
{
    // header('Location: https://diasdany.fr/');
    header('Location: /home');
    exit;
}