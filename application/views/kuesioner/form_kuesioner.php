<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Kuesioner - First Page </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kuesioner</li>
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
            Tambah Kuesioner Data
          </div>

        <!-- /.col-lg-12 -->
        <div class="col-lg-8">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title">Form Field Kusioner</h2>
                </div>
                <div class="panel-body">
                <?php echo form_open_multipart('page=kuesioner&act=simpan_kuesioner');?>
                    <table >
                        
                        <td>
                            <tr><label>NIM Mahasiswa(tanpa titik)</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nim','class'=>'form-control','value'=>'','placeholder'=>'Contoh: G211120012')) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Nama Mahasiswa</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nama','class'=>'form-control','value'=>'')) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Program Studi Mahasiswa</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'programstudi','class'=>'form-control','value'=>'')) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Nomor HP</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'nomortelepon','class'=>'form-control','value'=>'')) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>E-Mail</label></tr>
                            <tr>:</tr>
                            <tr><?php echo form_input(array('required'=>'','name'=>'email','class'=>'form-control','value'=>'')) ?></tr>
                        </td>
                        <br>
                        <td>
                            <tr><label>Kapan Anda Mulai Mencari Pekerjaan ? (F3)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F3" class="form-control">
                                    <option value="Sebelum Wisuda">Sebelum Wisuda</option>
                                    <option value="Setelah Wisuda">Setelah Wisuda</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Bagaimana Anda Mencari pekerjaan tersebut? (F4)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F4" class="form-control">
                                    <option value="Iklan Internet">Melalui Iklan di internet koran/majalah/brosur</option>
                                    <option value="Langsung Melamar ke Perusahaan">Melamar Ke Perusahaan tanpa mengetahui lowongan yang ada </option>
                                    <option value="pergi ke bursa kerja">Pergi Ke pameran atau bursa kerja </option>
                                    <option value="Dihubungi Perusahaan">Dihubungi oleh perusahaan</option>
                                    <option value="Menghubungi Kemenakertrans">Menghubungi Kemenaker Trans</option>
                                    <option value="Mencari dari Agen Kerja">Mencari dari Agen Pekerjaan</option>
                                    </select>
                            </tr>
                        </td>
                        <br>
                        
                         <td>
                            <tr><label>Berapa Bulan Waktu Yang dihabiskan untuk mencari pekerjaan ? (F5)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F5" class="form-control">
                                    <option value="Sebelum Wisuda">Sebelum Wisuda</option>
                                     <option value="Sebelum Wisuda">Sesudah Wisuda</option>
                                    <option value="6 Bulan Setelah Wisuda">6 Bulan Setelah Wisuda</option>
                                    <option value="6 Bulan Setelah Wisuda">12 Bulan Setelah Wisuda</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Berapa Institusi yang sudah anda lamar ? (F6)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F6" class="form-control">
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="6">6+(Lebih Dari 6)</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Berapa Institusi yang merespon lamaran anda ? (F7)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F7" class="form-control">
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="6">6+(Lebih Dari 6)</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apakah Anda Saat Ini bekerja ? (F8)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F8" class="form-control">
                                    <option value="Bekerja">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Bagaimana Anda Menggambarkan situasi anda Saat ini  ? (F9)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F9" class="form-control">
                                    <option value="Melanjutkan Ke jenjang yg lebih tinggi">Saya Masih Belajar Melanjutkan Profesi atau pascasarjana</option>
                                    <option value="Menikah">Saya Menikah</option>
                                    <option value="Sibuk dengan keluarga">Saya Sibuk dengan Keluarga</option>
                                    <option value="Sedang Mencari Pekerjaan">Saya Sedang Mencari Pekerjaan</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apakah Anda Aktif Mencari Pekerjaan ? (F10)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F10" class="form-control">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Apa jenis perusahaan tempat anda bekerja sekarang ? (F11)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F11" class="form-control">
                                    <option value="Instansi Pemerintah">Instansi Pemerintah</option>
                                    <option value="Perusahaan Swasta">Perusahaan Swasta</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Perusahaan Non Profit">Perusahaan Non Profit</option>
                                    </select></tr>
                        </td>
                         <br>
                         <td>
                            <tr><label>Bergerak Di bidang apa perusahaan anda? ? (F12)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F12" class="form-control">
                                    <option value="Pertanian">Pertanian</option>
                                    <option value="Peternakan">Peternakan</option>
                                    <option value="Perdagangan">Perdagangan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Sosial">Sosial</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Berapa Pendapatan Anda Setiap Bulannya ? (F13)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F13" class="form-control">
                                    <option value="1500000">Kurang dari Rp. 1.700.000</option>
                                    <option value="2500000">Kurang Dari RP. 2.600.000</option>
                                    <option value="3000000">Kurang Dari Rp. 3.000.000</option>
                                    <option value="3000000++">Lebih Dari RP.3.000.000</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Seberapa Erat hubungan anda dengan bidang studi ? (F14)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F14" class="form-control">
                                    <option value="Sangat Erat">Sangat Erat</option>
                                    <option value="Erat">Erat</option>
                                    <option value="Tidak Erat">Tidak Erat</option>
                                    <option value="Sangat Tidak Erat">Sangat Tidak Erat</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Tingkat Pendidikan apa yang paling sesuai untuk pekerjaan anda saat ini ? (F15)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F15" class="form-control">
                                    <option value="Setingkat Lebih tinggi">Setingkat Lebih tinggi</option>
                                    <option value="Tingkat yang sama">Tingkat Yang Sama</option>
                                    <option value="Setingkat Lebih rendah">Setingkat Lebih Rendah</option>
                                    <option value="Tidak Perlu Pendidikan Tinggi">Tidak Perlu pendidikan Tinggi</option>
                                    </select></tr>
                        </td>
                        <br>
                         <td>
                            <tr><label>Jika Menurut anda tidak sesuai dengan pekerjaan anda kenapa anda mengambilnya ? (F16)</label></tr>
                            <tr>:</tr>
                            <tr><select name="F16" class="form-control">
                                    <option value="Pertanyaan yang tidak Perlu">Pertanyaan yang tidak perlu karna sudah sesuai</option>
                                    <option value="Belum mendapat kerja yang sesuai">Saya Belum mendapatkan pekerjaan yang sesuai</option>
                                    <option value="Prospek karir yang baik">Di pekerjaan ini saya mendapat prospek karir yang lebih baik </option>
                                    <option value="Suka bekerja tanpa ada hubungan dengan bidang studi"> Suka bekerja tanpa keterkaitan bidang studi</option>
                                    <option value="Pekerjaan lebih aman atau secure">Pekerjaan saya saat ini lebih aman dan secure</option>
                                    <option value="Pekerjaan saya saat ini tidak menarik"> Pekerjaan saya saat ini tidak menarik</option>
                                    <option value="Pekerjaan saya saat ini fleksibel">Pekerjaan saya saat ini lebih fleksibel serta dapat mencari tambahan yang lain</option>
                                    <option value="Pekerjaan saya saat ini lokasi nya denkat dengan rumah">Pekerjaan saya saat ini lokasi nya dekat dengan rumah </option>
                                    <option value="Pekerjaan saya saat ini lebih menjamin kebutuhan keluarga">Pekerjaan saya saat ini lebih menjamin kelangsungan rumah tangga</option>

                                    </select></tr>
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
                            <tr> <br>   <input type="radio" name="A1" value="1">1
                                        <input type="radio" name="A1" value="2">2
                                        <input type="radio" name="A1" value="3">3
                                        <input type="radio" name="A1" value="4">4
                                        <input type="radio" name="A1" value="5">5
                            </tr>
                        </td>
                        <br><br>
                         <td>
                            <tr><label> Pengetahuan di luar bidang atau disiplin anda  (A2)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A2" value="1">1
                                        <input type="radio" name="A2" value="2">2
                                        <input type="radio" name="A2" value="3">3
                                        <input type="radio" name="A2" value="4">4
                                        <input type="radio" name="A2" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Pengetahuan Umum  (A3)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A3" value="1">1
                                        <input type="radio" name="A3" value="2">2
                                        <input type="radio" name="A3" value="3">3
                                        <input type="radio" name="A3" value="4">4
                                        <input type="radio" name="A3" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Internet  (A4)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A4" value="1">1
                                        <input type="radio" name="A4" value="2">2
                                        <input type="radio" name="A4" value="3">3
                                        <input type="radio" name="A4" value="4">4
                                        <input type="radio" name="A4" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Komputer  (A5)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A5" value="1">1
                                        <input type="radio" name="A5" value="2">2
                                        <input type="radio" name="A5" value="3">3
                                        <input type="radio" name="A5" value="4">4
                                        <input type="radio" name="A5" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Berpikir Kritis  (A6)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A6" value="1">1
                                        <input type="radio" name="A6" value="2">2
                                        <input type="radio" name="A6" value="3">3
                                        <input type="radio" name="A6" value="4">4
                                        <input type="radio" name="A6" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Riset (A7)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A7" value="1">1
                                        <input type="radio" name="A7" value="2">2
                                        <input type="radio" name="A7" value="3">3
                                        <input type="radio" name="A7" value="4">4
                                        <input type="radio" name="A7" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Belajar (A8)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A8" value="1">1
                                        <input type="radio" name="A8" value="2">2
                                        <input type="radio" name="A8" value="3">3
                                        <input type="radio" name="A8" value="4">4
                                        <input type="radio" name="A8" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Berkomunikasi  (A9)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A9" value="1">1
                                        <input type="radio" name="A9" value="2">2
                                        <input type="radio" name="A9" value="3">3
                                        <input type="radio" name="A9" value="4">4
                                        <input type="radio" name="A9" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dibawah Tekanan (A10)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A10" value="1">1
                                        <input type="radio" name="A10" value="2">2
                                        <input type="radio" name="A10" value="3">3
                                        <input type="radio" name="A10" value="4">4
                                        <input type="radio" name="A10" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajemen Waktu (A11)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A11" value="1">1
                                        <input type="radio" name="A11" value="2">2
                                        <input type="radio" name="A11" value="3">3
                                        <input type="radio" name="A11" value="4">4
                                        <input type="radio" name="A11" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Secara Mandiri (A12)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A12" value="1">1
                                        <input type="radio" name="A12" value="2">2
                                        <input type="radio" name="A12" value="3">3
                                        <input type="radio" name="A12" value="4">4
                                        <input type="radio" name="A12" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dengan Tim  (A13)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A13" value="1">1
                                        <input type="radio" name="A13" value="2">2
                                        <input type="radio" name="A13" value="3">3
                                        <input type="radio" name="A13" value="4">4
                                        <input type="radio" name="A13" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam memecahkan masalah (A14)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A14" value="1">1
                                        <input type="radio" name="A14" value="2">2
                                        <input type="radio" name="A14" value="3">3
                                        <input type="radio" name="A14" value="4">4
                                        <input type="radio" name="A14" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Negosiasi (A15)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A15" value="1">1
                                        <input type="radio" name="A15" value="2">2
                                        <input type="radio" name="A15" value="3">3
                                        <input type="radio" name="A15" value="4">4
                                        <input type="radio" name="A15" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Analisis (A16)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A16" value="1">1
                                        <input type="radio" name="A16" value="2">2
                                        <input type="radio" name="A16" value="3">3
                                        <input type="radio" name="A16" value="4">4
                                        <input type="radio" name="A16" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Toleransi  (A17)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A17" value="1">1
                                        <input type="radio" name="A17" value="2">2
                                        <input type="radio" name="A17" value="3">3
                                        <input type="radio" name="A17" value="4">4
                                        <input type="radio" name="A17" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Adaptasi (A18)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A18" value="1">1
                                        <input type="radio" name="A18" value="2">2
                                        <input type="radio" name="A18" value="3">3
                                        <input type="radio" name="A18" value="4">4
                                        <input type="radio" name="A18" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Loyalitas dan integritas (A19)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A19" value="1">1
                                        <input type="radio" name="A19" value="2">2
                                        <input type="radio" name="A19" value="3">3
                                        <input type="radio" name="A19" value="4">4
                                        <input type="radio" name="A19" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja dengan orang dengan latar belakang budaya yang berbeda ? (A20)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A20" value="1">1
                                        <input type="radio" name="A20" value="2">2
                                        <input type="radio" name="A20" value="3">3
                                        <input type="radio" name="A20" value="4">4
                                        <input type="radio" name="A20" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kepemimpinan (A21)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A21" value="1">1
                                        <input type="radio" name="A21" value="2">2
                                        <input type="radio" name="A21" value="3">3
                                        <input type="radio" name="A21" value="4">4
                                        <input type="radio" name="A21" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam bertanggung jawab ? (A22)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A22" value="1">1
                                        <input type="radio" name="A22" value="2">2
                                        <input type="radio" name="A22" value="3">3
                                        <input type="radio" name="A22" value="4">4
                                        <input type="radio" name="A22" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Inisisatif ?(A23)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A23" value="1">1
                                        <input type="radio" name="A23" value="2">2
                                        <input type="radio" name="A23" value="3">3
                                        <input type="radio" name="A23" value="4">4
                                        <input type="radio" name="A23" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajaemen Proyek (A24)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A24" value="1">1
                                        <input type="radio" name="A24" value="2">2
                                        <input type="radio" name="A24" value="3">3
                                        <input type="radio" name="A24" value="4">4
                                        <input type="radio" name="A24" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Mempresentasikan sebuah ide (A25)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A25" value="1">1
                                        <input type="radio" name="A25" value="2">2
                                        <input type="radio" name="A25" value="3">3
                                        <input type="radio" name="A25" value="4">4
                                        <input type="radio" name="A25" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam menulis sebuah laporan (A26)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A26" value="1">1
                                        <input type="radio" name="A26" value="2">2
                                        <input type="radio" name="A26" value="3">3
                                        <input type="radio" name="A26" value="4">4
                                        <input type="radio" name="A26" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan untuk belajar sepanjang hayat(A27)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="A27" value="1">1
                                        <input type="radio" name="A27" value="2">2
                                        <input type="radio" name="A27" value="3">3
                                        <input type="radio" name="A27" value="4">4
                                        <input type="radio" name="A27" value="5">5
                            </tr>
                        </td>
                      

                         <br>
                         <hr/>
                         <label>Pertanyaan Kategori B</label><br>
                         "Pada Saat lulus , Bagaimana kontribusi perguruan tinggi dalam hal komptensi dibawah ini "<br>
                         Skala 1-5 (Makin tinggi makin baik)
                         <hr/>
                         
                         <td>
                            <tr><label> Pengetahuan di bidang atau disiplin ilmu anda  (B1)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B1" value="1">1
                                        <input type="radio" name="B1" value="2">2
                                        <input type="radio" name="B1" value="3">3
                                        <input type="radio" name="B1" value="4">4
                                        <input type="radio" name="B1" value="5">5
                            </tr>
                        </td>
                        <br><br>
                         <td>
                            <tr><label> Pengetahuan di luar bidang atau disiplin anda  (B2)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B2" value="1">1
                                        <input type="radio" name="B2" value="2">2
                                        <input type="radio" name="B2" value="3">3
                                        <input type="radio" name="B2" value="4">4
                                        <input type="radio" name="B2" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Pengetahuan Umum  (B3)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B3" value="1">1
                                        <input type="radio" name="B3" value="2">2
                                        <input type="radio" name="B3" value="3">3
                                        <input type="radio" name="B3" value="4">4
                                        <input type="radio" name="B3" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Internet  (B4)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B4" value="1">1
                                        <input type="radio" name="B4" value="2">2
                                        <input type="radio" name="B4" value="3">3
                                        <input type="radio" name="B4" value="4">4
                                        <input type="radio" name="B4" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Komputer  (B5)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B5" value="1">1
                                        <input type="radio" name="B5" value="2">2
                                        <input type="radio" name="B5" value="3">3
                                        <input type="radio" name="B5" value="4">4
                                        <input type="radio" name="B5" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Berpikir Kritis  (B6)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B6" value="1">1
                                        <input type="radio" name="B6" value="2">2
                                        <input type="radio" name="B6" value="3">3
                                        <input type="radio" name="B6" value="4">4
                                        <input type="radio" name="B6" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Ketrampilan Riset (B7)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B7" value="1">1
                                        <input type="radio" name="B7" value="2">2
                                        <input type="radio" name="B7" value="3">3
                                        <input type="radio" name="B7" value="4">4
                                        <input type="radio" name="B7" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Belajar (B8)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B8" value="1">1
                                        <input type="radio" name="B8" value="2">2
                                        <input type="radio" name="B8" value="3">3
                                        <input type="radio" name="B8" value="4">4
                                        <input type="radio" name="B8" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Berkomunikasi  (B9)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B9" value="1">1
                                        <input type="radio" name="B9" value="2">2
                                        <input type="radio" name="B9" value="3">3
                                        <input type="radio" name="B9" value="4">4
                                        <input type="radio" name="B9" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dibawah Tekanan (B10)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B10" value="1">1
                                        <input type="radio" name="B10" value="2">2
                                        <input type="radio" name="B10" value="3">3
                                        <input type="radio" name="B10" value="4">4
                                        <input type="radio" name="B10" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajemen Waktu (B11)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B11" value="1">1
                                        <input type="radio" name="B11" value="2">2
                                        <input type="radio" name="B11" value="3">3
                                        <input type="radio" name="B11" value="4">4
                                        <input type="radio" name="B11" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Secara Mandiri (B12)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B12" value="1">1
                                        <input type="radio" name="B12" value="2">2
                                        <input type="radio" name="B12" value="3">3
                                        <input type="radio" name="B12" value="4">4
                                        <input type="radio" name="B12" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja Dengan Tim  (B13)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B13" value="1">1
                                        <input type="radio" name="B13" value="2">2
                                        <input type="radio" name="B13" value="3">3
                                        <input type="radio" name="B13" value="4">4
                                        <input type="radio" name="B13" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam memecahkan masalah (B14)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B14" value="1">1
                                        <input type="radio" name="B14" value="2">2
                                        <input type="radio" name="B14" value="3">3
                                        <input type="radio" name="B14" value="4">4
                                        <input type="radio" name="B14" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Negosiasi (B15)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B15" value="1">1
                                        <input type="radio" name="B15" value="2">2
                                        <input type="radio" name="B15" value="3">3
                                        <input type="radio" name="B15" value="4">4
                                        <input type="radio" name="B15" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Analisis (B16)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B16" value="1">1
                                        <input type="radio" name="B16" value="2">2
                                        <input type="radio" name="B16" value="3">3
                                        <input type="radio" name="B16" value="4">4
                                        <input type="radio" name="B16" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Toleransi  (B17)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B17" value="1">1
                                        <input type="radio" name="B17" value="2">2
                                        <input type="radio" name="B17" value="3">3
                                        <input type="radio" name="B17" value="4">4
                                        <input type="radio" name="B17" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Adaptasi (B18)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B18" value="1">1
                                        <input type="radio" name="B18" value="2">2
                                        <input type="radio" name="B18" value="3">3
                                        <input type="radio" name="B18" value="4">4
                                        <input type="radio" name="B18" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Loyalitas dan integritas (B19)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B19" value="1">1
                                        <input type="radio" name="B19" value="2">2
                                        <input type="radio" name="B19" value="3">3
                                        <input type="radio" name="B19" value="4">4
                                        <input type="radio" name="B19" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Bekerja dengan orang dengan latar belakang budaya yang berbeda ? (B20)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B20" value="1">1
                                        <input type="radio" name="B20" value="2">2
                                        <input type="radio" name="B20" value="3">3
                                        <input type="radio" name="B20" value="4">4
                                        <input type="radio" name="B20" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kepemimpinan (B21)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B21" value="1">1
                                        <input type="radio" name="B21" value="2">2
                                        <input type="radio" name="B21" value="3">3
                                        <input type="radio" name="B21" value="4">4
                                        <input type="radio" name="B21" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam bertanggung jawab ? (B22)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B22" value="1">1
                                        <input type="radio" name="B22" value="2">2
                                        <input type="radio" name="B22" value="3">3
                                        <input type="radio" name="B22" value="4">4
                                        <input type="radio" name="B22" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Inisisatif ?(B23)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B23" value="1">1
                                        <input type="radio" name="B23" value="2">2
                                        <input type="radio" name="B23" value="3">3
                                        <input type="radio" name="B23" value="4">4
                                        <input type="radio" name="B23" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Manajaemen Proyek (B24)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B24" value="1">1
                                        <input type="radio" name="B24" value="2">2
                                        <input type="radio" name="B24" value="3">3
                                        <input type="radio" name="B24" value="4">4
                                        <input type="radio" name="B24" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan Mempresentasikan sebuah ide (B25)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B25" value="1">1
                                        <input type="radio" name="B25" value="2">2
                                        <input type="radio" name="B25" value="3">3
                                        <input type="radio" name="B25" value="4">4
                                        <input type="radio" name="B25" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan dalam menulis sebuah laporan (B26)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B26" value="1">1
                                        <input type="radio" name="B26" value="2">2
                                        <input type="radio" name="B26" value="3">3
                                        <input type="radio" name="B26" value="4">4
                                        <input type="radio" name="B26" value="5">5
                            </tr>
                        </td>
                         <br><br>
                         <td>
                            <tr><label> Kemampuan untuk belajar sepanjang hayat(B27)</label></tr>
                            <tr>:</tr>
                            <tr> <br>   <input type="radio" name="B27" value="1">1
                                        <input type="radio" name="B27" value="2">2
                                        <input type="radio" name="B27" value="3">3
                                        <input type="radio" name="B27" value="4">4
                                        <input type="radio" name="B27" value="5">5
                            </tr>
                        </td>

                         



                        
                       
                       <br>
                       
                        <td>
                            <tr></tr>
                            <tr></tr>
                            <tr style="text-align: left;">
                                <?php echo form_submit(array('value'=>'Update','class'=>'btn btn-primary')) ?>
                                &nbsp;
                                <?php echo form_reset(array('value'=>'Batal','class'=>'btn btn-primary')) ?>
                            </tr>
                        </td>
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