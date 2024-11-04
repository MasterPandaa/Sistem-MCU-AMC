<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
	</head>
	<body>
    <?php $this->load->view("meja3/navbar.php") ?>
		<div class="section">
			<div class="container">
            <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
            <center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
			</div>
        <div class="section">
			<div class="container">
                <h3>Resume</h3>
                <hr>
                <?php foreach($cari as $u){ 
                 $tgl_lahir = date('d-m-Y', strtotime($u->tgl_lahir));?>
                <form action="<?php echo base_url(). 'meja3/periksa'; ?>" method="post" name="form">	
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $u->id ?>" hidden>
                            <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $u->nama ?>" readonly>
                            <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <label for="alamatdom">Unit Kerja</label>
                            <input type="text" class="form-control" id="prodi" name="prodi"value="<?php echo $u->prodi ?>" readonly>
                            <span id="MsgIs6" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="alamatdom">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $u->tgl_lahir ?>" readonly>
                            <span id="MsgIs6" style="color:#CC0000; font-size:10px;"></span> 
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="jk">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jk" name="jk" value="<?php echo $u->jk ?>" readonly>
                            <span id="MsgIsi7" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="stts_pernikahan">Status Pernikahan</label>
                            <input type="text" class="form-control" id="stts_pernikahan" name="stts_pernikahan" value="<?php echo $u->stts_pernikahan ?>" readonly>
                            <span id="MsgIsi8" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label for="usia">Usia</label>
                            <input type="text" class="form-control" id="usia" name="usia" value="<?php echo $u->usia ?>" readonly>
                            <span id="MsgIsi9" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <label for="nik">TD</label>
                            <input type="text" class="form-control" id="td" name="td" value="<?php echo $u->TD ?>" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <label for="nik">N</label>
                            <input type="text" class="form-control" id="n" name="n" value="<?php echo $u->N ?>/menit" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <label for="nik">S</label>
                            <input type="text" class="form-control" id="s" name="s" value="<?php echo $u->S ?>°C" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-2 col-sm-2">    
                            <label for="nik">Tinggi Badan</label>
                            <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?php echo $u->tinggi_badan ?> cm" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-2 col-sm-2">    
                            <label for="poli">Berat Badan</label>
                            <input type="text" class="form-control" id="bb" name="bb" value="<?php echo $u->bb ?> kg" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <label for="poli">BMI</label>
                            <input type="text" class="form-control" id="bmi" name="bmi" value="<?php echo $u->bmi ?>" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <label for="poli">Obesitas</label>
                            <input type="text" class="form-control" id="obesitas" name="obesitas" value="<?php 
                                    $bmi = $u->bmi;
                                    if ($bmi <= 18.5) {
                                            echo "Berat Badan Kurang";
                                    } elseif ($bmi > 18.5 && $bmi <= 22.9) {
                                            echo "Berat Badan Normal";
                                    } elseif ($bmi > 22.9 && $bmi <= 24.9) {
                                            echo "Kelebihan Berat Badan dengan Risiko";
                                    } elseif ($bmi > 24.9 && $bmi < 30) {
                                            echo "Obesitas I";
                                    } elseif ($bmi >= 30) {
                                            echo "Obesitas II";
                                    }
                            ?>" readonly>
                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
                        </div>
                        <!-- Pemeriksaan Dokter Umum -->

                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Anamnesis</b></h4>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Keluhan Saat Ini</label>
                            <input type="text" class="form-control" value="<?php echo $u->keluhan_saat_ini; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Keluhan Saat Ini (lainnya)</label>
                            <input type="text" class="form-control" value="<?php echo $u->keluhan_lainnya; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Kebiasaan (Merokok)</label>
                            <input type="text" class="form-control" value="<?php echo $u->merokok_jumlah . ' batang/hari, ' . $u->merokok_sejak; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Kebiasaan (Olahraga)</label>
                            <input type="text" class="form-control" value="<?php echo $u->olahraga_frekuensi . ' kali/minggu'; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Kebiasaan (Konsumsi Lainnya)</label>
                            <input type="text" class="form-control" value="<?php echo $u->konsumsi_lainnya; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Penyakit Dahulu</label>
                            <input type="text" class="form-control" value="<?php echo $u->riwayat_penyakit_dahulu; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Penyakit Dahulu (lainnya)</label>
                            <input type="text" class="form-control" value="<?php echo $u->riwayat_penyakit_dahulu_lainnya; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Penyakit Keluarga</label>
                            <input type="text" class="form-control" value="<?php echo $u->riwayat_penyakit_keluarga; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Penyakit Keluarga (lainnya)</label>
                            <input type="text" class="form-control" value="<?php echo $u->riwayat_penyakit_keluarga_lainnya; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Jenis Pekerjaan</label>
                            <input type="text" class="form-control" value="<?php echo $u->jenis_pekerjaan; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Perusahaan</label>
                            <input type="text" class="form-control" value="<?php echo $u->perusahaan; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Lama Kerja</label>
                            <input type="text" class="form-control" value="<?php echo $u->lama_kerja; ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Riwayat Vaksinasi</label>
                            <input type="text" class="form-control" value="<?php echo $u->riwayat_vaksinasi; ?>" readonly>
                        </div>
                        
                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Pemeriksaan Dokter Umum</b></h4>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Kepala Wajah</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_kepala_wajah ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Telinga</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_telinga ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Hidung</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_hidung ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Tenggorokan</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_tenggorokan ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Leher</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_leher ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Thorax/Dada</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_thorax ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Paru</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_paru ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Jantung</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_jantung ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Abdomen</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_abdomen ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Kulit Kuku</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_kulit_kuku ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Genitourinaria</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_genitourinaria ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Ekstremitas Atas</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_ekstremitas_atas ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Ekstremitas Atas (Tambahan)</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_ekstremitas_atas_tambahan ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Ekstremitas Bawah</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_ekstremitas_bawah ?>" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <label>Hasil Pemeriksaan Ekstremitas Bawah (Tambahan)</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_ekstremitas_bawah_tambahan ?>" readonly>
                        </div>
                        <br><br>
                        <!-- Pemeriksaan Dokter Jantung -->
                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Pemeriksaan Dokter Jantung</b></h4>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Hasil Pemeriksaan Threadmill</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_threadmill ?>" readonly>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Hasil Pemeriksaan EKG</label>
                            <input type="text" class="form-control" value="<?php echo $u->hasil_pemeriksaan_ekg ?>" readonly>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Kesimpulan Dokter Jantung</label>
                            <textarea class="form-control" rows="3" readonly><?php echo $u->kesimpulan_jantung ?></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Saran Dokter Jantung</label>
                            <textarea class="form-control" rows="3" readonly><?php echo $u->saran_jantung ?></textarea>
                        </div>
                        <br><br>
                        <!-- Laboratorium -->
                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Pemeriksaan Laboratorium</b></h4>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Hematologi Lengkap</label>
                            <input type="text" class="form-control" id="hematologi_lengkap" name="hematologi_lengkap" value="<?php echo $u->hematologi_lengkap; ?>" placeholder="Masukkan Hasil Hematologi Lengkap">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Urine Lengkap</label>
                            <input type="text" class="form-control" id="urine_lengkap" name="urine_lengkap" value="<?php echo $u->urine_lengkap; ?>" placeholder="Masukkan Hasil Urine Lengkap">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Fungsi Liver</label>
                            <input type="text" class="form-control" id="fungsi_liver" name="fungsi_liver" value="<?php echo $u->fungsi_liver; ?>" placeholder="Masukkan Hasil Fungsi Liver">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Profile Lemak</label>
                            <input type="text" class="form-control" id="profile_lemak" name="profile_lemak" value="<?php echo $u->profile_lemak; ?>" placeholder="Masukkan Hasil Profile Lemak">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Fungsi Ginjal</label>
                            <input type="text" class="form-control" id="fungsi_ginjal" name="fungsi_ginjal" value="<?php echo $u->fungsi_ginjal; ?>" placeholder="Masukkan Hasil Fungsi Ginjal">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Glukosa Darah Puasa</label>
                            <input type="text" class="form-control" id="glukosa_darah_puasa" name="glukosa_darah_puasa" value="<?php echo $u->glukosa_darah_puasa; ?>" placeholder="Masukkan Hasil Glukosa Darah Puasa">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Glukosa Darah 2 Jam PP</label>
                            <input type="text" class="form-control" id="glukosa_darah_2_jam_pp" name="glukosa_darah_2_jam_pp" value="<?php echo $u->glukosa_darah_2_jam_pp; ?>" placeholder="Masukkan Hasil Glukosa Darah 2 Jam PP">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>HBsAg</label>
                            <input type="text" class="form-control" id="hasil_hbsag" name="hasil_hbsag" value="<?php echo $u->hasil_hbsag; ?>" placeholder="Masukkan Hasil HBsAg">
                        </div>
                        <br><br>
                        <!-- Non-Laboratorium -->
                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Pemeriksaan Non-Laboratorium</b></h4>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>ECG</label>
                            <input type="text" class="form-control" id="ecg" name="ecg" value="<?php echo $u->ecg; ?>" placeholder="Masukkan Hasil ECG">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Thorax PA</label>
                            <input type="text" class="form-control" id="thorax_pa" name="thorax_pa" value="<?php echo $u->thorax_pa; ?>" placeholder="Masukkan Hasil Thorax PA">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>USG Upp & Low Abdomen</label>
                            <input type="text" class="form-control" id="usg_upp_low_abdomen" name="usg_upp_low_abdomen" value="<?php echo $u->usg_upp_low_abdomen; ?>" placeholder="Masukkan Hasil USG Upp & Low Abdomen">
                        </div>
                        <br><br>
                        <!-- Resume -->
                        <div class="col-md-12 col-sm-12">
                            <h4 style="color: #29166f;"><b>Resume</b></h4>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="kesimpulan">Kesimpulan</label>
                            <textarea class="form-control" id="kesimpulan" name="kesimpulan" rows="3" placeholder="Masukkan Kesimpulan"><?php echo $u->kesimpulan; ?></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="saran">Saran</label>
                            <textarea class="form-control" id="saran" name="saran" rows="3" placeholder="Masukkan Saran"><?php echo $u->saran; ?></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label>Tindak Lanjut</label>
                            <textarea class="form-control" id="tindak_lanjut" name="tindak_lanjut" rows="3" placeholder="Masukkan Tindak Lanjut"><?php echo $u->tindak_lanjut; ?></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label for="dokter">Dokter Pemeriksa</label>
                            <select name="dokter" class="form-control">
                                <option value="">--</option>
                                <option value="Mita Wulansari, dr., MARS" <?php echo ($u->dokter == 'Mita Wulansari, dr., MARS') ? 'selected' : ''; ?>>Mita Wulansari, dr., MARS</option>
                                <option value="Syahrizal Ardhiyand Hidayat, dr., MARS" <?php echo ($u->dokter == 'Syahrizal Ardhiyand Hidayat, dr., MARS') ? 'selected' : ''; ?>>Syahrizal Ardhiyand Hidayat, dr., MARS</option>
                            </select>
                        </div>
                        <input type="hidden" name="tgl_periksa" value="<?php echo date('Y-m-d'); ?>">
                        <br><br><br><br>
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>&nbsp;
                            <a href="<?php echo base_url('meja3/index/'); ?>"class="previous"><button type="button" class="btn btn-danger">Kembali</button></a>
                        </div>
                    </div>
                </form>
                    <?php } ?>
			</div>
		</div>
        
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>
