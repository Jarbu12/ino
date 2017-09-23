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
          Edit Data <br>

          <div >

              <?php echo $this->session->flashdata('sukses');?>
          </div>
          </div>
          <small>
          Tata Cara penggunaan notasi PARAGFRAF    <br> <br>
          Gunakan ikon '< p >' tanpa spasi Sebagai Pembatas Paragraf Contoh : <br>< p >Paragraf-1< /p > <br> < p >Paragraf-2< /p >   <br><br><br><br>
          
          Tata Cara penggunaan notasi PENOMORAN   <br> <br>
          Gunakan ikon '< li >' Sebagai Penomoran Kalimat Contoh : <br>< li >Kalimat 1< /li > <br> < li >kalimat-2< /li >   <br><br><br><br>
          
          </small>

        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Tulisan</h2>
                    <p>
                    Panel Ini berhubungan langsung dengan halaman luar/tampilan depan.
                    </p>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=pengaturan&act=simpan_modif_tulisan');?>
                    <table class="table table-responsive">
                        <input type="hidden" name="id" value="<?php echo $hasil->id;?>">
                        <tr>
                            <td>Tentang USM Career</td>
                            <td>:</td>
                            <td rows="4" cols="50"><input  type="text" name="tentang_usm_career" value="<?php echo $hasil->tentang_usm_career;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Visi</td>
                            <td>:</td>
                            <td><input type="text" name="visi" value="<?php echo $hasil->visi;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Misi</td>
                            <td>:</td>
                            <td><input type="text" name="misi" value="<?php echo $hasil->misi;?>" class="form-control"></td>
                        </tr>
                       <tr>
                            <td>Tujuan & Manfaat</td>
                            <td>:</td>
                            <td><input type="text" name="tujuan_manfaat" value="<?php echo $hasil->tujuan_manfaat;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Tentang Tracer</td>
                            <td>:</td>
                            <td><input type="text" name="tentang_tracer" value="<?php echo $hasil->tentang_tracer;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Disclaimer</td>
                            <td>:</td>
                            <td><input type="text" name="disclaimer" value="<?php echo  $hasil->disclaimer;?>" class="form-control"></td>
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