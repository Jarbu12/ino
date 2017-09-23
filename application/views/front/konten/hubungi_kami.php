
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                                <div class="col-md-9">
                                    <!-- Main Content -->
                                    <div class="headline">
                                        <h2>Hubungi Kami</h2>
                                    </div>
                                    <p>Silakan mengisi formulir di bawah ini untuk menghubungi kami.</p>
                                    <br>
									
                                    <!-- Contact Form -->
                                    <?php echo form_open_multipart('page=hubungi_kami&act=send');?>
                                        <label>Nama</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="text" name="nama">
                                            </div>
                                        </div>
                                        <label>Email
                                            
                                        </label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="text" name="email">
                                            </div>
                                        </div>
                                        <label>Pesan</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-8 col-md-offset-0">
                                                <textarea rows="8" class="form-control" name="pesan"></textarea>
                                            </div>
                                        </div>
                                        <p>
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </p>
                                    </form>
                                    <!-- End Contact Form -->
                                    <!-- End Main Content -->
                                </div>
                                <!-- End Main Column -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->