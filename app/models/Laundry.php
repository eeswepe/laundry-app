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

    public function getAllLaundry($limit, $offset) {
        $stmt = $this->pdo->prepare("SELECT * FROM orders ORDER BY order_date DESC LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalLaundry() {
        $stmt = $this->pdo->query("SELECT COUNT(*) FROM orders");
        return $stmt->fetchColumn();
    }

    public function deleteLaundry($id) {
        $stmt = $this->pdo->prepare("DELETE FROM orders WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getUnfinishedLaundryCount() {
        $stmt = $this->pdo->query("SELECT COUNT(*) FROM orders WHERE is_finish = 0");
        return $stmt->fetchColumn();
    }

    public function getUnpaidLaundryCount() {
        $stmt = $this->pdo->query("SELECT COUNT(*) FROM orders WHERE is_paid = 0");
        return $stmt->fetchColumn();
    }

}
?>