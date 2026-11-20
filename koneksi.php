<?php
// File: koneksi.php
$host = 'localhost';
$user = 'root';
$dbname = 'storyfactory_db';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user);
    // Mengatur mode error PDO menjadi Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Koneksi Database Gagal: " . $e->getMessage());
}
?>