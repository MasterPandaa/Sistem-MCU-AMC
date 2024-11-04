<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Formulir Pendaftaran</title>
	</head>
	<body>
		<div clacss="section">
			<div class="container">
            <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
            <center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
            <?php foreach($hasil as $u){ 
                $tgl = date('d-m-Y', strtotime($u->tgl))?>
            <table class="table table-borderles">
                <tbody>
                    <tr>
                        <td style="width: 20%">KODE BOOKING</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><b><?php echo $u->kode_booking ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">TANGGAL PERIKSA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><b>RAPID/SWAB <?php echo $u->tes ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">TANGGAL PERIKSA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><b><?php echo $tgl ?><b></td>
                    </tr>
                    <tr>
                        <td style="width: 20%">NAMA</td>
                        <td style="width: 10%">:</td>
                        <td style="width: 70%"><?php echo $u->nama ?></td>
                    </tr>
                </tbody>
            </table>
            <h3 style="font-style: italic;"><b>UNTUK DIPERHATIKAN</b></h3>
            <h4>1. &ensp; Kode Booking ini berlaku hingga <?php echo $tgl ?> pukul 23:59 WIB.</h4>
            <h4>2. &ensp; Kode booking ini berlaku untuk 1 pasien dengan nama yang sudah didaftarkan.</h4>
            <h4>3. &ensp; Tunjukan kode booking ini kepada petugas RS AMC Muhammadiyah.</h4>
            <h4>4. &ensp; Jangan lupa membawa KTP pasien yang melakukan pemeriksaan diagnosis COVID-19.</h4>
            <br>
                <!-- Button trigger modal -->
                <a href="http://localhost/epasienV2/welcome/laporan_pdf/<?php echo $u->kode_booking ?>"><button type="button" class="btn btn-primary">DOWNLOAD</button></a>
                <a href="http://localhost/epasienV2/welcome/index" class="previous"><button type="button" class="btn btn-danger">Kembali</button></a>
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