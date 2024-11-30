<?php
session_start();

require_once '../app/models/Laundry.php';

class AdminController {
    private $laundryModel;

    public function __construct($pdo) {
        $this->laundryModel = new Laundry($pdo);
    }

    public function login() {
        require '../app/views/admin/login.php';
    }

    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Ganti dengan username dan password yang sesuai
            if ($username === 'admin' && $password === 'password') {
                $_SESSION['admin_logged_in'] = true;
                header('Location: /laundry-app/admin/dashboard');
                exit();
            } else {
                $error = "Username atau password salah!";
                require '../app/views/admin/login.php';
            }
        }
    }

    public function dashboard() {
        if (!isset($_SESSION['admin_logged_in'])) {
            header('Location: /laundry-app/admin/login');
            exit();
        }
        $laundries = $this->laundryModel->getAllLaundry();
        require '../app/views/admin/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /laundry-app/admin/login');
        exit();
    }
}
?>