<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>
<body class="bg-gray-100 p-5">
    <h1 class="text-3xl font-bold mb-4">Laundry List</h1>
    <h2 class="text-xl mb-4">Daftar Laundry</h2>
    
    <form action="/laundry-app/list" method="GET" class="mb-4">
        <input type="text" name="search_id" placeholder="Cari berdasarkan ID" class="border rounded p-2 mr-2" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cari</button>
    </form>
    
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Nama</th>
                <th class="py-2 px-4">Layanan</th>
                <th class="py-2 px-4">Metode Pembayaran</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Dibayar</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($laundries)): ?>
                <?php foreach ($laundries as $laundry): ?>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-2 px-4 border-r"><?php echo htmlspecialchars($laundry['id']); ?></td>
                        <td class="py-2 px-4 border-r"><?php echo htmlspecialchars($laundry['nama']); ?></td>
                        <td class="py-2 px-4 border-r"><?php echo htmlspecialchars($laundry['layanan']); ?></td>
                        <td class="py-2 px-4 border-r"><?php echo htmlspecialchars($laundry['metode_pembayaran']); ?></td>
                        <td class="py-2 px-4 border-r"><?php echo htmlspecialchars($laundry['status']); ?></td>
                        <td class="py-2 px-4"><?php echo htmlspecialchars($laundry['is_paid'] ? 'Sudah Dibayar' : 'Belum Dibayar'); ?></td>
                        <td class="py-2 px-4">
                            <button type="button" onclick="showPopup(<?php echo htmlspecialchars(json_encode($laundry)); ?>)" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center py-2">Tidak ada data laundry.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
    <div class="mt-4">
        <h3 class="text-lg">Halaman:</h3>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="/laundry-app/admin/dashboard&page=<?php echo $i; ?>" class="text-blue-500 hover:underline"><?php echo $i; ?></a>
            <?php if ($i < $totalPages): ?>
                <span class="mx-2">|</span>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    
    <script>
        function showPopup(laundry) {
            Swal.fire({
                title: 'Detail Laundry',
                html: '<p>ID: ' + laundry.id + '</p>' +
                    '<p>Nama: ' + laundry.nama + '</p>' +
                    '<p>Layanan: ' + laundry.layanan + '</p>' +
                    '<p>Metode Pembayaran: ' + laundry.metode_pembayaran + '</p>' +
                    '<p>Status: ' + laundry.status + '</p>' +
                    '<p>Dibayar: ' + (laundry.is_paid ? 'Sudah Dibayar' : 'Belum Dibayar') + '</p>' +
                    '<img src="./qrcodes/qris_' + laundry.id + '.png" class="w-1/2 mx-auto mt-4" onerror="this.style.display=\'none\'; document.getElementById(\'noImageText\').style.display=\'block\';" />' +
                    '<p id="noImageText" class="text-center mt-4" style="display:none;">Nominal pembayaran belum di update</p>',
                showCancelButton: true,
                confirmButtonText: 'Tutup',
                cancelButtonText: 'Kembali',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return new Promise((resolve) => {
                        setTimeout(() => {
                            resolve();
                        }, 1000);
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            });
        }
    </script>
</body>
</html>

