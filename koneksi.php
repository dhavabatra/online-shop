<?php
$host = "localhost";
$uname = "root"; 
$pw = "";
$db = "online_shop";

$koneksi = new mysqli($host, $uname, $pw, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

//pembuatan tabel produk
$sql = "CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    harga INT NOT NULL,
    deskripsi TEXT(512) NOT NULL,
    stok INT NOT NULL
)";

//pembuatan tabel kategori
$sql2 = "CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR(255) NOT NULL,
    id_produk VARCHAR(255)
)";

//pembuatan tabel user
$sql3 = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    pw VARCHAR(255) NOT NULL
)";


//eksekusi tabel produk
if ($koneksi->query($sql) === TRUE) {
    echo "Tabel produk telah berhasil dibuat.   ";
} else {
    echo "Gagal membuat tabel produk " . $koneksi->error;
};

//eksekusi tabel kategori
if ($koneksi->query($sql2) === TRUE) {
    echo "Tabel kategori telah berhasil dibuat.   ";
} else {
    echo "Gagal membuat tabel kategori: " . $koneksi->error;
};

//eksekusi tabel user
if ($koneksi->query($sql3) === TRUE) {
    echo "Tabel user telah berhasil dibuat.   ";
} else {
    echo "Gagal membuat tabel user: " . $koneksi->error;
};

$koneksi->close();
?>
