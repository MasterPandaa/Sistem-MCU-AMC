<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }

    $besok                  = date("Y-m-d", strtotime("now"));
    $thnbesok               = substr($besok,0,4);
    $blnbesok               = substr($besok,5,2);
    $tglbesok               = substr($besok,8,2);
?>

 <!-- MAKE AN APPOINTMENT -->
 <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
      <h2><center>Pendaftaran Tes Diagnosis Covid-19</center></h2>
      <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
      <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
           <div class="row">
           <!-- <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data> -->
                <div class="col-md-6 col-sm-6">
                               <div class="col-md-12 col-sm-12">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi1'));" id="TxtIsi1" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Anda" autocomplete="off"/>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-12 col-sm-12">    
                                    <label for="nik">NIK</label>
                                    <input type="tel" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi5'));" id="TxtIsi5" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 40 karakter)" required name="nik" maxlength="40" placeholder="nik anda" autocomplete="off" />
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="alamat">Alamat KTP</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi2'));" id="TxtIsi2" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat KTP Anda" autocomplete="off" />
                                    <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="alamatdom">Alamat DOMISILI</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi6'));" id="TxtIsi6" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamatdom" maxlength="200" placeholder="Alamat Domisili Anda" autocomplete="off" />
                                    <span id="MsgIs6" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="agama">AGAMA</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi7'));" id="TxtIsi7" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="agama" maxlength="200" placeholder="Agama Anda" autocomplete="off" />
                                    <span id="MsgIs7" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="stts_perkawinan">STATUS PERKAWINAN</label>
                                    <select name="stts_perkawinan" class="form-control">
                                        <option selected>--</option>
                                        <option value="belum_menikah">Belum Menikah</option>
                                        <option value="menikah">Menikah</option>
                                    </select>
                               </div>
                               <div class="col-md-6 col-sm-6">    
                                    <label for="nohp">Nomor HP/Telephone</label>
                                    <input type="tel" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi3'));" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 40 karakter)" required name="nohp" maxlength="40" placeholder="Nomor HP/Telephone Anda" autocomplete="off" />
                                    <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Anda" autocomplete="off" />
                                    <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="tanggal">Pilih Tanggal</label>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                               <select name="TglDaftar" class="form-control">
                                                <?php
                                                    echo "<option>$tglbesok</option>";
                                                    loadTgl2();
                                                ?>
                                               </select>
                                            </td>
                                            <td>
                                                <select name="BlnDaftar" class="form-control">
                                                 <?php
                                                    echo "<option>$blnbesok</option>";
                                                    loadBln2();
                                                 ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ThnDaftar" class="form-control">
                                                 <?php
                                                    echo "<option>$thnbesok</option>";
                                                    loadThn4();
                                                 ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="poli">Tes Diagnosis</label>
                                    <select name="poli" class="form-control">
                                        <option selected>Pilih Tes</option>
                                        <option value="antibodi">Rapid Antibodi</option>
                                        <option value="antigen">Swab Antigen</option>
                                        <option value="pcr">Swab PCR</option>
                                    </select>
                               </div>
                </div>
                <div class="col-md-6 col-sm-6">
                     <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                              <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                                   <div class="col-md-12 col-sm-12">
                                        <table class="table table-bordered">
                                             <thead>
                                                  <tr>
                                                  <th scope="col">No</th>
                                                  <th scope="col">Pertanyaan</th>
                                                  <th scope="col">Ya</th>
                                                  <th scope="col">Tidak</th>
                                                  <th scope="col">Jika Ya<br>Tgl Mulai Gejala</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <th scope="row">1</th>
                                                       <td>Apakah anda demam dalam 14 hari terakhir?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">2</th>
                                                       <td>Apakah anda batuk dalam 14 hari terakhir?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">3</th>
                                                       <td>Apakah anda pilek dalam 14 hari terakhir?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">4</th>
                                                       <td>Apakah anda nyeri tenggorokan dalam 14 hari terakhir?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">5</th>
                                                       <td>Apakah anda mempunyai riwayat pneumonia?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">6</th>
                                                       <td>Apakah anda ada riwayat perjalanan ke wilayah atau negara yang terjangkit covid-19 dalam 14 hari terkahir?<br>jika ya, tanggal berapa dan ke daerah mana</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">7</th>
                                                       <td>Apakah anda ada riwayat kontak erat dengan kasus konfirmai covid-19 dalam wakti 14 hari terkahir?<br>jika ya, tanggal berapa dan kontak dengan siapa?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">8</th>
                                                       <td>Apakah anda bekerja atau mengunjungi tempat yang berhubungan dengan pasien konfirmasi covid-19?<br>jika ya, bekerja/mengunjungi faskes mana?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                                  <tr>
                                                       <th scope="row">9</th>
                                                       <td>Apakah anda merupakan petugas kesehatan?<br>jika ya, sebagai apa?</td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                       <td><input class="form-control" type="text" name="pertannyaan1" id="pertannyaan1" value=""></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                        
                                   </div>
                               </div>                           </div>
                         <button type="submit" class="form-control" id="cf-submit" name="btnBooking">Kirimkan</button>
                    </div> 
                </form>
           </div>
      </div>
 </section>

 <section id="google-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.628845184083!2d110.3519124!3d-7.799648!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dbee8a4bab35cbe!2sRS%20AMC%20Muhammadiyah!5e0!3m2!1sid!2sid!4v1623461972627!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.449032219332!2d110.30504256997102!3d-7.860565684814225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88ca51d8f3d715e5!2sWarung%20RERE!5e0!3m2!1sid!2sid!4v1588857905294!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen="true"></iframe> -->
 </section>     

 