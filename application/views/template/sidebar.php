<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle"
                    alt="User Image">
            </div>
            <div class="pull-left info">

                <?php foreach ($admin as $a) : ?>
                <p><?= $a['nama']; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> <?= $a['email']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- End Sidebar user panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="nav-item">
                <a href="<?= base_url('Home/index'); ?>">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Dashboard/index'); ?>">
                    <i class="fa fa-folder"></i> <span>Pariwisata</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('Saran/index'); ?>">
                    <i class="fa fa-envelope"></i> <span>Data Saran</span>
                </a>
            </li>
            <li class="nav-item">
                <a onclick="javascript: return confirm('Logout ?')" href="<?php echo base_url('Login/logout'); ?>">
                    <i class="fa fa-sign-out"></i> <span>Log out</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>