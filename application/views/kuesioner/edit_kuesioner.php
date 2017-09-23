<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Kuesioner - Edit Mode Page </small>
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
                    <h2 class="panel-title">Edit Kuesioner</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=kuesioner&act=simpan_kuesioner');?>
                    <table>
                        <input type="hidden" name="id" value="<?php echo $kuesioner['id'];?>">
                        <td>
                            <tr><label>NIM Mahasiswa(tanpa titik)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nim','class'=>'form-control','value'=>$kuesioner['nim'])) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Nama Mahasiswa</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nama','class'=>'form-control','value'=>$kuesioner['nama'])) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Program Studi Mahasiswa</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'programstudi','class'=>'form-control','value'=>$kuesioner['programstudi'])) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Nomor HP</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nomortelepon','class'=>'form-control','value'=>$kuesioner['nomortelepon'])) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>E-Mail</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'email','class'=>'form-control','value'=>$kuesioner['email'])) ?></tr>
                        </td>
                         <br>
                        <td>
                            <tr><label>Kapan Anda Mulai Mencari Pekerjaan ? (F3)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F3','class'=>'form-control','value'=>$kuesioner['F3'])) ?></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Bagaimana Anda Mencari pekerjaan tersebut? (F4)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F4','class'=>'form-control','value'=>$kuesioner['F4'])) ?>
                            </tr>
                        </td>
                        <br>
                        
                         <td>
                            <tr><label>Berapa Bulan Waktu Yang dihabiskan untuk mencari pekerjaan ? (F5)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F5','class'=>'form-control','value'=>$kuesioner['F5'])) ?>
                            </tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Berapa Institusi yang sudah anda lamar ? (F6)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F6','class'=>'form-control','value'=>$kuesioner['F6'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Berapa Institusi yang merespon lamaran anda ? (F7)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F7','class'=>'form-control','value'=>$kuesioner['F7'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apakah Anda Saat Ini bekerja ? (F8)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F8','class'=>'form-control','value'=>$kuesioner['F8'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Bagaimana Anda Menggambarkan situasi anda Saat ini  ? (F9)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F9','class'=>'form-control','value'=>$kuesioner['F9'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apakah Anda Aktif Mencari Pekerjaan ? (F10)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F10','class'=>'form-control','value'=>$kuesioner['F10'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apa jenis perusahaan tempat anda bekerja sekarang ? (F11)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F11','class'=>'form-control','value'=>$kuesioner['F11'])) ?>
                            </tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Bergerak Di bidang apa perusahaan anda? ? (F12)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F12','class'=>'form-control','value'=>$kuesioner['F12'])) ?>
                            </tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Berapa Pendapatan Anda Setiap Bulannya ? (F13)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F13','class'=>'form-control','value'=>$kuesioner['F13'])) ?>
                            </tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Seberapa Erat hubungan anda dengan bidang studi ? (F14)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F14','class'=>'form-control','value'=>$kuesioner['F14'])) ?>
                            </tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Tingkat Pendidikan apa yang paling sesuai untuk pekerjaan anda saat ini ? (F15)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F15','class'=>'form-control','value'=>$kuesioner['F15'])) ?>
                            </tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Jika Menurut anda tidak sesuai dengan pekerjaan anda kenapa anda mengambilnya ? (F16)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'F16','class'=>'form-control','value'=>$kuesioner['F16'])) ?>
                            </tr>
                        </td>
                         <br>
                       <hr/>
                         <label>Pertanyaan Kategori A</label><br>
                         "Pada Saat lulus , pada tingkat kompetensi ini dibawah ini yang anda kuasai"<br>
                         Skala 1-5 (Makin tinggi makin baik)
                         <hr/>
                         
                         <td>
                            <tr><label> Pengetahuan di bidang atau disiplin ilmu anda  (A1)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   
                            <?php echo form_input(array('required'=>'','name'=>'A1','class'=>'form-control','value'=>$kuesioner['A1'])) ?>
                            </tr>
                        </td>
                        <br><br>
                         <td>
                            <tr><label> Pengetahuan di luar bidang atau disiplin anda  (A2)</label></tr>
                            <tr>:</tr>
                            <tr> <br>  <?php echo form_input(array('required'=>'','name'=>'A2','class'=>'form-control','value'=>$kuesioner['A2'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Pengetahuan Umum  (A3)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A3','class'=>'form-control','value'=>$kuesioner['A3'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Internet  (A4)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A4','class'=>'form-control','value'=>$kuesioner['A4'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Komputer  (A5)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A5','class'=>'form-control','value'=>$kuesioner['A5'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Berpikir Kritis  (A6)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A6','class'=>'form-control','value'=>$kuesioner['A6'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Riset (A7)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A7','class'=>'form-control','value'=>$kuesioner['A7'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Belajar (A8)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A8','class'=>'form-control','value'=>$kuesioner['A8'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Berkomunikasi  (A9)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A9','class'=>'form-control','value'=>$kuesioner['A9'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dibawah Tekanan (A10)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A10','class'=>'form-control','value'=>$kuesioner['A10'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajemen Waktu (A11)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A11','class'=>'form-control','value'=>$kuesioner['A11'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Secara Mandiri (A12)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A12','class'=>'form-control','value'=>$kuesioner['A12'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dengan Tim  (A13)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A13','class'=>'form-control','value'=>$kuesioner['A13'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam memecahkan masalah (A14)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A14','class'=>'form-control','value'=>$kuesioner['A14'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Negosiasi (A15)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A15','class'=>'form-control','value'=>$kuesioner['A15'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Analisis (A16)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A16','class'=>'form-control','value'=>$kuesioner['A16'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Toleransi  (A17)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A17','class'=>'form-control','value'=>$kuesioner['A17'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Adaptasi (A18)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A18','class'=>'form-control','value'=>$kuesioner['A18'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Loyalitas dan integritas (A19)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A19','class'=>'form-control','value'=>$kuesioner['A19'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja dengan orang dengan latar belakang budaya yang berbeda ? (A20)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A20','class'=>'form-control','value'=>$kuesioner['A20'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kepemimpinan (A21)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A21','class'=>'form-control','value'=>$kuesioner['A21'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam bertanggung jawab ? (A22)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A22','class'=>'form-control','value'=>$kuesioner['A22'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Inisisatif ?(A23)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'A23','class'=>'form-control','value'=>$kuesioner['A23'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajaemen Proyek (A24)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A24','class'=>'form-control','value'=>$kuesioner['A24'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Mempresentasikan sebuah ide (A25)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A25','class'=>'form-control','value'=>$kuesioner['A25'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam menulis sebuah laporan (A26)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A26','class'=>'form-control','value'=>$kuesioner['A26'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan untuk belajar sepanjang hayat(A27)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A27','class'=>'form-control','value'=>$kuesioner['A27'])) ?>
                            </tr>
                        </td>
                     
                      <br>
                       <hr/>
                         <label>Pertanyaan Kategori A</label><br>
                         "Pada Saat lulus , pada tingkat kompetensi ini dibawah ini yang anda kuasai"<br>
                         Skala 1-5 (Makin tinggi makin baik)
                         <hr/>
                         
                         <td>
                            <tr><label> Pengetahuan di bidang atau disiplin ilmu anda  (B1)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   
                            <?php echo form_input(array('required'=>'','name'=>'B1','class'=>'form-control','value'=>$kuesioner['B1'])) ?>
                            </tr>
                        </td>
                        <br><br>
                         <td>
                            <tr><label> Pengetahuan di luar bidang atau disiplin anda  (B2)</label></tr>
                            <tr>:</tr>
                            <tr> <br>  <?php echo form_input(array('required'=>'','name'=>'B2','class'=>'form-control','value'=>$kuesioner['B2'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Pengetahuan Umum  (B3)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B3','class'=>'form-control','value'=>$kuesioner['B3'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Internet  (B4)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B4','class'=>'form-control','value'=>$kuesioner['B4'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Komputer  (B5)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B5','class'=>'form-control','value'=>$kuesioner['B5'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Berpikir Kritis  (B6)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B6','class'=>'form-control','value'=>$kuesioner['B6'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Riset (B7)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B7','class'=>'form-control','value'=>$kuesioner['B7'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Belajar (B8)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B8','class'=>'form-control','value'=>$kuesioner['B8'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Berkomunikasi  (B9)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B9','class'=>'form-control','value'=>$kuesioner['B9'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dibawah Tekanan (B10)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B10','class'=>'form-control','value'=>$kuesioner['B10'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajemen Waktu (B11)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B11','class'=>'form-control','value'=>$kuesioner['B11'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Secara Mandiri (A12)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B12','class'=>'form-control','value'=>$kuesioner['B12'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dengan Tim  (B13)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B13','class'=>'form-control','value'=>$kuesioner['B13'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam memecahkan masalah (B14)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B14','class'=>'form-control','value'=>$kuesioner['B14'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Negosiasi (B15)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B15','class'=>'form-control','value'=>$kuesioner['B15'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Analisis (B16)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B16','class'=>'form-control','value'=>$kuesioner['B16'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Toleransi  (B17)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B17','class'=>'form-control','value'=>$kuesioner['B17'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Adaptasi (B18)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A18','class'=>'form-control','value'=>$kuesioner['B18'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Loyalitas dan integritas (B19)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'A19','class'=>'form-control','value'=>$kuesioner['B19'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja dengan orang dengan latar belakang budaya yang berbeda ? (B20)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B20','class'=>'form-control','value'=>$kuesioner['B20'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kepemimpinan (B21)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B21','class'=>'form-control','value'=>$kuesioner['B21'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam bertanggung jawab ? (B22)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B22','class'=>'form-control','value'=>$kuesioner['B22'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Inisisatif ?(B23)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <?php echo form_input(array('required'=>'','name'=>'B23','class'=>'form-control','value'=>$kuesioner['B23'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajaemen Proyek (B24)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B24','class'=>'form-control','value'=>$kuesioner['B24'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Mempresentasikan sebuah ide (B25)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B25','class'=>'form-control','value'=>$kuesioner['B25'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam menulis sebuah laporan (B26)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B26','class'=>'form-control','value'=>$kuesioner['B26'])) ?>
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan untuk belajar sepanjang hayat(B27)</label></tr>
                            <tr>:</tr>
                            <tr> <br>    <?php echo form_input(array('required'=>'','name'=>'B27','class'=>'form-control','value'=>$kuesioner['B27'])) ?>
                            </tr>
                        </td>

                         <br>
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