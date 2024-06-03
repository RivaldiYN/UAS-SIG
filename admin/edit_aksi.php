<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_titik = $_POST['id_titik'];
$kabupaten_kota = $_POST['kabupaten_kota'];
$ibukota = $_POST['ibukota'];
$luas_wilayah = $_POST['luas_wilayah'];
$status = $_POST['status'];
$titik_panas = $_POST['titik_panas'];
$curah_hujan = $_POST['curah_hujan'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update titik_api set kabupaten_kota='$kabupaten_kota', ibukota='$ibukota', luas_wilayah='$luas_wilayah', status='$status', titik_panas='$titik_panas', curah_hujan='$curah_hujan', latitude='$latitude', longitude='$longitude' where id_titik='$id_titik'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
