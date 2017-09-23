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
          <?php echo $this->session->flashdata('sukses');?>
          <?php echo $this->session->flashdata('gagal');?>
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-4">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Username & Password</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=pengaturan&act=simpan_password_mhs');?>
                    <table class="table table-responsive">
                        
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><?php echo form_input(array('readonly'=>'','name'=>'username','class'=>'form-control','value'=>$username['username'])) ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><?php echo form_input(array('name'=>'password','class'=>'form-control','value'=>$this->encrypt->decode_url($username['password']))) ?></td>
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