<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>SISTEM MCU RS AMC Muhammadiyah</title>
	</head>
	<body>
    <?php $this->load->view("meja3/navbar.php") ?>
		<div clacss="section">
			<div class="container">
            <h1><center><b><font size="7" face="arial">RS AMC MUHAMMADIYAH</font></b></center></h1>
            <center><b><font size="2" face="Courier New">Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253</font></b></center>
            <hr style="border: 2px solid #29166f ;"><width="150" height="100"></hr>
            
			</div>
		</div><br>
        <div clacss="section">
			<div class="container">
                <h3>Daftar Pasien</h3>
               <!--<a href="<?php echo base_url('meja4/export/'); ?>" class="previous"><button style="float: left;"  type="button" class="btn btn-success">Daftar Yang Sudah Diprint</button></a>-->
               <!-- <a href="<?php echo base_url('meja4/export/'); ?>" class="previous"><button style="float: right;"  type="button" class="btn btn-success"><span class="glyphicon glyphicon-print"></span></button></a><br>-->
                <hr>
                <table class="table table-striped table-bordered table-sm table-paginate">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Saran</th>
                            <th scope="col">Dokter Pemeriksa</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no = 1;
                    foreach ($pasien as $pasien): ?>
                        <tr>
                            <th><?php echo $no++ ?></th>
                            <td><?php echo $pasien->nama ?></td>
                            <td><?php echo $pasien->saran ?></td>
                            <td><?php echo $pasien->dokter ?></td>
                            <td><?php echo $pasien->status ?></td>
                            <td> <a href="<?php echo base_url('meja4/print/'.$pasien->id); ?>" class="previous"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-print"></span></button></a><a href="<?php echo base_url('meja4/label/'.$pasien->id); ?>" class="previous"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-barcode"></span></button></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
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
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
		 <script>
            $(document).ready( function () {
                $('.table-paginate').dataTable();
            } );
        </script>
    </body>
</html>