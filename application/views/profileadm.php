<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />
<?php
$this->load->view('template/topbarprofile');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Profile Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    
    <div class="row">
        <div class="col-lg-3 col-xs-6">
           
        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
    <div class="container col-sm-4" align="center">
    <hr />
              <img src="<?php echo base_url();?>assets/alumni/<?php echo $hasil['foto'];?>" height="200" width="150" class="img-star" >
            </div>
                <div class="container col-sm-8 ">
                  <h4><b><i><i class="icon-double-angle-right"></i>&nbsp;<?php echo $hasil['nama'];?></i></b> <small>(<?php echo $hasil['jeniskelamin'];?>)</small></h4> 
                  <a href="<?php echo base_url('profileadm/editprofile');?>" class="btn btn-primary">Edit Profile</a> &nbsp; &nbsp; 
                  <a href="#log" data-toggle="modal" class="btn btn-primary"> Send A private Message</a>
                  <hr/><br>
                  <div class="container col-sm-4 ">
                  <span class="icon-briefcase"></span>&nbsp;<?php echo $hasil['pekerjaan'];?><br><br>
                   <span class="icon-bar-chart"></span>&nbsp;<?php echo $hasil['jabatan'];?><br><br>
                   <span class="icon-heart"></span>&nbsp;<?php echo $hasil['status'];?><br><br>
                  </div>
                  <div class="container col-sm-4 ">
                  
                  <span class="icon-home"></span>&nbsp;<?php echo $hasil['domisili'];?><br><br>
                  <span class="icon-laptop"></span>&nbsp;<?php echo $hasil['no_hp'];?> <br><br>
                  <span class="icon-laptop"></span>&nbsp;BBM <?php echo $hasil['bbm'];?><br><br>
                  </div>
                </div>
                <div class="container col-sm-12">
                <br><br>
                </div> 
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          

            <!-- Chat box -->
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>
                    <h3 class="box-title">Public Chat <small>Use Only for Important Thing Ex. Info Loker ,Important Notification</small></h3>
                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                        <div class="btn-group" data-toggle="btn-toggle" >
                            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                        </div>
                    </div>
                </div>
                <div class="box-body chat" id="chat-box">
                <?php foreach ($chat as $c) {
                   ?>
                
                    <!-- chat item -->
                    <div class="item">
                        <img src="<?php echo base_url();?>assets/alumni/<?php echo $c['foto'];?>" alt="user image') ?>" class="offline"/>
                        <p class="message">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $c['time'];?></small>
                               <?php echo $c['nama'];?>
                            </a>
                           <?php echo $c['isi'];?>
                        </p>
                    </div><!-- /.item -->
                    <?php } ?>
                </div><!-- /.chat -->
                <div class="box-footer">
                <?php echo form_open('page=profileadm&act=submitchat');?>
                    <div class="input-group">
                        <input type="text" name="kontenchat" class="form-control" placeholder="Type message..."/>
                       
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- /.box (chat box) -->

           
            <!-- quick email widget 
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Quick Email</h3>
                   
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <?php echo form_open_multipart('email/send');?>
                    <div class="form-group">
                            <input type="email" class="form-control" name="emailfrom" placeholder="Email FROM:"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailto" placeholder="Email TO:"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Message" name="konten" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="box-footer clearfix">
                    <button type="submit" value="submit" name="submit" class="pull-right btn btn-default" >Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                    </form>
                </div>
                
            </div>
            -->
                
        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        <!-- TO DO List -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">To Do List</h3>
                    <div class="box-tools pull-right">
                        <ul class="pagination pagination-sm inline">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">

                        <?php foreach ($todolist as $todo) {
                            ?>
                        <li>
                            <!-- drag handle -->
                            <span class="handle">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <!-- checkbox -->
                            <input type="checkbox" value="<?php echo $todo['id'];?>" name=""/>
                            <!-- todo text -->
                            <span class="text"><?php echo $todo['isi'];?></span>
                            <!-- Emphasis label -->
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> <?php echo $todo['time'];?></small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <a href="<?php echo base_url()?>profileadm/deletetodolist/<?php echo $todo['id'];?>" class="fa fa-trash-o"></a>
                            </div>
                        </li>
                        <?php }?>
                        
                    </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <?php echo form_open('page=profileadm&act=submittodolist');?>
                    <div class="input-group">
                        <input type="text" name="kontentodolist" class="form-control" placeholder="Type message..."/>
                       
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- /.box -->


            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Add new event</a></li>
                                <li><a href="#">Clear events</a></li>
                                <li class="divider"></li>
                                <li><a href="#">View calendar</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                    <div class="row">
                       
                    </div><!-- /.row -->
                </div>
            </div><!-- /.box -->
    <!-- MODAL -->
    <div class="modal fade" id="log" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title">Private Message</h4>
            </div>
            
            <div class="modal-body">
                <form action="<?php echo site_url('page=profileadm&act=submitprivatemessage');?>" method="post" id="login" novalidate="novalidate" class="bv-form">
                    
                    <div class="form-group has-feedback">
                        <label for="username" class="sr-only">NIM Penerima : </label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="NIM" required="" autofocus=""/>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="kontenchat" class="sr-only">Konten Chat</label>
                        <input type="text" id="isi" name="isi" class="form-control" placeholder="Konten Chat" required=""/>
                    </div>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim Private Message</button>
                <input type="hidden" value="">
                </form>
           
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

        </section><!-- right col -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->



<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>