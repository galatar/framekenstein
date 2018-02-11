<?php

require_once '../vendor/autoload.php';
$twig_loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($twig_loader, array('cache' => '../cache/twig',));

//print("<p>Hola, soy Frami!</p>");

//$html = $twig->render('saludo.html.twig');
//print($html);

//$twig->display('saludo.html.twig');

// http://localhost:8080/index.php?p=saludo

//$pagina = $_GET['p'] . '.html.twig';
//$html = $twig->render($pagina);
//print($html);

if (filter_has_var(INPUT_GET, 'p')) {
    $pagina = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_URL);
} else {
    $pagina = 'inicio';
}
$pagina .= '.html.twig';
$html = $twig->render($pagina);
print($html);
