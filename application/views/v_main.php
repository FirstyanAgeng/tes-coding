<!DOCTYPE html>
<html style="height: auto;" class="" lang="en">

<!-- load -->
<?php $this->load->view('layout/v_header'); ?>
<!-- end -->

<body class="sidebar-mini layout-fixed" style="height: auto;">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-secondary navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" role="button">
                        Halo,
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-dark-success">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link bg-gray">
                <img src="<?= base_url('assets/template/dist/img/AdminLTELogo.png'); ?>" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CRUD</span>
            </a>

            <!-- sidebar -->
            <?php $this->load->view('layout/v_sidebar'); ?>
            <!-- end-sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $this->load->view('layout/v_alert'); ?>
            <?php $this->load->view($konten); ?>
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer text-sm">
            <center>
                <font color="#000000">
                    CRUD | Copyright © 2023
                </font>
            </center>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- load -->
    <?php $this->load->view('layout/v_js'); ?>
    <?php $this->load->view('layout/v_script'); ?>
    <!-- end -->

</body>

</html>