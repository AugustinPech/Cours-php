<?php

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

$directory = 'pages/';
$test = dirname($_SERVER['PHP_SELF']);
$filesPath = glob($directory . '*');

$filesNames = array_map(
    function ($val) {
        return explode(".", $val)[0];
    },
    scandir('pages', SCANDIR_SORT_NONE)
);

$indexName = array_search($page, $filesNames);
$indexPath = array_search(
    $page,
    array_map(
        function ($val) {
            return explode(".", explode('pages/', $val)[1])[0];
        },
        $filesPath
    )
);


if (isset($page) && $page == $filesNames[$indexName] && $page!='404') {
    include $filesPath[$indexPath];
} else {
    header('HTTP/1.0 404 Not Found');
    $metatitle = 'Erreur 404 - Not Found';
    include 'pages/header.php';
    include 'pages/404.html';
    include 'pages/footer.php';
}
