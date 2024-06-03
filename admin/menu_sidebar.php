<style>
    .sidebar {
        background-color: #F0B60C;
        width: 500px !important;
    }

    .logo-sidebar {
        background-color: white;
    }

    .text {
        margin-bottom: 0px;
        color: black;
    }

    .text-white {
        color: white;
    }

    .logo-brand {
        margin-left: 2px;
    }

    .sidebarToggle {
        background: url(AssetsAdmin/arrow-left-right.svg) center;
    }
</style>
<!-- Sidebar -->
<ul class="navbar-nav sidebar accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center logo-sidebar" href="index.php">
        <div class="sidebar-brand-icon">
            <img class="rounded-circle" src="../assets/img/logoSIG.png" width="50px" alt="...">
        </div>
        <div class="sidebar-brand-text text-left">
            <p class="text">
                SIG - Kelompok 9
            </p>
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <img src="Assetsbaru/logo-dashboard.png" alt="">
            <span class="text-white">Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="tampil_data.php">
            <img src="Assetsbaru/logo-dataapi.png" alt="">
            <span class="text-white">Data Titik Api</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="tambah_data.php">
            <img src="Assetsbaru/logo-tambahdata.png" alt="">
            <span class="text-white">Tambah Data</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 o-hidden" id="sidebarToggle" alt=""></button>
    </div>
</ul>
<!-- End of Sidebar -->