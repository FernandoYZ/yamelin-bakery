<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$pagePath = "pages/$page.php";

if (!file_exists($pagePath)) {
    $pagePath = "pages/404.php";
}

include 'layout/main.php';
