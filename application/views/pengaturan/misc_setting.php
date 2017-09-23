<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Profile USM
        <small>Edit Informasi - First Page </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pilih Kategori</li>
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
          Edit Data
          <div >
              <?php echo $this->session->flashdata('sukses');?>
          </div>
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Menu</h2>
                    <p>
                    Panel Ini berhubungan langsung dengan halaman luar/tampilan depan.
                    </p>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=pengaturan&act=misc_simpan');?>
                    <table class="table table-responsive">
                        <input type="hidden" name="id" value="<?php echo $hasil['id'];?>">
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'telepon','class'=>'form-control','value'=>$hasil['telepon'])) ?></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'email','class'=>'form-control','value'=>$hasil['email'])) ?></td>
                        </tr>
                        <tr>
                            <td>Facebook Address <small>(http://)</small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'fb','class'=>'form-control','value'=>$hasil['fb'])) ?></td>
                        </tr>
                        <tr>
                            <td>Twitter Address<small>(http://)</small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'twitter','class'=>'form-control','value'=>$hasil['twitter'])) ?></td>
                        </tr>
                        <tr>
                            <td>Alamat<small></small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'alamat','class'=>'form-control','value'=>$hasil['alamat'])) ?></td>
                        </tr>
                        <tr>
                            <td>No HP<small></small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'no_hp','class'=>'form-control','value'=>$hasil['no_hp'])) ?></td>
                        </tr>
                         <tr>
                            <td>Keterangan<small></small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'ket','class'=>'form-control','value'=>$hasil['ket'])) ?></td>
                        </tr>
                         <tr>
                            <td>Developer<small></small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'dev','class'=>'form-control','value'=>$hasil['dev'])) ?></td>
                        </tr>
                         <tr>
                            <td>Tahun<small></small></td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'tahun','class'=>'form-control','value'=>$hasil['tahun'])) ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">
                                <?php echo form_submit(array('value'=>'Update','class'=>'btn btn-primary')) ?>
                                &nbsp;
                                <?php echo form_reset(array('value'=>'Batal','class'=>'btn btn-primary')) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>           
            <?php echo form_close();  ?>
            
        </div>
    </div>
    <!--</div>-->
    <!-- /.row -->
</div>
</div>
</div>
</div>
</section>