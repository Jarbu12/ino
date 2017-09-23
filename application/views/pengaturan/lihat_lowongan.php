<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>DecoReco - First Page </small>
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
          Lihat Spesifikasi Lowongan 
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Lowongan Kerja</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=master&act=simpan');?>
                    <table class="table table-responsive">
                        
                        <tr>
                            <td>Penerbit</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'kode','class'=>'form-control','value'=>ucwords($lowongan['id_perusahaan']))) ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'menu','class'=>'form-control','value'=>ucwords($lowongan['kategori']))) ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'harga','class'=>'form-control','value'=>ucwords($lowongan['tanggal']))) ?></td>
                        </tr>
                        <tr>
                            <td>Isi</td>
                            <td>:</td>
                            <td><?php echo ucwords($lowongan['isi']);?></td>
                        </tr>
                        <tr>
                            <td>Industri Penerbit</td>
                            <td>:</td>
                            <td><img src="<?php echo base_url();?>assets/alumni/<?php echo $lowongan['foto_industri'];?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <img src="<?php echo base_url('') ?>/assets/lowongan/<?php echo $lowongan['foto_lowongan'];?>" style="width: 160px; height: 160px;" class="img-rounded">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">
                               <a href="<?php echo base_url('pengaturan/evaluator_lowongan');?>" class="btn btn-primary" >Kembali</a>
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