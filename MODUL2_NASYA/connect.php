<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$databaseHost = 'localhost';
$databaseName = 'db_perpustakaan';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>