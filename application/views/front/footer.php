			<div id="base">
             <?php $aktif=1; $set=$this->db->where('id',$aktif)->get('pengaturan')->row();?>
             <?php $depan=substr($set->nama_apps,0,3); $belakang=substr($set->nama_apps,4,27); ?>
                <div class="container padding-vert-30 margin-top-40">
                    <div class="row">
                        
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Kontak</h3>
                            <p>
                                <span class="fa-phone">Telepon:</span> <?php echo $set->telepon;?>
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:ujc@usm.ac.id"><?php echo $set->email;?></a>
                                
                            </p>
                            <p><?php echo strtoupper($set->inst);?>,
                                <br><?php echo ucwords($set->alamat);?>,
								<br>Semarang 50196
                                </p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Thumbs Gallery -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Galeri Foto</h3>
                            <div class="thumbs-gallery">
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image01.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image01.jpg') ?>" alt="image1.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image02.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image02.jpg') ?>" alt="image2.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image03.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image03.jpg') ?>" alt="image3.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image04.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image04.jpg') ?>" alt="image4.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image04.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image05.jpg') ?>" alt="image5.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image06.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image06.jpg') ?>" alt="image6.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image07.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image07.jpg') ?>" alt="image7.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="assets/img/thumbsgallery/image08.jpg">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image08.jpg') ?>" alt="image8.jpg">
                                    <i></i>
                                </a>
                                <a class="thumbBox" rel="lightbox-thumbs" href="<?php echo base_url('assets/home/assets/img/thumbsgallery/image09.jpg') ?>">
                                    <img src="<?php echo base_url('assets/home/assets/img/thumbsgallery/thumbs/image09.jpg') ?>" alt="image9.jpg">
                                    <i></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Thumbs Gallery -->
                        <!-- Disclaimer -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Disclaimer</h3>
                            <?php $info=$this->db->query("SELECT disclaimer FROM text_info WHERE id=1")->row();?>
                           <?php echo $info->disclaimer;?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="copyright" class="col-md-4">
                            <p><i><?php echo strtoupper($set->dev);?></i> <br>(c) <?php echo $set->tahun;?> <?php echo strtoupper($depan)." ".ucwords($belakang) ;?></p>
                        </div>
                        <div id="footermenu" class="col-md-8">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
			
            <!-- JS -->
            <script src="<?php echo base_url() ?>assets/ui/jquery-2.1.4.min.js"></script> 
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/scripts.js') ?>"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/jquery.isotope.js') ?>" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/jquery.slicknav.js') ?>" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/jquery.visible.js') ?>" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/jquery.sticky.js') ?>" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="<?php echo base_url('assets/home/assets/js/slimbox2.js') ?>" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="<?php echo base_url('assets/home/assets/js/modernizr.custom.js') ?>" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>