<?php
$page_title = "Tambah Anggota";
include __DIR__ . '/../includes/header.php';
?>
<section>
    <h2>Tambah Anggota</h2>
    <form action="proses_tambah.php" method="POST">

        <div>
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                required
            >
        </div>
        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >
        </div>
        <div>
            <label for="no_hp">No. HP</label>
            <input
                type="text"
                id="no_hp"
                name="no_hp"
                required
            >
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <textarea
                id="alamat"
                name="alamat"
                rows="4"
                required
            ></textarea>
        </div>
        <button type="submit">Simpan Anggota</button>
    </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>