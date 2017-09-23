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
        <h4>Posting Lowongan Anda </h4>
        </div>
        <?php $no=1;
        foreach ($poster as $poster) { ?>
              <div class="col-lg-4 col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">                                
                                <div class="col-xs-9">
                                    <h2 class="panel-title"><?php echo $no++ . '. ' . ucwords($poster['judul']).'Status :'.general::status($poster['status']) ?></h2>
                                </div>
                                <div class="col-xs-3 text-right">
                                  <!--  <a href="<?php echo site_url('') ?>" style="color: #fff"><i class="fa fa-edit fa-1x"></i></a> -->
                                    &nbsp;
                                    <a href="<?php echo site_url('page=perusahaan&act=hapus_lowongan&id='.$poster['id'])?>" onclick="return confirm('Hapus [<?php echo ucwords($poster['judul']) ?>]')" style="color: #fff"><i class="fa fa-remove fa-1x"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-3">
                                <?php if (!empty($poster['foto_lowongan'])) { ?>
                                 <img src="<?php echo base_url('')?>assets/lowongan/<?php echo $poster['foto_lowongan'];?>" class="img-circle" style="width: 100px; height: 100px;">

                                      
                                      <?php } else { ?>
                                    <i class="fa fa-camera fa-5x"></i>
                                <?php } ?>
                            </div>
                            <div class="col-xs-9 text-right">
                                <strong><?php echo ucwords($poster['kategori']) ?></strong>
                             <p class="text-muted"><?php echo $poster['header'] ?></p> <br><br>
                             <p class="text-muted">Posted <?php echo $poster['tanggal'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

        </div>
        </div>
        </div>
        </div>
        </div>
        </section>