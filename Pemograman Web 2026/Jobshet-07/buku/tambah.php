<?php
$page_title = "Tambah Buku";
include __DIR__ . '/../includes/header.php';
?>

<section>
    <h2>Tambah Buku</h2>
    <form action="proses_tambah.php" method="POST">
        <div>
            <label for="judul">Judul Buku</label>
            <input
                type="text"
                id="judul"
                name="judul"
                required
            >
        </div>

        <div>
            <label for="pengarang">Pengarang</label>
            <input
                type="text"
                id="pengarang"
                name="pengarang"
                required
            >
        </div>

        <div>
            <label for="tahun">Tahun Terbit</label>
            <input
                type="number"
                id="tahun"
                name="tahun"
                min="1900"
                max="2026"
                required
            >
        </div>

        <div>
            <label for="isbn">ISBN</label>
            <input
                type="text"
                id="isbn"
                name="isbn"
            >
        </div>

        <div>
            <label for="stok">Stok</label>
            <input
                type="number"
                id="stok"
                name="stok"
                min="0"
                required
            >
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input
                type="text"
                id="kategori"
                name="kategori"
            >
        </div>

        <button type="submit">
            Simpan Buku
        </button>
    </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>