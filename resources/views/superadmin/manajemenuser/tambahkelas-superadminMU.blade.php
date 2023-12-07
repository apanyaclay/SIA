

<?php
// Sambungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smp_amalyatul_huda";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Atur mode error PDO ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

// Proses form jika dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    // Ambil data dari form
$id_kelas = ($_POST['id_kelas']) ? $_POST['id_kelas'] : uniqid();
$wali_kelas = !empty($_POST['wali_kelas']) ? $_POST['wali_kelas'] : null;
$nama_kelas = !empty($_POST['nama_kelas']) ? $_POST['nama_kelas'] : null;
$tingkatan = !empty($_POST['tingkatan']) ? $_POST['tingkatan'] : null;
$kelompok_kelas = !empty($_POST['kelompok_kelas']) ? $_POST['kelompok_kelas'] : null;

// SQL untuk menambahkan data kelas ke dalam tabel kelas
$sql = "INSERT INTO kelas (id_kelas, wali_kelas, nama_kelas, tingkatan, kelompok_kelas)
        VALUES (:id_kelas, :wali_kelas, :nama_kelas, :tingkatan, :kelompok_kelas)";

// Persiapkan statement SQL menggunakan PDO
$stmt = $conn->prepare($sql);

// Bind parameter ke statement
$stmt->bindParam(':id_kelas', $id_kelas);
$stmt->bindParam(':wali_kelas', $wali_kelas);
$stmt->bindParam(':nama_kelas', $nama_kelas);
$stmt->bindParam(':tingkatan', $tingkatan);
$stmt->bindParam(':kelompok_kelas', $kelompok_kelas);


/*
    $id_kelas = $_POST['id_kelas'];
    $wali_kelas = $_POST['wali_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $tingkatan = $_POST['tingkatan'];
    $kelompok_kelas = $_POST['kelompok_kelas'];

    // SQL untuk menambahkan data kelas ke dalam tabel kelas
    $sql = "INSERT INTO kelas (id_kelas, wali_kelas, nama_kelas, tingkatan, kelompok_kelas)
            VALUES (:id_kelas, :wali_kelas, :nama_kelas, :tingkatan, :kelompok_kelas)";
    
    // Persiapkan statement SQL menggunakan PDO
    $stmt = $conn->prepare($sql);

    // Bind parameter ke statement
    
    $id_kelas = uniqid(); // Atur ID kelas sesuai kebutuhan, bisa menggunakan AUTO_INCREMENT di database
    $wali_kelas = null;
    $nama_kelas = null; // Isi dengan data wali kelas jika ada
    $tingkatan = null; // Isi dengan data tingkatan jika ada
    $kelompok_kelas = null; // Isi dengan data kelompok kelas jika ada

    $stmt->bindParam(':id_kelas', $id_kelas);
    $stmt->bindParam(':wali_kelas', $wali_kelas);
    $stmt->bindParam(':nama_kelas', $nama_kelas);
    $stmt->bindParam(':tingkatan', $tingkatan);
    $stmt->bindParam(':kelompok_kelas', $kelompok_kelas);
*/
    // Eksekusi statement
    try {
        $stmt->execute();
        echo "Data kelas berhasil ditambahkan.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Tampilan HTML -->
@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH KELAS</h1>
          
<div class="tablewali">
    <form action="/tambahkelas-superadminMU" method="post">
        @csrf
        <div class="form-group">
            <label for="id_kelas">ID Kelas:</label>
            <input type="text" class="form-control" id="id_kelas" name="id_kelas" >
        </div>
        <div class="form-group">
            <label for="wali_kelas">Wali Kelas:</label>
            <input type="text" class="form-control" id="wali_kelas" name="wali_kelas">
        </div>
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas:</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
        </div>
        <div class="form-group">
            <label for="tingkatan_kelas">Tingkatan Kelas:</label>
            <input type="text" class="form-control" id="tingkatan_kelas" name="tingkatan_kelas">
        </div>
        <div class="form-group">
            <label for="kelompok_kelas">Kelompok Kelas:</label>
            <input type="text" class="form-control" id="kelompok_kelas" name="kelompok_kelas">
        </div>
        <button type="submit" class="btn btn-warning">Tambah Kelas</button>
    </form>
</div> 




@endsection
