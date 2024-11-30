<?php
require_once '../config/database.php';
require_once '../app/models/Laundry.php';

class LaundryController {
    private $laundryModel;

    public function __construct($pdo) {
        $this->laundryModel = new Laundry($pdo);
    }

    public function index() {
        require '../app/views/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $nomor_hp = $_POST['nomor_hp'];
            $alamat = $_POST['alamat'];
            $layanan = $_POST['layanan'];
            $rincian_pesanan = $_POST['rincian_pesanan'];
            $payment_method = $_POST['metode_pembayaran'];
            $this->laundryModel->addLaundry($nama, $nomor_hp, $alamat, $layanan, $rincian_pesanan, $payment_method);
            header("Location: /laundry-app/public/index.php");
            exit();
        }
        require '../app/views/add.php';
    }

    public function list() {
        $laundryList = $this->laundryModel->getAllLaundry();
        require '../app/views/list.php';
    }
}
?>