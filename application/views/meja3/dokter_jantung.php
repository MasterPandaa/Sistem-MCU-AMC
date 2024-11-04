<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
	<style>
		.checkbox-group {
			display: flex;
			flex-direction: column;
		}
		.checkbox-row {
			display: flex;
			justify-content: space-between;
			margin-bottom: 10px;
		}
		.checkbox-item {
			display: flex;
			align-items: center;
			width: 33%; /* Untuk 3 kolom */
		}
		.checkbox-item input[type="checkbox"] {
			margin-right: 5px;
		}
	</style>
	</head>
	<body>
    <?php $this->load->view("meja3/navbar.php") ?>
		<div clacss="section">
			<div class="container">
            <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
            <center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
			</div>
        <div clacss="section">
			<div class="container">
                <h2>Pemeriksaan Jantung</h2>
                <hr>
                <?php foreach($cari as $u){ 
                 $tgl_lahir = date('d-m-Y', strtotime($u->tgl_lahir));?>
                <form action="<?php echo base_url(). 'meja3/periksa_jantung'; ?>" method="post" name="form">	
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
                                <div class="col-md-12 col-sm-12">
                                        <h4 style="color: #29166f;"><b>Hasil Pemeriksaan Threadmill</b></h4>
                                        <input type="text" class="form-control" id="hasil_pemeriksaan_threadmill" name="hasil_pemeriksaan_threadmill" value="<?php echo $u->hasil_pemeriksaan_threadmill; ?>" placeholder="Masukkan Hasil Pemeriksaan Threadmill">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                        <h4 style="color: #29166f;"><b>Hasil Pemeriksaan EKG</b></h4>
                                        <input type="text" class="form-control" id="hasil_pemeriksaan_ekg" name="hasil_pemeriksaan_ekg" value="<?php echo $u->hasil_pemeriksaan_ekg; ?>" placeholder="Masukkan Hasil Pemeriksaan EKG">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                        <h4 style="color: #29166f;"><b>Kesimpulan</b></h4>
                                        <textarea class="form-control" id="kesimpulan_jantung" name="kesimpulan_jantung" rows="3" placeholder="Masukkan Kesimpulan"><?php echo $u->kesimpulan_jantung; ?></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                        <h4 style="color: #29166f;"><b>Saran</b></h4>
                                        <textarea class="form-control" id="saran_jantung" name="saran_jantung" rows="3" placeholder="Masukkan Saran"><?php echo $u->saran_jantung; ?></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                        <h4 style="color: #29166f;"><b>Dokter Pemeriksa</b></h4>
                                        <select name="dr_jantung" class="form-control">
                                                <option value="">--</option>
                                                <option value="Evita Devi Noor R, dr., Sp.JP(K)" <?php echo ($u->dr_jantung == 'Evita Devi Noor R, dr., Sp.JP(K)') ? 'selected' : ''; ?>>Evita Devi Noor R, dr., Sp.JP(K)</option>
                                                <option value="Gagah Buana Putra, dr., Sp.JP" <?php echo ($u->dr_jantung == 'Gagah Buana Putra, dr., Sp.JP') ? 'selected' : ''; ?>>Gagah Buana Putra, dr., Sp.JP</option>
                                                <option value="Inggita Hanung, dr., Sp.JP.,FIHA" <?php echo ($u->dr_jantung == 'Inggita Hanung, dr., Sp.JP.,FIHA') ? 'selected' : ''; ?>>Inggita Hanung, dr., Sp.JP.,FIHA</option>
                                        </select>
                                        <br>
                                </div>
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
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
