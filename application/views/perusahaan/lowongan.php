<link rel="stylesheet" href="<?php echo base_url();?>assets/datepicker/jquery-ui.css">
<script src="<?php echo base_url();?>assets/datepicker/jquery-1.10.2.js"></script>
  <script src="<?php echo base_url();?>assets/datepicker/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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
          Edit Data
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Menu</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=perusahaan&act=simpan_lowongan');?>
                    <table class="table table-responsive">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>
                               <select name="kategori" class="form-control">
                                    <option value="web design">WEB DESIGN (HTML 5 , CSS3)</option>
                                    <option value="web programer">WEB PROGRAMING (PHP ,MySQL)</option>
                                    <option value="senior web developer ">SENIOR WEB DEVELOPER(PHP , MySQL ,CSS3 , HTML ,ASP.NET)</option>
                                     <option value="android developer">ANDROID DEVELOPER(Android Studio , Eclipse)</option>
                                    <option value="network">NETWORKING(LAN , WAN , MIKROTIK)</option>
                                    <option value="graphic designer">GRAPHIC DESIGNER(Corel Draw X4 ,Photoshop, Ilustrator)</option>
                                    <option value="video editor">VIDEO EDITOR(Adobe Premiere Pro ,Sony Vegas)</option>
                                    <option value="kecerdasan buatan">KECERDASAN BUATAN(Matlab)</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'judul','class'=>'form-control','value'=>'')) ?></td>
                        </tr>
                        <tr>
                            <td>Header</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'header','class'=>'form-control','value'=>'')) ?></td>
                        </tr>
                        <tr>
                            <td>Isi</td>
                            <td>:</td>
                            <td><textarea name="isi" class="form-control"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Expired Date</td>
                            <td>:</td>
                            <td><?php echo form_input(array('id'=>'datepicker','name'=>'outdate','class'=>'form-control','value'=>'')) ?></td>
                        </tr>
                       
                        <tr>
                            <td>File Gambar</td>
                            <td>:</td>
                            <td><input type="file" name="userfile" class="form-control"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align: left;">
                                <?php echo form_submit(array('value'=>'Submit','class'=>'btn btn-primary')) ?>
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