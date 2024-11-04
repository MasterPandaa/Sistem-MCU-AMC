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
		<div class="section">
			<div class="container">
				<h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
				<center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
				<hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
			</div>
			<div class="section">
				<div class="container">
					<h2>Pemeriksaan Umum</h2>
					<hr>
					<?php foreach($cari as $u){ 
					 $tgl_lahir = date('d-m-Y', strtotime($u->tgl_lahir));?>
					<form action="<?php echo base_url(). 'meja3/periksa_umum'; ?>" method="post" name="form">	
                    <input type="hidden" name="jenis_dokter" value="dokter_umum">
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
							
							<!-- A. Keluhan Saat Ini -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Keluhan Saat Ini</b></h4>
								<div class="checkbox-group">
									<?php
									$keluhan_options = [
										'Demam', 'Nyeri Kepala', 'Pusing atau Rasa Berputar', 'Nyeri Perut atau Gangguan Pencernaan',
										'Lemas', 'Nyeri Dada', 'Sesak Nafas', 'Bengkak pada Kaki atau anggota Badan Lainnya',
										'Gangguan Kemih', 'Gangguan Buang Air Besar', 'Gangguan Mata atau Penglihatan',
										'Gangguan Pendengaran', 'Gatal atau Gangguan Kulit Lainnya', 'Kesemutan',
										'Gangguan Pada Alat Reproduksi', 'Nyeri Otot dan Sendi', 'Benjolan pada Kulit atau Bagian Tubuh',
										'Lain-lain', 'Tidak ada'
									];
									$total_options = count($keluhan_options);
									$options_per_row = ceil($total_options / 7);

									$saved_keluhan_saat_ini = explode(', ', $u->keluhan_saat_ini);
									$saved_keluhan_lainnya = $u->keluhan_lainnya;
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($keluhan_options[$i], $saved_keluhan_saat_ini) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										$option_id = 'keluhan_saat_ini_' . strtolower(str_replace(' ', '_', $keluhan_options[$i]));
										echo '<input type="checkbox" id="' . $option_id . '" name="keluhan_saat_ini[]" value="' . $keluhan_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="' . $option_id . '">' . $keluhan_options[$i] . '</label>';
										if ($keluhan_options[$i] == 'Lain-lain') {
											echo '<input type="text" class="form-control form-control-sm" id="keluhan_lainnya" name="keluhan_lainnya" value="' . $saved_keluhan_lainnya . '" style="width: 150px; margin-left: 10px;">';
										}
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>

							<!-- B. Riwayat Kebiasaan -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Riwayat Kebiasaan</b></h4>
								<div class="form-group">
									<input type="checkbox" id="merokok" name="merokok" onchange="toggleMerokokInputs()" <?php echo (!empty($u->merokok_jumlah) || !empty($u->merokok_sejak)) ? 'checked' : ''; ?>>
									<label for="merokok">Merokok:</label>
									<div class="row">
										<div class="col-md-6">
											<input type="text" class="form-control merokok-input" id="merokok_jumlah" name="merokok_jumlah" value="<?php echo str_replace(' batang/hari', '', $u->merokok_jumlah); ?>" placeholder="Jumlah batang" <?php echo (empty($u->merokok_jumlah) && empty($u->merokok_sejak)) ? : ''; ?>>
										</div>
										<div class="col-md-6">
											<input type="text" class="form-control merokok-input" id="merokok_sejak" name="merokok_sejak" value="<?php echo str_replace('sejak tahun ', '', $u->merokok_sejak); ?>" placeholder="Tahun mulai" <?php echo (empty($u->merokok_jumlah) && empty($u->merokok_sejak)) ? : ''; ?>>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="checkbox" id="olahraga" name="olahraga" onchange="toggleOlahragaInput()" <?php echo (!empty($u->olahraga_frekuensi)) ? 'checked' : ''; ?>>
									<label for="olahraga">Olahraga:</label>
									<input type="text" class="form-control" id="olahraga_frekuensi" name="olahraga_frekuensi" value="<?php echo str_replace(' kali/minggu', '', $u->olahraga_frekuensi); ?>" placeholder="Frekuensi per minggu" <?php echo (empty($u->olahraga_frekuensi)) ?  : ''; ?>>
								</div>
								<div class="form-group">
									<input type="checkbox" id="konsumsi_lainnya" name="konsumsi_lainnya" onchange="toggleKonsumsiLainnyaInput()" <?php echo (!empty($u->konsumsi_lainnya)) ? 'checked' : ''; ?>>
									<label for="konsumsi_lainnya">Minum Alkohol / Obat / Vitamin / Jamu / dll:</label>
									<input type="text" class="form-control" id="konsumsi_lainnya_input" name="konsumsi_lainnya" value="<?php echo $u->konsumsi_lainnya; ?>" <?php echo (empty($u->konsumsi_lainnya)) ? : ''; ?>>
								</div>
							</div>

							<!-- C. Riwayat Penyakit Dahulu -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Riwayat Penyakit Dahulu</b></h4>
								<div class="checkbox-group">
									<?php
									$riwayat_penyakit_options = [
										'Rawat Inap', 'Operasi', 'Asma', 'Penyakit Paru Lainnya', 'Penyakit Jantung',
										'Tekanan Darah Tinggi', 'Stroke', 'Kencing Manis', 'Gangguan Pendengaran',
										'Tumor/Kanker', 'Luka Parah', 'Alergi', 'Penyakit Saluran Cerna',
										'Gangguan Mental', 'Epilepsi / Ayan', 'Patah Tulang', 'Lain-lain', 'Tidak ada'
									];
									$total_options = count($riwayat_penyakit_options);
									$options_per_row = ceil($total_options / 6);
									
									$saved_riwayat_penyakit_dahulu = explode(', ', $u->riwayat_penyakit_dahulu);
									$saved_riwayat_penyakit_dahulu_lainnya = $u->riwayat_penyakit_dahulu_lainnya;
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($riwayat_penyakit_options[$i], $saved_riwayat_penyakit_dahulu) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										$option_id = 'riwayat_penyakit_' . strtolower(str_replace(' ', '_', $riwayat_penyakit_options[$i]));
										echo '<input type="checkbox" id="' . $option_id . '" name="riwayat_penyakit_dahulu[]" value="' . $riwayat_penyakit_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="' . $option_id . '">' . $riwayat_penyakit_options[$i] . '</label>';
										if ($riwayat_penyakit_options[$i] == 'Lain-lain') {
											echo '<input type="text" class="form-control form-control-sm" id="riwayat_penyakit_dahulu_lainnya" name="riwayat_penyakit_dahulu_lainnya" value="' . $saved_riwayat_penyakit_dahulu_lainnya . '" style="width: 150px; margin-left: 10px;">';
										}
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>

							<!-- D. Riwayat Penyakit Keluarga -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Riwayat Penyakit Keluarga</b></h4>
								<div class="checkbox-group">
									<?php
									$riwayat_keluarga_options = [
										'Tenanan Darah Tinggi', 'Stroke', 'Asma', 'Gangguan Mental', 'Alergi',
										'Kencing Manis', 'Penyakit Jantung', 'Epilepsi / Ayan', 'Penyakit Paru',
										'Penyakit Saluran Cerna', 'Tumor/Kanker', 'Lain-lain', 'Tidak ada'
									];
									$total_options = count($riwayat_keluarga_options);
									$options_per_row = ceil($total_options / 4);

									$saved_riwayat_penyakit_keluarga = explode(', ', $u->riwayat_penyakit_keluarga);
									$saved_riwayat_penyakit_keluarga_lainnya = $u->riwayat_penyakit_keluarga_lainnya;
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($riwayat_keluarga_options[$i], $saved_riwayat_penyakit_keluarga) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										$option_id = 'riwayat_keluarga_' . strtolower(str_replace(' ', '_', $riwayat_keluarga_options[$i]));
										echo '<input type="checkbox" id="' . $option_id . '" name="riwayat_penyakit_keluarga[]" value="' . $riwayat_keluarga_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="' . $option_id . '">' . $riwayat_keluarga_options[$i] . '</label>';
										if ($riwayat_keluarga_options[$i] == 'Lain-lain') {
											echo '<input type="text" class="form-control form-control-sm" id="riwayat_penyakit_keluarga_lainnya" name="riwayat_penyakit_keluarga_lainnya" value="' . $saved_riwayat_penyakit_keluarga_lainnya . '" style="width: 150px; margin-left: 10px;">';
										}
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>

							<!-- E. Riwayat Pekerjaan Sebelumnya -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Riwayat Pekerjaan Sebelumnya</b></h4>
								<div class="form-group">
									<label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
									<input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" value="<?php echo $u->jenis_pekerjaan; ?>">
								</div>
								<div class="form-group">
									<label for="perusahaan">Perusahaan:</label>
									<input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?php echo $u->perusahaan; ?>">
								</div>
								<div class="form-group">
									<label for="lama_kerja">Lama Kerja:</label>
									<input type="text" class="form-control" id="lama_kerja" name="lama_kerja" value="<?php echo $u->lama_kerja; ?>">
								</div>
							</div>

							<!-- F. Riwayat Vaksinasi -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Riwayat Vaksinasi</b></h4>
								<div class="checkbox-group">
									<?php
									$vaksinasi_options = [
										'Influenza', 'Hep A', 'Hep B', 'Menigitis', 'Tifoid',
										'Tetanus', 'HPV', 'Rabies', 'Encephalitis', 'Yellow Fever', 'Tidak ada'
									];
									$total_options = count($vaksinasi_options);
									$options_per_row = ceil($total_options / 6);

									$saved_riwayat_vaksinasi = explode(', ', $u->riwayat_vaksinasi);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($vaksinasi_options[$i], $saved_riwayat_vaksinasi) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										$option_id = 'vaksinasi_' . strtolower(str_replace(' ', '_', $vaksinasi_options[$i]));
										echo '<input type="checkbox" id="' . $option_id . '" name="vaksinasi[]" value="' . $vaksinasi_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="' . $option_id . '">' . $vaksinasi_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 1) Hasil Pemeriksaan Kepala Wajah -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Kepala Wajah</b></h4>
								<div class="checkbox-group">
									<?php
									$kepala_wajah_options = ['Normal', 'Defomitas', 'Luka', 'Tumor'];
									$total_options = count($kepala_wajah_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_kepala_wajah = explode(', ', $u->hasil_pemeriksaan_kepala_wajah);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($kepala_wajah_options[$i], $saved_kepala_wajah) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="kepala_wajah_' . strtolower(str_replace(' ', '_', $kepala_wajah_options[$i])) . '" name="hasil_pemeriksaan_kepala_wajah[]" value="' . $kepala_wajah_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="kepala_wajah_' . strtolower(str_replace(' ', '_', $kepala_wajah_options[$i])) . '">' . $kepala_wajah_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 2) Hasil Pemeriksaan Telinga -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Telinga</b></h4>
								<div class="checkbox-group">
									<?php
									$telinga_options = ['Normal', 'Tanda Infeksi', 'Serumen', 'Perforasi MT', 'Reflex Cahaya MT'];
									$total_options = count($telinga_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_telinga = explode(', ', $u->hasil_pemeriksaan_telinga);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($telinga_options[$i], $saved_telinga) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="telinga_' . strtolower(str_replace(' ', '_', $telinga_options[$i])) . '" name="hasil_pemeriksaan_telinga[]" value="' . $telinga_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="telinga_' . strtolower(str_replace(' ', '_', $telinga_options[$i])) . '">' . $telinga_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
	
                            <!-- Hasil Pemeriksaan Hidung -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Hidung</b></h4>
								<div class="checkbox-group">
									<?php
									$hidung_options = ['Normal', 'Deviasi Septum', 'Udem', 'Hiperemis', 'Sekret'];
									$total_options = count($hidung_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_hidung = explode(', ', $u->hasil_pemeriksaan_hidung);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($hidung_options[$i], $saved_hidung) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="hidung_' . strtolower(str_replace(' ', '_', $hidung_options[$i])) . '" name="hasil_pemeriksaan_hidung[]" value="' . $hidung_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="hidung_' . strtolower(str_replace(' ', '_', $hidung_options[$i])) . '">' . $hidung_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 3) Hasil Pemeriksaan Tenggorokan -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Tenggorokan</b></h4>
								<div class="checkbox-group">
									<?php
									$tenggorokan_options = ['Normal', 'Hiperemis', 'Tonsil Hipertrofi'];
									$total_options = count($tenggorokan_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_tenggorokan = explode(', ', $u->hasil_pemeriksaan_tenggorokan);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($tenggorokan_options[$i], $saved_tenggorokan) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="tenggorokan_' . strtolower(str_replace(' ', '_', $tenggorokan_options[$i])) . '" name="hasil_pemeriksaan_tenggorokan[]" value="' . $tenggorokan_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="tenggorokan_' . strtolower(str_replace(' ', '_', $tenggorokan_options[$i])) . '">' . $tenggorokan_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 4) Hasil Pemeriksaan Leher -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Leher</b></h4>
								<div class="checkbox-group">
									<?php
									$leher_options = ['Normal', 'JVP Meningkat', 'Spasme', 'Pembesaran KGB', 'Pembesaran Tiroid'];
									$total_options = count($leher_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_leher = explode(', ', $u->hasil_pemeriksaan_leher);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($leher_options[$i], $saved_leher) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="leher_' . strtolower(str_replace(' ', '_', $leher_options[$i])) . '" name="hasil_pemeriksaan_leher[]" value="' . $leher_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="leher_' . strtolower(str_replace(' ', '_', $leher_options[$i])) . '">' . $leher_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 5) Hasil Pemeriksaan Thorax/Dada -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Thorax/Dada</b></h4>
								<div class="checkbox-group">
									<?php
									$thorax_options = ['Normal', 'Defomitas', 'Tumor Mammae'];
									$total_options = count($thorax_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_thorax = explode(', ', $u->hasil_pemeriksaan_thorax);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($thorax_options[$i], $saved_thorax) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="thorax_' . strtolower(str_replace(' ', '_', $thorax_options[$i])) . '" name="hasil_pemeriksaan_thorax[]" value="' . $thorax_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="thorax_' . strtolower(str_replace(' ', '_', $thorax_options[$i])) . '">' . $thorax_options[$i] . '</label>';
										echo '</div>';
												if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 6) Hasil Pemeriksaan Paru -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Paru</b></h4>
								<div class="checkbox-group">
									<?php
									$paru_options = ['Normal', 'Gerak Asimetris', 'Perkusi Abnormal', 'Suara Tambahan'];
									$total_options = count($paru_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_paru = explode(', ', $u->hasil_pemeriksaan_paru);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($paru_options[$i], $saved_paru) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="paru_' . strtolower(str_replace(' ', '_', $paru_options[$i])) . '" name="hasil_pemeriksaan_paru[]" value="' . $paru_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="paru_' . strtolower(str_replace(' ', '_', $paru_options[$i])) . '">' . $paru_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 7) Hasil Pemeriksaan Jantung -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Jantung</b></h4>
								<div class="checkbox-group">
									<?php
									$jantung_options = ['Normal', 'Pembesaran Jantung', 'Suara Tambahan', 'Gangguan Irama'];
									$total_options = count($jantung_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_jantung = explode(', ', $u->hasil_pemeriksaan_jantung);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($jantung_options[$i], $saved_jantung) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="jantung_' . strtolower(str_replace(' ', '_', $jantung_options[$i])) . '" name="hasil_pemeriksaan_jantung[]" value="' . $jantung_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="jantung_' . strtolower(str_replace(' ', '_', $jantung_options[$i])) . '">' . $jantung_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 8) Hasil Pemeriksaan Abdomen -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Abdomen</b></h4>
								<div class="checkbox-group">
									<?php
									$abdomen_options = ['Normal', 'Peristaltik Abnormal', 'Pembesaran Hati', 'Nyeri Tekan', 'Nyeri Ketok KV', 'Shifting Dulness', 'Hemorroid'];
									$total_options = count($abdomen_options);
									$options_per_row = ceil($total_options / 4);
									
									$saved_abdomen = explode(', ', $u->hasil_pemeriksaan_abdomen);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($abdomen_options[$i], $saved_abdomen) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="abdomen_' . strtolower(str_replace(' ', '_', $abdomen_options[$i])) . '" name="hasil_pemeriksaan_abdomen[]" value="' . $abdomen_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="abdomen_' . strtolower(str_replace(' ', '_', $abdomen_options[$i])) . '">' . $abdomen_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 9) Hasil Pemeriksaan Kulit Kuku -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Kulit Kuku</b></h4>
								<div class="checkbox-group">
									<?php
									$kulit_kuku_options = ['Normal', 'Dermatitis', 'Mikosis', 'Infeksi'];
									$total_options = count($kulit_kuku_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_kulit_kuku = explode(', ', $u->hasil_pemeriksaan_kulit_kuku);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($kulit_kuku_options[$i], $saved_kulit_kuku) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="kulit_kuku_' . strtolower(str_replace(' ', '_', $kulit_kuku_options[$i])) . '" name="hasil_pemeriksaan_kulit_kuku[]" value="' . $kulit_kuku_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="kulit_kuku_' . strtolower(str_replace(' ', '_', $kulit_kuku_options[$i])) . '">' . $kulit_kuku_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 10) Hasil Pemeriksaan Genitourinaria -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Genitourinaria</b></h4>
								<div class="checkbox-group">
									<?php
									$genitourinaria_options = ['Normal', 'Retensi urin', 'Tanda Infeksi'];
									$total_options = count($genitourinaria_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_genitourinaria = explode(', ', $u->hasil_pemeriksaan_genitourinaria);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($genitourinaria_options[$i], $saved_genitourinaria) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="genitourinaria_' . strtolower(str_replace(' ', '_', $genitourinaria_options[$i])) . '" name="hasil_pemeriksaan_genitourinaria[]" value="' . $genitourinaria_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="genitourinaria_' . strtolower(str_replace(' ', '_', $genitourinaria_options[$i])) . '">' . $genitourinaria_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 11) Hasil Pemeriksaan Ekstremitas Atas -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Ekstremitas Atas</b></h4>
								<div class="checkbox-group">
									<?php
									$ekstremitas_atas_options = ['Normal', 'Defomitas', 'Tremor', 'Udem', 'Palmar Eritem', 'Penurunan Kekuatan'];
									$total_options = count($ekstremitas_atas_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_ekstremitas_atas = explode(', ', $u->hasil_pemeriksaan_ekstremitas_atas);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($ekstremitas_atas_options[$i], $saved_ekstremitas_atas) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="ekstremitas_atas_' . strtolower(str_replace(' ', '_', $ekstremitas_atas_options[$i])) . '" name="hasil_pemeriksaan_ekstremitas_atas[]" value="' . $ekstremitas_atas_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="ekstremitas_atas_' . strtolower(str_replace(' ', '_', $ekstremitas_atas_options[$i])) . '">' . $ekstremitas_atas_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
								<label>Tambahan</label>
								<div class="checkbox-group">
									<?php
									$tambahan_ekstremitas_atas_options = ['Tiner Sign', 'Phalen Test', 'Lewis Prusik Test', 'Finkelstein Test'];
									$total_options = count($tambahan_ekstremitas_atas_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_tambahan_ekstremitas_atas = explode(', ', $u->hasil_pemeriksaan_ekstremitas_atas_tambahan);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($tambahan_ekstremitas_atas_options[$i], $saved_tambahan_ekstremitas_atas) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="ekstremitas_atas_tambahan_' . strtolower(str_replace(' ', '_', $tambahan_ekstremitas_atas_options[$i])) . '" name="hasil_pemeriksaan_ekstremitas_atas_tambahan[]" value="' . $tambahan_ekstremitas_atas_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="ekstremitas_atas_tambahan_' . strtolower(str_replace(' ', '_', $tambahan_ekstremitas_atas_options[$i])) . '">' . $tambahan_ekstremitas_atas_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							
							<!-- 12) Hasil Pemeriksaan Ekstremitas Bawah -->
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Hasil Pemeriksaan Ekstremitas Bawah</b></h4>
								<div class="checkbox-group">
									<?php
									$ekstremitas_bawah_options = ['Normal', 'Defomitas', 'Varises', 'Udem', 'Vaskularisasi Abnormal', 'Penurunan Kekuatan'];
									$total_options = count($ekstremitas_bawah_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_ekstremitas_bawah = explode(', ', $u->hasil_pemeriksaan_ekstremitas_bawah);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($ekstremitas_bawah_options[$i], $saved_ekstremitas_bawah) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="ekstremitas_bawah_' . strtolower(str_replace(' ', '_', $ekstremitas_bawah_options[$i])) . '" name="hasil_pemeriksaan_ekstremitas_bawah[]" value="' . $ekstremitas_bawah_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="ekstremitas_bawah_' . strtolower(str_replace(' ', '_', $ekstremitas_bawah_options[$i])) . '">' . $ekstremitas_bawah_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
								<label>Tambahan</label>
								<div class="checkbox-group">
									<?php
									$tambahan_ekstremitas_bawah_options = ['Laseque Test', 'Kernig Test', 'Patrick Test', 'Kontra Patrick'];
									$total_options = count($tambahan_ekstremitas_bawah_options);
									$options_per_row = ceil($total_options / 3);
									
									$saved_tambahan_ekstremitas_bawah = explode(', ', $u->hasil_pemeriksaan_ekstremitas_bawah_tambahan);
									
									for ($i = 0; $i < $total_options; $i++) {
										if ($i % $options_per_row == 0) {
											echo '<div class="checkbox-row">';
										}
										$is_checked = in_array($tambahan_ekstremitas_bawah_options[$i], $saved_tambahan_ekstremitas_bawah) ? 'checked' : '';
										echo '<div class="checkbox-item">';
										echo '<input type="checkbox" id="ekstremitas_bawah_tambahan_' . strtolower(str_replace(' ', '_', $tambahan_ekstremitas_bawah_options[$i])) . '" name="hasil_pemeriksaan_ekstremitas_bawah_tambahan[]" value="' . $tambahan_ekstremitas_bawah_options[$i] . '" ' . $is_checked . '>';
										echo '<label for="ekstremitas_bawah_tambahan_' . strtolower(str_replace(' ', '_', $tambahan_ekstremitas_bawah_options[$i])) . '">' . $tambahan_ekstremitas_bawah_options[$i] . '</label>';
										echo '</div>';
										if (($i + 1) % $options_per_row == 0 || $i == $total_options - 1) {
											echo '</div>';
										}
									}
									?>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<h4 style="color: #29166f;"><b>Dokter Pemeriksa</b></h4>
								<select name="dr_umum" class="form-control">
									<option value="">--</option>
									<option value="Mita Wulansari, dr., MARS" <?php echo ($u->dr_umum == 'Mita Wulansari, dr., MARS') ? 'selected' : ''; ?>>Mita Wulansari, dr., MARS</option>
									<option value="Syahrizal Ardhiyand Hidayat, dr., MARS" <?php echo ($u->dr_umum == 'Syahrizal Ardhiyand Hidayat, dr., MARS') ? 'selected' : ''; ?>>Syahrizal Ardhiyand Hidayat, dr., MARS</option>
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
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const lainlainCheckboxes = document.querySelectorAll('input[type="checkbox"][value="Lain-lain"]');
				lainlainCheckboxes.forEach(function(checkbox) {
					checkbox.addEventListener('change', function() {
						const textInput = this.parentElement.querySelector('input[type="text"]');
						if (this.checked) {
							textInput.classList.remove('d-none');
						} else {
							textInput.classList.add('d-none');
							textInput.value = '';
						}
					});
				});
			});

			function toggleMerokokInputs() {
				var checkbox = document.getElementById('merokok');
				var inputs = document.getElementsByClassName('merokok-input');
				for (var i = 0; i < inputs.length; i++) {
					inputs[i].style.display = checkbox.checked ? 'block' : 'none';
				}
			}

			function toggleOlahragaInput() {
				var checkbox = document.getElementById('olahraga');
				var input = document.getElementById('olahraga_frekuensi');
				input.style.display = checkbox.checked ? 'block' : 'none';
			}

			function toggleKonsumsiLainnyaInput() {
				var checkbox = document.getElementById('konsumsi_lainnya');
				var input = document.getElementById('konsumsi_lainnya_input');
				input.style.display = checkbox.checked ? 'block' : 'none';
			}
		</script>
	</body>
</html>