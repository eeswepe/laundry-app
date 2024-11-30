<!DOCTYPE html>
<html>
<head>
    <title>Laundry List</title>
</head>
<body>
    <h1>Laundry List</h1>
    <h2>Daftar Laundry</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Layanan</th>
                <th>Rincian Pesanan</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pemesanan</th>
                <th>Selesai</th>
                <th>Dibayar</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($laundries)): ?>
                <?php foreach ($laundries as $laundry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($laundry['id']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['nama']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['nomor_hp']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['alamat']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['layanan']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['rincian_pesanan']); ?></td>
                        <td><?php echo htmlspecialchars($laundry['metode_pembayaran']); ?></td>
                        <td><?php echo htmlspecialchars(date('d-m-Y', strtotime($laundry['order_date']))); ?></td>
                        <td><?php echo htmlspecialchars($laundry['is_finish'] ? 'Yes' : 'No'); ?></td>
                        <td><?php echo htmlspecialchars($laundry['is_paid'] ? 'Yes' : 'No'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">Tidak ada data laundry.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div>
        <h3>Halaman:</h3>
        <?php for ($i = 1 ; $i <= $totalPages; $i++): ?>
            <a href="/laundry-app/admin/dashboard&page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php if ($i < $totalPages): ?>
                |
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</body>
</html>