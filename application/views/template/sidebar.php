

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#305037;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Dashboard')?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?php echo base_url('assets/img/kabbekasi.png') ?>" alt="Logo" style="width: 100%;">
                </div>
                <div class="sidebar-brand-text mx-3">Kecamatan Karang Bahagia</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Dashboard')?>">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Latihan')?>">
                    <i class="fa fa-fw fa-laptop"></i>
                    <span>Cara Pembuatan KTP</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Buku')?>">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Daftar KTP</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Kategori')?>">
                    <i class="fas fa-fw fa-shapes"></i>
                    <span>Lapor Keluhan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://instagram.com/keckarangbahagia?igshid=N2ZiY2E3YmU=">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Instagram</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://wa.me/6285158845023">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Hubungi Pelayanan Masyarakat</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2">
                    Kelompok 1 Keren!
                </p>
            </div>

        </ul>
        <!-- End of Sidebar -->
