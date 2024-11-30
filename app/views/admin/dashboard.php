<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <a href="/laundry-app/public/index.php?url=admin/logout">Logout</a>
    <h2>Laundry List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Layanan</th>
            <th>Rincian Pesanan</th>
            <th>Metode Pembayaran</th>
            <th>Selesai</th>
            <th>Dibayar</th>
        </tr>
        <?php foreach ($laundries as $laundry): ?>
        <tr>
            <td><?php echo htmlspecialchars($laundry['id']); ?></td>
            <td><?php echo htmlspecialchars($laundry['nama']); ?></td>
            <td><?php echo htmlspecialchars($laundry['nomor_hp']); ?></td>
            <td><?php echo htmlspecialchars($laundry['alamat']); ?></td>
            <td><?php echo htmlspecialchars($laundry['layanan']); ?></td>
            <td><?php echo htmlspecialchars($laundry['rincian_pesanan']); ?></td>
            <td><?php echo htmlspecialchars($laundry['metode_pembayaran']); ?></td>
            <td><?php echo htmlspecialchars($laundry['is_finish'] ? 'Yes' : 'No'); ?></td>
            <td><?php echo htmlspecialchars($laundry['is_paid'] ? 'Yes' : 'No'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>