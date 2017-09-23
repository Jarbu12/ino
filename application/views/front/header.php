<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <?php $aktif=1; $set=$this->db->where('id',$aktif)->get('pengaturan')->row();?>
        <!-- Title -->
        <?php $depan=substr($set->nama_apps,0,3); $belakang=substr($set->nama_apps,4,27); ?>
        <title><?php echo strtoupper($depan)." ".ucwords($belakang) ;?></title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="<?php echo base_url('assets/home/assets/img/favicon.ico') ?>" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/bootstrap.css') ?>" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/animate.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/font-awesome.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/nexus.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/responsive.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/home/assets/css/custom.css') ?>" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body_bg">
            <div id="pre_header" class="container">
                <div class="row margin-top-10 visible-lg">
                    <div class="col-md-6">
                        <!-- -->
                    </div>
                    <div class="col-md-12 text-center">
					 
					
						<?php
						if (!empty($gagal))
						{
						?>
                            <p><strong><span type="span" class="label label-danger"><?php echo $gagal?></span></strong></p>
						<?php
						}
						?>
					 
                    </div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?php echo base_url('/') ?>" title="">
                                <img src="<?php echo base_url('assets/home/assets/img/logo.png') ?>" title="USM Career and Alumni Center">
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
                                
                                <li class="social-twitter">
                                    <a href="https://twitter.com/ftikusm" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="https://www.facebook.com/groups/tikUSM/" target="_blank" title="Facebook"></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="<?php echo site_url('page=home') ?>" class="fa-home">Home</a>
                                        </li>
                                        <!--
                                        <li>
                                            <a href="<?php echo base_url('profil.php');?>" class="fa-bullhorn">Profil</a>
                                            
                                        </li>
                                        -->
                                        <li>
                                            <span class="fa-copy"><?php echo strtoupper($depan)." ".ucwords($belakang) ;?></span>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('page=home&act=usm_karir');?>">Tujuan, Visi dan Misi</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('page=home&act=program_kerja')?>">Program Kerja</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('page=home&act=lowongan_kerja');?>">Lowongan Kerja</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
										<li>
											<span class="fa-th">Alumni</span>
											<ul>
												
                                                <li>
                                                    <a href="<?php echo site_url('page=home&act=alumni_single_search')?>">Cari Alumni</a>
                                                </li>
												
											</ul>
										</li>
										<li>
											<span class="fa-gears">Tracer Study</span>
											<ul>
												<li>
													<a href="<?php echo site_url('page=home&act=tentang_tracer');?>">Tentang Tracer Study</a>
												</li>
												<li>
													<a href="#">Statistik</a>
												</li>
                                                <li>
                                                    <a href="<?php echo site_url('page=auth');?>">Web Tracer</a>
                                                </li>
											</ul>
										</li>
										
                                        
                                        <li>
                                            <a href="<?php echo site_url('page=home&act=hubungi_kami');?>" class="fa-comment">Hubungi Kami</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Menu -->