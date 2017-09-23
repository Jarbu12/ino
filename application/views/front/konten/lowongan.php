  <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">
                                    <h2 class="margin-vert-20">Daftar Lowongan Kerja</h2>
                                    <div class="row margin-bottom-30">
                                        <div class="col-md-12 animate fadeInLeft">
                                            <?php if(!empty($lowongan)){?>
                                            <?php foreach ($lowongan as $row) {?>
											<!-- Blog Post -->
											<div class="blog-post padding-bottom-20">
												<!-- Blog Item Header -->
												<div class="blog-item-header">
													<!-- Title -->
													<h3>
														<a href="<?php echo base_url()?>lowongan_kerja/detail/<?php echo $row->id?>"><?php echo $row->judul?></a>
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
															<a href="<?php echo base_url()?>lowongan_kerja/detail/<?php echo $row->id?>" class="btn btn-primary">
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
											<div class="center">
											<?php echo $this->pagination->create_links();?>
                                            </div>
                                            <?php } else{?>
                                            <div class="item">
                                            <h3><i>Tidak ada data yang ditampilkan</i></h3>
                                            </div>
                                            <?php }?>
                                        </div>
                                        
                                    </div>
                                    
                                    <hr class="margin-vert-40">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
			