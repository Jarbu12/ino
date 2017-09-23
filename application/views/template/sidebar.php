<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>assets/alumni/<?php echo $foto;?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $nama;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
               
           <?php if($this->session->userdata('level') == 2) {?>
            <li>
                <a href="<?php echo site_url('page=profile');?>">
                    <i class="fa fa-th"></i> <span>Profile</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=mahasiswa');?>">
                    <i class="fa fa-group"></i> <span>List Alumni</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=kuesioner&act=kuesioner_field');?>">
                    <i class="fa fa-envelope"></i> <span>Kuesioner</span> 
                </a>
            </li>
             <li>
                <a href="<?php echo site_url('page=perusahaan');?>">
                    <i class="fa fa-briefcase"></i> <span>Posting Sebuah Lowongan</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=perusahaan&act=tampil_lowongan');?>">
                    <i class="fa fa-eye"></i> <span>Lihat Posting Lowongan</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=pengaturan&act=ubah_password_mhs');?>">
                    <i class="fa fa-cogs"></i> <span>Ubah Password</span> 
                </a>
            </li>
            <?php } ?>
            
           <?php if($this->session->userdata('level') == 3) {?>
            <li>
                <a href="<?php echo site_url('page=perusahaan');?>">
                    <i class="fa fa-briefcase"></i> <span>Posting Lowongan</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=perusahaan&act=tampil_lowongan');?>">
                    <i class="fa fa-exchange"></i> <span>Tampil Lowongan</span> 
                </a>
            </li>
          <?php } ?>
          <?php if($this->session->userdata('level') == 'root') {?>
           <li>
                <a href="<?php echo site_url('page=profileadm');?>">
                    <i class="fa fa-group"></i> <span>Profile Administrator</span> 
                </a>
            </li>
           <li>
                <a href="<?php echo site_url('page=kuesioner&act=kuesioner_field');?>">
                    <i class="fa fa-envelope"></i> <span>Isi Kuesioner</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=pengaturan&act=evaluator_lowongan');?>">
                    <i class="fa fa-inbox"></i> <span>Evaluator Lowongan</span> 
                </a>
            </li>
             <li>
                <a href="<?php echo site_url('page=pengaturan&act=ganti_poster');?>">
                    <i class="fa fa-camera"></i> <span>Ganti Poster Halaman Depan</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=pengaturan&act=user_set_login');?>">
                    <i class="fa fa-cogs"></i> <span>Lihat Password User</span> 
                </a>
            </li>
             <li>
                <a href="<?php echo site_url('page=uploadcsv');?>">
                    <i class="fa fa-exchange"></i> <span>Import Data Kuesioner</span> 
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('page=pengaturan&act=misc_setting');?>">
                    <i class="fa fa-cog"></i> <span>Pengaturan</span> 
                </a>
            </li>



            <?php }?>
            
            <!-- 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
                </a>
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li class="active"><a href="<?php echo site_url('blank') ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
            -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">