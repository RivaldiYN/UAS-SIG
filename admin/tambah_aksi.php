<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$kabupaten_kota = $_POST['kabupaten_kota'];
$ibukota = $_POST['ibukota'];
$luas_wilayah = $_POST['luas_wilayah'];
$status = $_POST['status'];
$titik_panas = $_POST['titik_panas'];
$curah_hujan = $_POST['curah_hujan'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query($koneksi, "insert into titik_api values('','$kabupaten_kota','$ibukota','$luas_wilayah','$status', '$titik_panas','$curah_hujan','$latitude','$longitude')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");