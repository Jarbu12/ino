<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Data Siswa</small>
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
        <h4>Alumni Tracker</h4>
        </div>
        <?php echo $this->table->generate(); ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
