</head>
<body class="skin-black sidebar-collapse" >
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="#" class="logo"><b>AlumniTrace</b>USM</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle fa fa-home" data-toggle="offcanvas" role="button">
                <i class="">View Menu's</i>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li><a href="#"><span class="fa fa-home"></span><i>My Profile</i></a></li>
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">PM</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Private message</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                     <?php foreach ($pm as $private) {
                                            ?>
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url() ?>assets/alumni/<?php echo $private['foto'];?>" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    <?php echo $private['nama'];?>
                                                    
                                                </h4>
                                                <p><?php echo $private['isi'];?></p>
                                                <small><i class="fa fa-clock-o"></i><?php echo $private['time'];?></small>
                                            </a>
                                        </li><!-- end message -->
                                        <?php }?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                    
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">Notif</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifikasi ini berasal dari dosen</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                       <?php foreach ($notifdosen as $nd) {
                                           ?>
                                        <li><!-- start message -->
                                            
                                                <h5>
                                                    <?php echo $nd['dosen'];?>
                                                    
                                                </h5>
                                                <p><?php echo $nd['isi'];?></p>
                                                <small><i class="fa fa-clock-o"></i><?php echo $nd['time'];?></small>
                                            
                                        </li><!-- end message -->

                                       <?php } ?>
                                       <hr/>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() ?>assets/alumni/<?php echo $foto;?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs"><?php echo $nama;?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() ?>assets/alumni/<?php echo $foto;?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $nama;?>
                                        <small></small>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('page=auth&act=logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->