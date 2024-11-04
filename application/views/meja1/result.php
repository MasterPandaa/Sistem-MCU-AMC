<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
	</head>
	<body>
    <?php $this->load->view("meja1/navbar.php") ?>
		<div clacss="section">
			<div class="container">
            <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
            <center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
            <h3>Hasil Pencarian</h3><br>
            <?php foreach($cari as $u){ 
                $today = date('d-m-Y');
               ?>
                   <form action="<?php echo base_url(). 'meja1/periksa'; ?>" method="post" name="form">	
						<div class="row">
                        <!-- <input type="hidden" class="form-control" id="tes" name="kode_booking" value="<?php echo $u->kode_booking ?>"> -->
                            <div class="col-md-12 col-sm-12">
                                   
									<input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?php echo $u->id ?>" hidden>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-12 col-sm-12">
                                    <label for="nama">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $u->nama ?>" readonly>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-12 col-sm-12">
                                    <label for="alamatdom">Unit Kerja</label>
                                    <input type="text" class="form-control" id="prodi" name="prodi"value="<?php echo $u->prodi ?>" readonly>
                                    <span id="MsgIs6" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-6 col-sm-6">    
                                    <label for="nik">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="prodi" name="prodi"value="<?php echo $u->tgl_lahir ?>" readonly>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-6 col-sm-6">    
                                    <label for="nik">Paket Pemeriksaan</label>
                                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $u->paket_periksa ?>" readonly>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                            </div>
                            <div class="col-md-6 col-sm-6">    
                                    <label for="nik">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="prodi" name="tgl_periksa" value="<?php echo $today ?>" readonly>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                            </div>
							<div class="col-md-6 col-sm-6">
                                    <label for="poli">Status Kedatangan</label>
                                    <select name="status" class="form-control">
                                        <option selected>--</option>
                                        <option value="DATANG">DATANG</option>
                                    </select>
                            </div><br><br><br><br>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>&nbsp;
                                <a href="<?php echo base_url('meja1/index/'); ?>" class="previous"><button type="button" class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>
                </form>
                <?php } ?>
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