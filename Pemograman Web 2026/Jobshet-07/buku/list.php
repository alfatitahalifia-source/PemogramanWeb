<?php
$page_title = "Daftar Buku";
include __DIR__ . '/../includes/header.php';
/**Mengambil flash message */
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
/** Mengambil data buku */
$buku = $_SESSION['buku'] ?? [];
?>
<section>
    <h2>Daftar Buku</h2>
    <?php if ($flash): ?>
        <div class="flash flash-<?php echo $flash['type']; ?>">
            <?php echo $flash['message']; ?>
        </div>
    <?php endif; ?>
    <p>
        <a href="tambah.php">
            Tambah Buku
        </a>
    </p>
    <?php if (empty($buku)): ?>
        <p>
            Belum ada data buku.
        </p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $index => $item): ?>
                    <tr>
                        <td>
                            <?php echo $index + 1; ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($item['judul']); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($item['pengarang']); ?>
                        </td>
                        <td>
                            <?php echo $item['tahun']; ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($item['isbn']); ?>
                        </td>
                        <td>
                            <?php echo $item['stok']; ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($item['kategori']); ?>
                        </td>
                        <td>
                            <button type="button">
                                Edit
                            </button>
                            <button type="button">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>