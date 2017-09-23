<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alumni Trace Regsiter</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b><h2>Alumni Trace</h2></b><h4>Universitas Semarang</h4></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan Mendaftar Untuk Membuka Website</p>
                <p><b>WARNING , Simpan Username dan password Anda karena 2 ID tersebut yang nantinya akan dipergunakan untuk login ke UCAC USM</b></p>
                <div>
                    <?php echo $this->session->flashdata('gagal');?>
                    </div>
                <?php $this->load->helper('form');
   echo form_open_multipart('page=register&act=memberbaru'); ?> 
                    <div class="form-group has-feedback">
                    <label>NIM Anda <small>sebagai username login</small></label>
                        <input type="text" class="form-control" name="nim" placeholder="Ex. G211130101(Tanpa Titik)"/>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                     <label>Password Anda <small>sebagai password login</small></label>
                        <input type="password" class="form-control" name="password" placeholder="Password Akun"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <hr/>
                    <b>Identitas Anda</b>
                    <hr/>
                    <div class="form-group has-feedback">
                    <label>Nama Lengkap Anda</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Anda"/>
                        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Fakultas Anda</label>
                      <select name="fakultas" class="form-control" id="fakultas">
                                <option value="" required="">--Pilih Fakultas Anda--</option>
                                <option value="FTIK">F.TIK</option>
                                <option value="FH">F.HUKUM</option>
                                <option value="FE">F.EKONOMI</option>
                                <option value="FT">F.TEKNIK</option>
                                <option value="FP">F.PERTANIAN</option>
                                <option value="FPS">F.PSIKOLOGI</option>

                                </select>
                    </div>
                   <div class="form-group has-feedback">
                    <label>Program Studi Anda</label>
                        <select name="jurusan" class="form-control" id="progdi">
                                <option value="" required="">--Pilih Program Studi Anda--</option>
                               
                                </select>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Pekerjaan Anda</label>
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan Anda"/>
                        <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>Jabatan Anda</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Kedudukan Anda"/>
                        <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>Status Anda</label>
                        <input type="text" class="form-control" name="status" placeholder="Menikah/Belum"/>
                        <span class="glyphicon glyphicon-heart form-control-feedback"></span>
                    </div>
                    <hr/>
                     <div class="form-group has-feedback">
                    <label>Jenis Kelamin</label>
                        <input type="radio" name="jeniskelamin" value="pria">Pria
                        <input type="radio" name="jeniskelamin" value="wanita">Wanita
                       
                    </div>
                    <hr/>
                     <div class="form-group has-feedback">
                    <label>Wisudawan</label>
                        <input type="text" class="form-control" name="wisudawan" placeholder="Periode Wisudawan Ex.ke 60"/>
                        <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Domisili Sekarang</label>
                        <input type="text" class="form-control" name="domisili" placeholder="Domisili Anda Sekarang"/>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Nomor Handphone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone Anda"/>
                        <span class="glyphicon glyphicon-comments-alt form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>BBM Pin</label>
                        <input type="text" class="form-control" name="bbm" placeholder="PIN BBM Anda"/>
                        <span class="glyphicon glyphicon-comments form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>Footnote</label>
                        <textarea class="form-control" name="footnote" placeholder="Catatan Kaki "/></textarea>
                        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                    </div>
                    <hr/>
                   
                    <div class="form-group has-feedback">
                    <label>Avatar</label> <b>Only Support JPG Format</b>
                        <input type="file" class="form-control" name="userfile" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <hr/>
                    <div>
                    <?php echo $this->session->flashdata('gagal');?>
                    </div>

                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="agreement" value="1">Saya Setuju dengan aturan yang berlaku
                                </label>
                            </div>  
                                                  
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>

              

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
         <script>
        $(document).ready(function(){
            $("#fakultas").change(function(){
                var fakultas=$("#fakultas").val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('page=register&act=get_progdi');?>",
                    data : "fakultas="+fakultas,
                    success: function (data){
                        $("#progdi").html(data);
                    }
                });
            });
        });
        </script>
    </body>
</html>