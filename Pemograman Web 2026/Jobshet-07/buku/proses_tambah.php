<?php
session_start();
/** Mengambil data dari form */
$judul = trim($_POST['judul'] ?? '');
$pengarang = trim($_POST['pengarang'] ?? '');
$tahun = trim($_POST['tahun'] ?? '');
$isbn = trim($_POST['isbn'] ?? '');
$stok = trim($_POST['stok'] ?? '');
$kategori = trim($_POST['kategori'] ?? '');

/** Validasi*/
$errors = [];
/* Judul wajib diisi */
if ($judul === '') {
    $errors[] = 'Judul buku wajib diisi.';
}
/* Pengarang wajib diisi */
if ($pengarang === '') {
    $errors[] = 'Pengarang wajib diisi.';
}
/* Tahun harus angka dan berada pada rentang 1900-2026 */
if (!is_numeric($tahun) || $tahun < 1900 || $tahun > 2026) {
    $errors[] = 'Tahun terbit harus berupa angka antara 1900 dan 2026.';
}
/* Stok harus angka dan tidak boleh negatif */
if (!is_numeric($stok) || $stok < 0) {
    $errors[] = 'Stok harus berupa angka dan tidak boleh negatif.';
}
if ($isbn !== '' && !preg_match('/^[0-9-]+$/', $isbn)) {
    $errors[] = 'ISBN hanya boleh berisi angka dan tanda hubung.';
}
/** Jika ada error*/
if (!empty($errors)) {

    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => implode('<br>', $errors)
    ];
    header('Location: tambah.php');
    exit;
}
/** Membuat session buku jika belum ada*/
if (!isset($_SESSION['buku'])) {
    $_SESSION['buku'] = [];
}
/*** Menambahkan data buku */
$_SESSION['buku'][] = [
    'judul' => $judul,
    'pengarang' => $pengarang,
    'tahun' => (int) $tahun,
    'isbn' => $isbn,
    'stok' => (int) $stok,
    'kategori' => $kategori
];
/* * Pesan berhasil */
$_SESSION['flash'] = [
    'type' => 'success',
    'message' => 'Data buku berhasil ditambahkan.'
];
/* * Kembali ke daftar buku */
header('Location: list.php');
exit;