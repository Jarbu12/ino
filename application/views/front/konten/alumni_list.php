<!-- === END HEADER === -->
					
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">
                                    <h2 class="margin-vert-20">Cari Alumni</h2>
                                    <div class="row margin-bottom-30">
                                        <div class="col-md-5 animate fadeInLeft">
                                           <?php echo form_open_multipart('page=home&act=alumni_list_view');?>
                                            <div class="form-group has-feedback">
                                            <label>Fakultas</label>
                                            <select name="fakultas" class="form-control">
                                            <option value="" required="">--Pilih Fakultas --</option>
                                            <option value="FTIK">F.TIK</option>
                                            <option value="FH">F.HUKUM</option>
                                            <option value="FPSIKOLOG">F.PSIKOLOGI</option>
                                            <option value="FE">F.EKONOMI</option>
                                            </select>
                                            </div>
                                            <div class="form-group has-feedback">
                                            <label>Program Studi</label>
                                            <select name="progdi" class="form-control">
                                            <option value="" required="">--Pilih Program Studi--</option>
                                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                            <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
                                            </select>
                                            </div>
                                            <div class="form-group has-feedback">
                                            <label>Wisudawan Ke-</label>
                                            <input type="text" class="form-control" name="wisudawan" placeholder="Nama Anda"/>
                                            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                                            </div>



                                           </form>    
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