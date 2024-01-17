
<?php

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

if ($page == 'Contact') {
    include 'pages/contact.php';
} else if ($page == 'Hobby') {
    include 'pages/hobby.php';
} else if ($page == 'CV') {
    include 'pages/Augustin.php';
} else {
    header('HTTP/1.0 404 Not Found');
    include 'pages/header.php';
    include 'pages/404.html';
    include 'pages/footer.php';
}

?>