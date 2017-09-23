				
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container no-padding">
                            <div class="row">
                                <!-- Carousel Slideshow -->
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example" data-slide-to="1"></li>
                                        <li data-target="#carousel-example" data-slide-to="2"></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                    <!-- End Carousel Indicators -->
                                    <!-- Carousel Images -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="<?php echo base_url('assets/home/assets/img/slideshow/slide1.jpg') ?>">
                                        </div>
                                        <?php if(!empty($poster)){?>
                                        <?php foreach ($poster as $post) {?>
                                        
                                        <div class="item">
                                            <img src="<?php echo base_url('assets/home/assets/img/slideshow/'.$post->foto) ?>">
                                        </div>
                                        <?php }?>
                                        <?php }else{?>
                                        <div class="item">
                                        <h5><i>Tidak ada data yang ditampilkan</i></h5>
                                        </div>
                                        <?php }?>


                                       
                                    </div>
                                    <!-- End Carousel Images -->
                                    <!-- Carousel Controls -->
                                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                    <!-- End Carousel Controls -->
                                </div>
                                <!-- End Carousel Slideshow -->
                            </div>
                        </div>
                        <div class="container background-gray-lighter">
                            <div class="row">
                                <h2 class="animate fadeIn text-center margin-top-50">Selamat datang di USM Career and Alumni Center</h2>
                                <hr class="margin-top-15">
                                <p class="animate fadeIn text-center">
Program Tracer Study (TS) dilaksanakan oleh bagian Tracer Study pada Pusat Karir dan Alumni USM (UJCA). Tracer Study menurut Buku Panduan Sistem Pusat Karir Dikti 2012 merupakan studi penelusuran alumni untuk mengetahui kegiatan alumni setelah lulus dari PT, transisi dari dunia pendidikan tinggi ke dunia kerja, situasi kerja, pemerolehan kompetensi, dan penggunaan kompetensi dalam pekerjaan dan perjalanan karir.
</p>
                                <p class="text-center animate fadeInUp margin-bottom-50">
                                    <a href="<?php echo base_url('page=home&act=usm_karir');?>"><button type="button" class="btn btn-lg btn-primary">View Details</button></a>
                                </p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Text -->
                                <div class="col-md-9">
                                    <h2>Info Lowongan Kerja</h2>
									<?php if(!empty($lowongan)){?>
									<?php foreach ($lowongan as $row){?>
                                    <!-- Blog Post -->
                                    <div class="blog-post padding-bottom-20">
                                        <!-- Blog Item Header -->
                                        <div class="blog-item-header">
                                            <!-- Title -->
                                            <h3>
                                                <a href="lowongan_kerja/detail/<?php echo $row->id?>"><?php echo $row->judul?></a>
                                            </h3>
                                            <div class="clearfix"></div>
                                            <!-- End Title -->
                                        </div>
                                        <!-- End Blog Item Header -->
                                        <!-- Blog Item Details -->
                                        <div class="blog-post-details">
                                            <!-- Author Name -->
                                            <div class="blog-post-details-item blog-post-details-item-left">
                                                <i class="fa fa-user color-gray-light"></i>
                                                <a href="#"><?php echo $row->header?></a>
                                            </div>
                                            <!-- End Author Name -->
                                            <!-- Date -->
                                            <div class="blog-post-details-item blog-post-details-item-left">
                                                <i class="fa fa-calendar color-gray-light"></i>
                                                <a href="#"><?php echo $row->tanggal?></a>
                                            </div>
                                            <!-- End Date -->
                                            
                                            
                                        </div>
                                        <!-- End Blog Item Details -->
                                        <!-- Blog Item Body -->
                                        <div class="blog">
                                            <div class="clearfix"></div>
                                            <div class="blog-post-body row margin-top-15">
                                                <div class="col-md-5">
                                                    <img class="margin-bottom-20" src="<?php echo base_url('assets/lowongan/'.$row->foto_lowongan) ?>" width="150" height="150" alt="thumb1">
                                                </div>
                                                <div class="col-md-7">
                                                    <p><?php echo substr(nl2br($row->isi), 0, 150)?></p>
                                                    <!-- Read More -->
                                                    <a href="lowongan_kerja/detail/<?php echo $row->id?>" class="btn btn-primary">
                                                        Read More
                                                        <i class="icon-chevron-right readmore-icon"></i>
                                                    </a>
                                                    <!-- End Read More -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Blog Item Body -->
                                    </div>
                                    <!-- End Blog Item -->
									<?php } ?>
                                   <?php }else{ ?>
                                   <div class="item">
                                       <h5><i>Tidak Ada data yang ditampilkan</i></h5>
                                   </div>
                                   <?php }?>
									
									<div class="text-right">
									<a href="<?php echo base_url('home/lowongan_kerja');?>" class="btn btn-info">
										Lihat Semua Lowongan Kerja
										<i class="icon-chevron-right readmore-icon"></i>
									</a>

									</div>
                                </div>
                                <!-- End Main Text -->
                                <!-- Side Column -->
								
                                <div class="col-md-3">
                                    <h3 class="title">Login</h3>
									<?php echo form_open('page=auth&act=login_validation');?>
                                    <div class="input-group margin-bottom-20">
										<span class="input-group-addon">
											<i class="fa fa-user"></i>
										</span>
										<input placeholder="Username" class="form-control" type="text" name="username">
									</div>
									<div class="input-group margin-bottom-20">
										<span class="input-group-addon">
											<i class="fa fa-lock"></i>
										</span>
										<input placeholder="Password" class="form-control" type="password" name="password">
									</div>
									<div class="row margin-bottom-20">
										<div class="col-md-2 col-md-offset-7">
											<a class="btn btn-success pull-right"  href="<?php echo site_url('page=home&act=daftar_baru');?>">Daftar</a>
										</div>
										<div class="col-md-2 col-md-offset-1">
											<button class="btn btn-warning pull-right" type="submit">Login</button>
										</div>
									</div>
									<input type="hidden" name="level" value="2">
									</form>
									
									
                                </div>
								
                                <!-- End Side Column -->
                            </div>
                        </div>
                        <div class="container background-gray-lighter">
							
                            <div class="row row-no-margin">
								<h2 class="animate fadeIn text-center margin-top-10">Perusahaan Partner</h2>
                                <!-- Portfolio -->
                                <ul class="portfolio-group">
                                    <!-- Portfolio Item -->
                                    <li class="portfolio-item col-sm-3 col-xs-6 no-padding">
                                        <a href="#">
                                            <figure class="animate fadeInLeft animated">
                                                <img alt="image1" src="<?php echo base_url('assets/home/assets/img/frontpage/image1.jpg') ?>">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <li class="portfolio-item col-sm-3 col-xs-6 no-padding">
                                        <a href="#">
                                            <figure class="animate fadeInLeft animated">
                                                <img alt="image2" src="<?php echo base_url('assets/home/assets/img/frontpage/image2.jpg') ?>">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <li class="portfolio-item col-sm-3 col-xs-6 no-padding">
                                        <a href="#">
                                            <figure class="animate fadeInLeft animated">
                                                <img alt="image3" src="<?php echo base_url('assets/home/assets/img/frontpage/image3.jpg') ?>">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- //Portfolio Item// -->
                                    <!-- Portfolio Item -->
                                    <li class="portfolio-item col-sm-3 col-xs-6 no-padding">
                                        <a href="#">
                                            <figure class="animate fadeInLeft animated">
                                                <img alt="image4" src="<?php echo base_url('assets/home/assets/img/frontpage/image4.jpg') ?>">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- //Portfolio Item// -->
                                </ul>
                                <!-- End Portfolio -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
			
			
      