<div
    class="sidebar os-host os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden os-theme-light">

    <!-- Sidebar Menu -->
    <?php
	$sg1 = $this->uri->segment(1);
	$sg2 = $this->uri->segment(2,1);
	$sg3 = $this->uri->segment(3,1);
	?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indentZ" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="<?= base_url('main') ?>"
                    class="nav-link <?php if($sg1 == '' || $sg1 == 'main'){ echo 'active'; } ?>">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Beranda</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('user') ?>" class="nav-link <?php if($sg1 == 'user'){ echo 'active'; } ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>User</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>