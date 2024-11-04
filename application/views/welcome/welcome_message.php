<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="application\css\fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> <!--load all styles -->
	<title>Formulir Pendaftaran</title>
	</head>
	<body>
	<!-- Image and text -->
		<nav class="navbar navbar-light" style="background-color:#29166f;">
		<a class="navbar-brand" href="#" style="color:white;font-size: 45px;">
			RS AMC Muhammadiyah
		</a>
		</nav>
		<div clacss="section">
			<div class="container">
			<h1><center>FORMULIR PENDAFTARAN TES DIAGNOSIS COVID-19<br>RS AMC MUHAMMADIYAH YOGYAKARTA</center></h1><br><br>
			<form action="<?php echo base_url(). 'welcome/in_data'; ?>" method="post" name="form">	
						<div class="row">
						<input type="hidden" class="form-control" id="kode_booking" name="kode_booking" value="<?php echo $kode_booking ?>">

							<div class="col-md-12 col-sm-12">
                                    <label for="nama">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-12 col-sm-12">    
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda" required>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-12 col-sm-12">
								<label for="tanggal">Tanggal Lahir</label>
								<div class='input-group date' id='datetimepicker1'>
									<input type="datetime-local" class="form-control" id="tanggal" name="tgl_lahir" required>
								</div>
                            </div>
                            <div class="col-md-12 col-sm-12">
								<label for="jk">Jenis Kelamin</label>
								<select name="jk" class="form-control">
                                        <option selected>--</option>
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                    </select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                    <label for="alamat">Alamat KTP</label>
                                    <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Masukan Alamat KTP Anda" required>
                                    <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-12 col-sm-12">
                                    <label for="alamatdom">Alamat DOMISILI</label>
                                    <input type="text" class="form-control" id="alamat_dom" name="alamat_dom" placeholder="Apabila alamat sesuai dengan alamat KTP, silahkan isi dengan 'SDA'">
                                    <span id="MsgIs6" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                    <label for="agama">AGAMA</label>
									<select name="agama" class="form-control">
                                        <option selected>--</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katholik">Katholik</option>
										<option value="hindu">Hindu</option>
										<option value="budha">Budha</option>
										<option value="lain">Lain-lain</option>
                                    </select>
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
                                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan Nomor HP Anda" required>
                                    <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" required>
                                    <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-6 col-sm-6">
								<label for="tanggal">Pilih Tanggal</label>
								<div class='input-group date' id='datetimepicker1'>
									<input type="datetime-local" class="form-control" id="tanggal" name="tgl" required>
								</div>
                            </div>
							<div class="col-md-6 col-sm-6">
                                    <label for="poli">Tes Diagnosis</label>
                                    <select name="tes" class="form-control">
                                        <option selected>--</option>
                                        <option value="antibodi">Rapid Antibodi</option>
                                        <option value="antigen">Swab Antigen</option>
                                        <option value="pcr">Swab PCR</option>
                                    </select>
                            </div>
							<div class="col-md-12 col-sm-12">
							<br><h3><center>Jawablah pertanyaan dibawah ini dengan sejujurnya</center></h3><br>
								<table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pertanyaan</th>
                                            <th scope="col">Ya</th>
                                            <th scope="col">Tidak</th>
                                            <th scope="col">Jika Ya, Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Apakah anda mengalami demam, batuk, pilek, dan/atau nyeri tenggorokan dalam 14 hari terakhir?</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan1" id="pertannyaan1" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl1" id="tgl1" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Apakah anda kehilangan indra penciuman dan/atau perasa?</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan2" id="pertannyaan2" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan2" id="pertannyaan2" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl2" id="tgl2" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Apakah anda ada riwayat perjalanan ke negara yang terjangkit covid-19 dalam 14 hari terkahir?<br>jika ya, tanggal berapa dan ke negara mana</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan3" id="pertannyaan3" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan3" id="pertannyaan3" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl3" id="tgl3" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Apakah anda sudah melakukan vaksin COVID-19?<br>Jika sudah, sebutkan tanggal vaksin pertama</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan4" id="pertannyaan4" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan4" id="pertannyaan4" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl4" id="tgl4" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Apakah anda sudah melakukan vaksin COVID-19?<br>Jika sudah, sebutkan tanggal vaksin kedua</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan5" id="pertannyaan5" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan5" id="pertannyaan5" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl5" id="tgl5" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Apakah anda pernah terkonfirmasi covid-19?<br>Jika ya, sebutkan tanggal anda terkonfirmasi dan tanggal dinyatakan negatif</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan6" id="pertannyaan6" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan6" id="pertannyaan6" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl6" id="tgl6" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Apakah anda memiliki komorbid/penyakit penyerta?<br>Seperti : TBC. HIV, DM, Hipertensi, Asma<br>jika ya, sebutkan nama komorbid</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan7" id="pertannyaan7" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan7" id="pertannyaan7" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl7" id="tgl7" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Apakah anda ada riwayat kontak erat dengan kasus konfirmai covid-19 dalam wakti 14 hari terkahir?<br>jika ya, tanggal berapa dan kontak dengan siapa?</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan8" id="pertannyaan8" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan8" id="pertannyaan8" value="tidak"></td>
                                            <td><input class="form-control" type="text" name="tgl8" id="tgl8" value=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Apakah anda pernah melakukan swab antigen/PCR sebelumnya?<br>Jika ya, sebutkan tanggal dan hasilnya</td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan9" id="pertannyaan9" value="ya"></td>
                                            <td><input class="form-check-input" type="radio" name="pertannyaan9" id="pertannyaan9" value="tidak"></td>
                                        	<td><input class="form-control" type="text" name="tgl9" id="tgl9" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
							<button type="submit" class="btn btn-primary btn-lg">DAFTAR</button>
						</div>
			</form>
			</div>
		</div>
		<!-- Footer -->
		<footer class="text-center text-lg-start text-muted" style="background-color: lightgrey;">
		<!-- Section: Social media -->
			<section
				class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
			>
				<!-- Left -->
				<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
				<span>Temukan Kami :</span>
				</div>
				<!-- Left -->

				<!-- Right -->
				<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
					<a href="" class="me-4 text-reset">
						<i class="fab fa-facebook-f"></i>
					</a>
					<!-- <a href="" class="me-4 text-reset">
						<i class="fab fa-twitter"></i>
					</a> -->
					<!-- <a href="" class="me-4 text-reset">
						<i class="fab fa-google"></i>
					</a> -->
					<a href="" class="me-4 text-reset">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
				<!-- Right -->
			</section>
			<!-- Section: Social media -->

			<!-- Section: Links  -->
			<section class="">
				<div class="container text-center text-md-start mt-5">
				<!-- Grid row -->
				<div class="row mt-3">
					<!-- Grid column -->
					<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
					<!-- Content -->
					<h4 class="text-uppercase fw-bold mb-4">
						RS AMC Muhammadiyah
					</h4>
					</div>
					<!-- Grid column -->
					<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4">
					<!-- Links -->
					<h6 class="text-uppercase fw-bold mb-4">
						Contact
					</h6>
					<p>Jl. HOS Cokroaminoto No.17, Yogyakarta</p>
					<p>
						info@rsamcmuhammdiyah.com
					</p>
					<p>(0274) 618-400</p>
					<p>+62 817 0618 400</p>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
				</div>
			</section>
			<!-- Section: Links  -->

		<!-- Copyright -->
		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
			© 2021 Copyright:
			<a class="text-reset fw-bold">RS AMC Muhammadiyah Yogyakarta</a>
		</div>
		<!-- Copyright -->
		</footer>
		<!-- Footer -->
		<script type="text/javascript">
			 $(function () {
             $('#datetimepicker1').datetimepicker();
         });
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
</html>