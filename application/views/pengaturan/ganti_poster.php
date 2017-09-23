<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Ganti Poster Depan</small>
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
        <h4>Poster </h4>
        <div>
        <?php echo $this->session->flashdata('upload');?>
        </div>
        </div>
        <?php $no=1;
        foreach ($poster as $poster) { ?>
              <div class="col-lg-4 col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">                                
                                <div class="col-xs-9">
                                    <h2 class="panel-title"><?php echo $no++ . '. ' . ucwords($poster['judul']) ?></h2>
                                </div>
                               <!-- <div class="col-xs-3 text-right">
                                    <a href="<?php echo site_url('master/edit_barang.php?id='.$poster['id']) ?>" style="color: #fff"><i class="fa fa-edit fa-1x"></i></a>
                                    &nbsp;
                                    <a href="<?php echo site_url(''.$poster['id']) ?>" onclick="return confirm('Hapus [<?php echo ucwords($poster['judul']) ?>]')" style="color: #fff"><i class="fa fa-remove fa-1x"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-3">
                                <?php if (!empty($poster->foto)) { ?>
                                       <i class="fa fa-camera fa-5x"></i>
                                      <?php } else { ?>
                                    <img src="<?php echo base_url('')?>assets/home/assets/img/slideshow/<?php echo $poster['foto'];?>" class="img-circle" style="width: 100px; height: 100px;">

                                <?php } ?>
                            </div>
                            <div class="col-xs-9 text-right">
                                <strong>ID Poster : SKU<?php echo $poster['id'] ?></strong>
                           <!---     <p class="text-muted"><?php echo $poster['deskripsi'] ?></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Gunakan form ini untuk mengganti tampilan poster</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=pengaturan$act=simpan_poster');?>
                    <table class="table table-responsive">
                        <tr>
                            <td>Kode SKU</td>
                            <td>:</td>
                            <td>
                               <select name="id" class="form-control">
                                    <option value="1">SKU1</option>
                                    <option value="2">SKU2</option>
                                    <option value="3">SKU3</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Judul Gambar</td>
                            <td>:</td>
                            <td><?php echo form_input(array('required'=>'','name'=>'judul','class'=>'form-control','value'=>'')) ?></td>
                        </tr>
                        
                        <tr>
                            <td>File Gambar</td>
                            <td>:</td>
                            <td><input type="file" class="form-control" name="userfile"></td>
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
        </div>
        </div>
        </div>
        </div>
        </section>