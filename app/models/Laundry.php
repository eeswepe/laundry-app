<?php
class Laundry {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addLaundry($nama, $owner, $alamat, $layanan, $rincian_pesanan, $payment_method) {
        $stmt = $this->pdo->prepare("INSERT INTO orders (nama, nomor_hp, alamat, layanan, rincian_pesanan, metode_pembayaran, is_finish, is_paid) VALUES (:nama, :owner, :alamat, :layanan, :rincian_pesanan, :payment_method, 0, 0)");
        $stmt->execute([
            ':nama' => $nama,
            ':owner' => $owner,
            ':alamat' => $alamat,
            ':layanan' => $layanan,
            ':rincian_pesanan' => $rincian_pesanan,
            ':payment_method' => $payment_method
        ]);
    }

    public function getAllLaundry() {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>