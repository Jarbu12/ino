<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Data Alumni</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile Admin</li>
    </ol>
</section>

			<section class="content" >
    <div class="col-lg-12">
      <!-- general form elements -->     
      <div class="box box-primary">
        <div class="box-header">       
       
          <div class="box-body"> 
          <div class="container col-sm-12 ">
          <div class="page-header">
          <h3 align="center">Edit Data</h3>
          </div>
            <div class="container col-sm-4" align="center">
              <img src="<?php echo base_url();?>assets/alumni/<?php echo $hasil['foto'];?>" height="200" width="150" >
            </div>
                <div class="container col-sm-8 ">
                  <h4><b><i><i class="icon-double-angle-right"></i>&nbsp;<?php echo $hasil['nama'];?></i></b> <small>(<?php echo $hasil['jeniskelamin'];?>)</small></h4><hr/><br>
                  <div class="container col-sm-4 ">
                  <span class="icon-briefcase"></span>&nbsp;<?php echo $hasil['pekerjaan'];?><br><br>
                   <span class="icon-bar-chart"></span>&nbsp;<?php echo $hasil['jabatan'];?><br><br>
                  <span class="icon-heart"></span>&nbsp;<?php echo $hasil['status'];?><br><br>
                  </div>
                  <div class="container col-sm-4 ">
                  <span class="icon-home"></span>&nbsp;<?php echo $hasil['domisili'];?><br><br>
                  <span class="icon-laptop"></span>&nbsp;<?php echo $hasil['no_hp'];?><br><br>
                  <span class="icon-laptop"></span>&nbsp;BBM :<?php echo $hasil['bbm'];?><br><br>
                  </div>
                </div>
          </div>
          <div class="container col-sm-3" >

          </div>
          <div class="container col-sm-6" >
         <?php $this->load->helper('form');
   echo form_open_multipart('page=profileadm&act=simpandata'); ?> 
                    <div class="form-group has-feedback">
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan Anda Sekarang" value="<?php echo $hasil['pekerjaan'];?>" />
                        <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan Anda Sekarang" value="<?php echo $hasil['jabatan'];?>"/>
                        <span class="glyphicon glyphicon-exclamation-sign form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="status" class="form-control" placeholder="Status Pernikahan Anda" value="<?php echo $hasil['status'];?>"/>
                        <span class="glyphicon glyphicon-heart form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="domisili" class="form-control" placeholder="Domisili Anda Sekarang" value="<?php echo $hasil['domisili'];?>"/>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" name="bbm" class="form-control" placeholder="BBM/PIN Anda" value="<?php echo $hasil['bbm'];?>"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                     <div class="form-group has-feedback">
                        <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone  Anda" value="<?php echo $hasil['no_hp'];?>"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <hr/>
                    <b><i>Avatar Kamu</i></b>
                    <input type="hidden" name="foto" value="<?php echo $hasil['foto'];?>">
                      <div class="form-group has-feedback">
                        <input type="file" name="userfile" class="form-control" />
                        <span class="glyphicon glyphicon-photo form-control-feedback"></span>
                    </div>
                    
                   
                    <div class="row">
                        <div class="col-xs-8">    
                                                 
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan Perubahan Data</button>
                        </div><!-- /.col -->
                    </div>
                </form>
          </div>
        </div>
        </div>
        </div>
        </div>
        </section>
