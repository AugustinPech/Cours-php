
<?php
$page = $_GET["page"];
if ($page =='Contact') {
        include 'pages/contact.php';
    } else if ($page =='Hobby') {
        include 'pages/hobby.php';
    } else {
        include 'pages/Augustin.php';
    }
?>