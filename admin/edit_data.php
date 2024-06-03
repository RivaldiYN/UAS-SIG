<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Titik Api</h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id_titik'];
                            $query = mysqli_query($koneksi, "select * from titik_api where id_titik='$id'");
                            $data  = mysqli_fetch_array($query);
                            ?>
                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ID Titik</label>
                                        <div class="col-sm-8">
                                            <input name="id_titik" type="text" id="id_titik" class="form-control" value="<?php echo $data['id_titik']; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Kabupaten/Kota</label>
                                        <div class="col-sm-8">
                                            <input name="kabupaten_kota" type="text" id="kabupaten_kota" class="form-control" value="<?php echo $data['kabupaten_kota']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Ibukota</label>
                                        <div class="col-sm-8">
                                            <input name="ibukota" class="form-control" id="ibukota" type="text" value="<?php echo $data['ibukota']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Luas Wilayah(Km2)</label>
                                        <div class="col-sm-8">
                                            <input name="luas_wilayah" class="form-control" id="luas_wilayah" type="text" value="<?php echo $data['luas_wilayah']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <div class="col-sm-8">
                                            <input name="status" class="form-control" type="text" id="status" type="text" value="<?php echo $data['status']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Titik Panas</label>
                                        <div class="col-sm-8">
                                            <input name="titik_panas" class="form-control" type="text" id="titik_panas" type="text" value="<?php echo $data['titik_panas']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Curah Hujan</label>
                                        <div class="col-sm-8">
                                            <input name="curah_hujan" class="form-control" type="text" id="curah_hujan" type="text" value="<?php echo $data['curah_hujan']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Latitude</label>
                                        <div class="col-sm-8">
                                            <input name="latitude" class="form-control" id="latitude" type="text" value="<?php echo $data['latitude']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Longitude</label>
                                        <div class="col-sm-8">
                                            <input name="longitude" class="form-control" id="longitude" type="text" value="<?php echo $data['longitude']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>