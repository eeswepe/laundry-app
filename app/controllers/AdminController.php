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

        $notProcessedLaundryCount = $this->laundryModel->getNotProcessedLaundryCount();
        $inProgressLaundryCount = $this->laundryModel->getInProgressLaundryCount();
        $finishedLaundryCount = $this->laundryModel->getFinishedLaundryCount();
        $unpaidLaundryCount = $this->laundryModel->getUnpaidLaundryCount();

        $statusFilter = isset($_GET['status']) ? $_GET['status'] : '';
        
        $searchId = isset($_GET['search_id']) ? $_GET['search_id'] : '';

        $limit = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page -1) * $limit;
        $totalLaundry = $this->laundryModel->getTotalLaundry();
        $totalPages = ceil($totalLaundry / $limit);

        if ($searchId) {
            $laundries = $this->laundryModel->getLaundryById($searchId);
        } else if ($statusFilter) {
            $laundries = $this->laundryModel->getLaundryByStatus($statusFilter, $limit, $offset);
        } else {
            $laundries = $this->laundryModel->getAllLaundry($limit, $offset);
        }



        require '../app/views/admin/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /laundry-app/admin/login');
        exit();
    }

    public function deleteLaundry(){
        if(!isset($_SESSION['admin_logged_in'])) {
            header('Location: /laundry-app/admin/login');
            exit();
        }
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->laundryModel->deleteLaundry($id);
        }
        header('Location: /laundry-app/admin/dashboard');
        exit();
    }

    public function markInProgress(){
        if(!isset($_SESSION['admin_logged_in'])) {
            header('Location: /laundry-app/admin/login');
            exit();
        }
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->laundryModel->updateLaundryStatus($id, 'In Progress');
        }
        header('Location: /laundry-app/admin/dashboard');
        exit();
    }   

    public function markFinished(){
        if(!isset($_SESSION['admin_logged_in'])) {
            header('Location: /laundry-app/admin/login');
            exit();
        }
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->laundryModel->updateLaundryStatus($id, 'Finished');
        }
        header('Location: /laundry-app/admin/dashboard');
        exit();
    }

    public function markPaid(){
        if(!isset($_SESSION['admin_logged_in'])) {
            header('Location: /laundry-app/admin/login');
            exit();
        }
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->laundryModel->updateLaundryIsPaid($id);
        }
        header('Location: /laundry-app/admin/dashboard');
        exit();
    }

}
?>