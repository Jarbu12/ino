<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
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
                <a href="#"><b>Sign in to UCAC </b>USM</a> 
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <p>WARNING , Simpan Username dan Password Anda karena 2 ID tersebut yang nantinya akan dipergunakan untuk login ke UCAC USM</p>
                <?php echo form_open_multipart('page=register&act=simpan_member_perusahaan');?>
                    <div class="form-group has-feedback">
                    <label>Username Perusahaan (Untuk Login)</label>
                        <input type="text" name="username" class="form-control" placeholder="Username Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Password (Untuk Login)</label>
                        <input type="password" name="password" class="form-control" placeholder="Password anda"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <hr/>
                    Identitas Spesifik Perusahaan
                    <hr/>
                    <div class="form-group has-feedback">
                    <label>Nama Perusahaan <small>(Nama Lengkap)</small></label>
                        <input type="text" name="nama" class="form-control" placeholder="Username Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Tipe Perusahaan</label>
                       <select name="jenis" class="form-control">
                       <option value="pt">PT</option>
                       <option value="cv">CV</option>
                       </select>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>E-Mail</label>
                        <input type="text" name="email" class="form-control" placeholder="E-Mail Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>Kontak Person</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Kontak Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                    <label>NPWP<small>(Opsional Cek Keaslian Perusahaan)</small></label>
                        <input type="text" name="npwp" class="form-control" placeholder="NPWP Perusahaan Perusahaan "/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <label>Footnote</label>
                        <textarea class="form-control" name="footnote" placeholder="Catatan Kaki "/></textarea>
                        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                    </div>
                    <hr/>
                   
                    <div class="form-group has-feedback">
                    <label>Avatar</label>
                        <input type="file" class="form-control" name="userfile" placeholder="Avatar"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <hr/>
                   
                    <div class="row">
                        
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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
    </body>
</html>