<?php

require_once '../vendor/autoload.php';
$twig_loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($twig_loader, array('cache' => '../cache/twig', 'debug' => true));

if (filter_has_var(INPUT_GET, 'p')) {
    $pagina = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_URL);
} else {
    $pagina = 'inicio';
}

$pagina .= '.html.twig';
$html = $twig->render($pagina);
print($html);
