<?php
session_start();

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');

$errors = [];

if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($email === '') {
    $errors[] = 'Email wajib diisi.';
}

if ($no_hp === '') {
    $errors[] = 'No. HP wajib diisi.';
}

if ($alamat === '') {
    $errors[] = 'Alamat wajib diisi.';
}

if (!empty($errors)) {
    $_SESSION['flash'] = [
        'type' => 'error',
        'message' => implode('<br>', $errors)
    ];

    header('Location: tambah.php');
    exit;
}

if (!isset($_SESSION['anggota'])) {
    $_SESSION['anggota'] = [];
}

$_SESSION['anggota'][] = [
    'nama' => $nama,
    'email' => $email,
    'no_hp' => $no_hp,
    'alamat' => $alamat
];

$_SESSION['flash'] = [
    'type' => 'success',
    'message' => 'Data anggota berhasil ditambahkan.'
];

header('Location: list.php');
exit;