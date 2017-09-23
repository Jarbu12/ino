<!-- === END HEADER === -->
 <!--JQueri UI--> 
        
      <!--  <script src="<?php echo base_url() ?>assets/ui/jquery.js"></script> -->
      <script src="<?php echo base_url() ?>assets/ui/jquery-2.1.4.min.js"></script> 
        <script src="<?php echo base_url() ?>assets/ui/jquery-ui.js"></script>
      <!--  <script src="<?php echo base_url() ?>assets/ui/autonumeric.js"></script> -->
        <link href="<?php echo base_url() ?>assets/ui/jquery-ui.min.css" rel="stylesheet">
        <script type="text/javascript">
            var s = $.noConflict();
            s(function() {
                // Auto Numeric Setoran
               // s("#id_set").autoNumeric({aSep: '.', aDec: ',', aPad: false});
                //s("#id_setoran").autoNumeric({aSep: '.', aDec: ',', aPad: false});
                //s("#id_set_kredit").autoNumeric({aSep: '.', aDec: ',', aPad: false});
                //s("#id_set_debet").autoNumeric({aSep: '.', aDec: ',', aPad: false});

                s('#nim').autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: "<?php echo site_url('page=mahasiswa&act=json_mahasiswa') ?>",
                            dataType: "json",
                            data: {
                                term: request.term
                            },
                            success: function(data) {
                                response(data);
                            }
                        });
                    },
                    minLength: 1,
                    select: function(event, ui) {
                        var $itemrow = s(this).closest('tr');
                        // Populate the input fields from the returned values
                        $itemrow.find('#nim').val(ui.item.nim);
                        s('#nim').val(ui.item.nim);

                        // Give focus to the next input field to recieve input from user
                        s('#nim').focus();
                        return false;
                    }
                    // Format the list menu output of the autocomplete
                }).data("ui-autocomplete")._renderItem = function(ul, item) {
                    return s("<li></li>")
                            .data("item.autocomplete", item)
                            .append("<a>" + item.nim + " - " + item.nama + " - " + item.jurusan+ "</a>")
                            .appendTo(ul);
                };

            });
        </script>
        <!--JQuery UI-->
					
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-12">
                                    <h2 class="margin-vert-20">Cari Alumni</h2>
                                    <div class="row margin-bottom-30">
                                        <div class="col-md-5 animate fadeInLeft">
                                           <?php echo form_open_multipart('page=home&act=alumni_singledata_search');?>
                                            <div class="form-group has-feedback">
                                            <label>Nama Alumni <small>(tunggu beberapa detik)</small></label>
                                            <input type="text" id="nim" name="nim" class="form-control" placeholder="Nama Wisudawan">
                                            </div>
                                            <br>
                                            <input type="submit" name="submit" class="btn btn-primary">
                                           </form>    
                                        </div>
                                        
                                    </div>

                                    <?php if(!empty($hasil)){?>
                                    <div class="col-md-4" >
                
              <img src="<?php echo base_url();?>assets/alumni/<?php echo $hasil['foto'];?>" height="200" width="150"  >
            </div>
                <div class="col-md-8 " >
                  <h4><b><i><i class="icon-double-angle-right"></i>&nbsp;<?php echo $hasil['nama'];?></i></b> <small>(<?php echo $hasil['jeniskelamin'];?>)  Wisudawan Ke-<?php echo $hasil['wisudawan'];?></small></h4> 
                  
                  <div class="col-md-4 ">
                  <span class="fa fa-book"></span>&nbsp;<?php echo $hasil['fakultas'];?> <br><br>
                  <span class="fa fa-barcode"></span>&nbsp;<?php echo $hasil['nim'];?><br><br>
                  <span class="fa fa-bookmark"></span>&nbsp;<?php echo $hasil['jurusan'];?><br><br>
                  <!--<span class="fa fa-briefcase"></span>&nbsp;<?php echo $hasil['pekerjaan'];?>--><br><br>
                  </div>
                  <div class="col-md-4 ">
                  <span class="fa fa-group"></span>&nbsp;<?php echo $hasil['jabatan'];?><br><br>
                  <span class="fa fa-heart"></span>&nbsp;<?php echo $hasil['status'];?><br><br>
                  <span class="fa fa-home"></span>&nbsp;<?php echo $hasil['domisili'];?><br><br>
                  <!--<span class="fa fa-laptop"></span>&nbsp;<?php echo $hasil['no_hp'];?> / <?php echo $hasil['bbm'];?> --><br><br>
                  </div>
                </div>
                                    <?php }?>
                                    <br>
                                    <hr class="margin-vert-40">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->