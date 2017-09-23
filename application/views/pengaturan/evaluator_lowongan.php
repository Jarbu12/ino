<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Evaluator Lowongan</small>
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
         
        
        <!--Konten SPASI
        <div class="container col-sm-12 ">
        <br><br>
        </div>
        <!--END Konten SPASI-->
        <div class="container col-sm-12 ">
          <div class="page-header">
        <h4>Evaluator Lowongan</h4>
        </div>
        <!--
       <p>
       <a href="<?php echo base_url('datasiswa/tambah'); ?>" class="btn btn-primary"> Tambah data</a>
       </p> -->
        <!----INI ADALAH KONTEN Data Siswa-------->
            <table id="sample-table-2" class="table table-striped ">
              <thead>
              <tr>
                <th>No</th>
                <th>Dari</th>
                <th>Judul</th>
                
                 <th>Kadaluarsa</th>
                 <th>Status</th>
                <th>Action&nbsp;&nbsp;&nbsp;</th>
              </tr>
              </thead>
              
              <tbody>
              <?php 
              $i=1;
              foreach($loker as $h){ ?>
              <tr>
                <td></td>
                <td><?php echo ucwords($h['id_perusahaan']); ?></td>
                <td><?php echo ucwords($h['judul']); ?></td>
                
                <td><?php echo $h['outdate'];?></td>
                <td><?php echo ucwords(general::status($h['status']));?></td>
                <td> 
                  <a href="<?php echo base_url('lowongan/activate.php?id='.$this->encrypt->encode_url($h['id']));?>" class="btn btn-primary tooltip-error"  title="Edit">
                                Aktifkan</a> | 
                  <a href="<?php echo base_url('lowongan/delete.php?id='.$this->encrypt->encode_url($h['id']));?>" class="btn btn-danger tooltip-error" title="Delete">
                                 Hapus
                                </a> | 
                  <a href="<?php echo base_url('lowongan/view.php?id='.$this->encrypt->encode_url($h['id']));?>" class="btn btn-primary tooltip-error" title="Lihat Biodata Siswa">
                                  Lihat
                                </a>
                </td> 
              </tr>
              <?php }?>
              </tbody>
              </table>
        
        </div>

        
        </div>
        </div>
        </div>
        </section>
        
