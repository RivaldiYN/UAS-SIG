<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../tampil_data.php?pesan=belum_login");
}
include "../koneksi.php";
?>

<?php include "header.php"; ?>

<style>
    .text-bawah {
        width: 500px;
        margin: auto;
        margin-bottom: 17px;
    }

    .btn-kunjung {
        background-color: #F0B60C;
        color: black;
    }
</style>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>
                <br>
                <br>
                <br>
                <br>
                <center><img src="Assetsbaru/gambar-tengah.png" alt="" width="500px"> </center>
                <br>
                <h2 class="text-bawah">
                    <center><b> SISTEM INFORMASI GEOGRAFIS
                            SEBARAN TITIK PANAS DI PROVINSI
                            INDONESIA TERHADAP POTENSI KARHUTLA</b> </center>
                </h2>
                <h2>
                    <center><a href="../index.php"><button class="btn btn-kunjung" type="button"
                                href="../index.php">KUNJUNGI WEBSITE</button></a></center>
                </h2>
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>