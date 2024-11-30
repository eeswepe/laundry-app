<?php
require_once '../config/database.php';
require_once '../app/controllers/LaundryController.php';
require_once '../app/controllers/AdminController.php';

$laundryController = new LaundryController($pdo);
$adminController = new AdminController($pdo);

// Ambil URL dari parameter
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Routing sederhana
switch ($url) {

    case 'admin/login':
        $adminController->login();
        break;
    case 'admin/authenticate':
        $adminController->authenticate();
        break;
    case 'admin':
    case 'admin/dashboard':
        $adminController->dashboard();
        break;
    case 'admin/logout':
        $adminController->logout();
        break;

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