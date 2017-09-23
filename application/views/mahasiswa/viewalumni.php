<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Data Alumni</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Alumni</li>
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
          <h3 align="center">Biodata Alumni</h3>
          </div>
            <div class="container col-sm-4" align="center">
              <img src="<?php echo base_url();?>assets/alumni/<?php echo $hasil['foto'];?>" height="200" width="150" >
            </div>
                <div class="container col-sm-8 ">
                <h4> <i class="icon-double-angle-right"><b><?php echo $hasil['nama'];?></b></i><small>(<?php echo $hasil['jeniskelamin'];?>)</small></h4> <a href="#log" data-toggle="modal" class="btn btn-danger"> Send A private Message</a> <hr/>
                  <div class="container col-sm-4 ">
                  <span class="icon-info-sign"></span>&nbsp;<?php echo $hasil['fakultas'];?> <br><br>
                  <span class="icon-barcode"></span>&nbsp;<?php echo $hasil['nim'];?><br><br>
                  <span class="icon-bookmark"></span>&nbsp;<?php echo $hasil['jurusan'];?><br><br>
                  <span class="icon-briefcase"></span>&nbsp;<?php echo $hasil['pekerjaan'];?><br><br>
                  </div>
                  <div class="container col-sm-4 ">
                  <span class="icon-bar-chart"></span>&nbsp;<?php echo $hasil['jabatan'];?><br><br>
                  <span class="icon-heart"></span>&nbsp;<?php echo $hasil['status'];?><br><br>
                  <span class="icon-home"></span>&nbsp;<?php echo $hasil['domisili'];?><br><br>
                  <span class="icon-laptop"></span>&nbsp;<?php echo $hasil['no_hp'];?><br><br>
                  </div>
                </div>
          </div>
          <!-- MODAL -->
    <div class="modal fade" id="log" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Private Message to <?php echo $hasil['nama'];?></h4>
            </div>
            
            <div class="modal-body">
                <form action="<?php echo site_url('page=mahasiswa&act=submitprivatemessage');?>" method="post" id="login" novalidate="novalidate" class="bv-form">
                    
                    <div class="form-group has-feedback">
                        <label for="username" class="sr-only">NIM :</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="username" required="" autofocus="" value="<?php echo $hasil['nim'];?>"/>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password" class="sr-only">Konten :</label>
                        <input type="textarea" id="konten" name="konten" class="form-control" placeholder="Konten Chat" required=""/>
                    </div>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim Private Message</button>
                <input type="hidden" value="">
                </form>
           
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

        </div>
        </div>
        </div>
        </div>
        </section>
