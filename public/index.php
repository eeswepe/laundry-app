<?php
require_once '../config/database.php';
require_once '../app/controllers/LaundryController.php';

$laundryController = new LaundryController($pdo);

// Ambil URL dari parameter
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Routing sederhana
switch ($url) {
    case '':
        $laundryController->index();
        break;
    case 'add':
        $laundryController->add();
        break;
    case 'list':
        $laundryController->list();
        break;
    default:
         $laundryController->index();
        break;
}
?>