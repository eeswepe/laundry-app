<!DOCTYPE html>
<html>
<head>
    <title>Add Laundry</title>
</head>
<body>
    <h1>Add Laundry</h1>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="nomor_hp" placeholder="Nomor HP" required>
        <input type="text" name="alamat" placeholder="Alamat" required>
        <select name="layanan" required>
            <option value="">-- Layanan --</option>
            <option value="Cuci Kering">Cuci Kering</option>
            <option value="Cuci Basah">Cuci Basah</option>
            <option value="Setrika">Setrika</option>
        </select>
        <textarea name="rincian_pesanan" placeholder="Rincian Pesanan" required></textarea>
        <select name="metode_pembayaran" required>
            <option value="">-- Payment Method --</option>
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
        </select>
        <button type="submit">Add</button>
    </form>
    <a href="list">Back to List</a>
</body>
</html>